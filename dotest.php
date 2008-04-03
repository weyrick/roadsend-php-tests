<?php

/* ***** BEGIN LICENSE BLOCK *****
 * Roadsend PHP Compiler
 * Copyright (C) 2008 Roadsend, Inc.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public License
 * as published by the Free Software Foundation; either version 2.1
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA
 * ***** END LICENSE BLOCK ***** */

/**
 * This is a test suite program designed to be compatible with Zend .phpt test
 * template files. It supports features that are specific to Roadsend PHP, but should
 * also be compatible with Zend PHP
 */

class Control {
    
    static public $verbosity = 1;
    static public $pccBinary;
    static public $pccVersion;
    static public $testRoot;
    static public $outDir;
    static public $singleMode = false;
    // remove Warning: lines from templates before comparing output
    static public $removeWarnings = true;
    
    public static function log($level, $msg) {
        if (self::$verbosity >= $level)
            echo "$msg\n";
    }

    public static function findPCC() {
        if (getenv('PCC_BINARY')) {
            self::$pccBinary = trim(getenv('PCC_BINARY'));
        }
        else {
            // XXX non portable, find a better way to do this
            $b = `which pcc`;
            if (!empty($b)) {
                self::$pccBinary = trim($b);
            }
            else {
                self::bomb('Unable to find pcc binary. Try setting PCC_BINARY or putting pcc in the PATH');
            }
        }

        self::$pccVersion = trim(exec(self::$pccBinary.' --version'));
        echo "Roadsend PHP: ".self::$pccBinary."\n";
        echo "     Version: ".self::$pccVersion."\n";
    }
    
    public static function bomb($msg) {
        die("FAIL: {$msg}\n");
    }

    public static function flush() {
        fflush(STDOUT);
    }
    
}

class TestSuite {

    protected $testList;
    
    public function usage() {
        echo "Roadsend PHP Test Suite\n";
        echo "dotest [-dfl] <directory or file> [output directory]\n";
        echo "  -d <path>\t\tRun all tests in the specified root directory\n";
        echo "  -f <file>\t\tRun the single test specified\n";
        echo "  -l <file>\t\tRun all tests listed in the specified file\n";
        die("\n");
    }
    
    public function findTestsInDirectory($dir) {

        if (substr($dir,-1) != DIRECTORY_SEPARATOR)
            $dir .= DIRECTORY_SEPARATOR;
        
        if (!is_dir($dir))
            Control::bomb("$dir is not a directory");
        
        $d = opendir($dir);
        while ($file = readdir($d)) {
            if (($file == '.') || ($file == '..'))
                continue;
            if (fnmatch('*.phpt',basename($file)))
                $this->testList[] = new PHP_Test($dir.$file);
            elseif (is_dir($dir.$file)) {
                $this->findTestsInDirectory($dir.$file);
            }
        }
        closedir($d);
    }

    public function run() {
        
        if (($GLOBALS['argc'] < 3) ||
           (!preg_match('/^-([dfl])$/',$GLOBALS['argv'][1]))) {
           if (!empty($argv[2]))
            echo "invalid option: {$GLOBALS['argv'][1]}\n";
           $this->usage();
        }

        Control::findPCC();
       
        switch ($GLOBALS['argv'][1]) {
           case '-d':
               Control::$testRoot = $GLOBALS['argv'][2];
               $this->findTestsInDirectory(Control::$testRoot);
               break;
           case '-f':
               Control::$singleMode = true;
               $this->testList[] = new PHP_Test($GLOBALS['argv'][2]);
               break;
           default:
               Control::bomb('invalid option: '.$GLOBALS['argv'][1]);
               break;
        }

        Control::$outDir = $GLOBALS['argv'][3];
        if (!is_dir(Control::$outDir))
            Control::bomb('output directory is invalid: '.Control::$outDir);
        if (substr(Control::$outDir,-1) != DIRECTORY_SEPARATOR)
            Control::$outDir .= DIRECTORY_SEPARATOR;
       
        Control::log(1,sizeof($this->testList).' total tests');
        foreach ($this->testList as $testH) {
            echo substr($testH->tptFileName,strlen(Control::$testRoot)).': ';
            $testH->runTest();
        }

        $this->showResults();
        
    }

    public function showResults() {
        echo "------------- INTERPRETER FAILURES -------------\n";
        foreach ($this->testList as $testH) {
            if ($testH->interpetResult == PHP_Test::RESULT_FAIL) {
                echo "{$testH->tptFileName}\n";
                if (Control::$singleMode)
                    echo $testH->iDiffOutput;
            }
        }
    }

}

class PHP_Test {

    const RESULT_PASS = 0;
    const RESULT_FAIL = 1;
    const RESULT_SKIP = 2;
    const RESULT_UNKNOWN = 3;
    
    public $tptFileName;
    public $testFileName;
    public $ioutFileName; // interpreted output
    public $coutFileName; // compiled output
    public $expectFileName;
    public $idiffFileName;
    public $cdiffFileName;
    public $idiffOutput;
    public $cdiffOutput;
    
    public $iOutput;
    public $cOutput;

    protected $expectType = 'EXPECT';
    
    protected $templateData;
    protected $sectionData;
    
    public $compileResult = self::RESULT_UNKNOWN;
    public $interpetResult = self::RESULT_UNKNOWN;
    
    public function __construct($fName) {
        Control::log(2,'adding test: '.$fName);
        $this->tptFileName = $fName;
    }

    protected function parseTest() {

        $this->templateData = file($this->tptFileName);
        if (empty($this->templateData))
            Control::bomb('unable to load test: '.$this->tptFileName);

        $curSection = '';
        for ($i=0; $i <= sizeof($this->templateData); $i++) {
            $line = $this->templateData[$i];
            if (preg_match('/^--([A-Z]+)--/',$line,$m)) {
                $curSection = strtoupper($m[1]);
                continue;
            }
            else {
                if (empty($curSection))
                    Control::bomb(($i+1).' - template parse error');
                else {
                    if ($curSection == 'TEST')
                        $line = trim($line);
                    $this->sectionData[$curSection] .= $line;
                }
            }
        }

        // verify we have code to write
        if (empty($this->sectionData['FILE']))
            Control::bomb('Invalid test template: no FILE section');

        if (isset($this->sectionData['EXPECTF'])) {
            $this->expectType = 'EXPECTF';
        }
        elseif (isset($this->sectionData['EXPECTREGEX'])) {
            $this->expectType = 'EXPECTREGEX';
        }
        elseif (!isset($this->sectionData['EXPECT'])) {
            Control::bomb('no expect data');
        }
        
        // work files
        $bName = Control::$outDir.basename($this->tptFileName, '.phpt');
        $this->testFileName = $bName.'.php';
        $this->expectFileName = $bName.'.expect';
        $this->ioutFileName = $bName.'.i.out';
        $this->coutFileName = $bName.'.c.out';
        $this->idiffFileName = $bName.'.i.diff';
        $this->cdiffFileName = $bName.'.c.diff';
        
    }

    protected function bomb($msg) {
        Control::bomb($this->tptFileName.': '.$msg);
    }
    
    protected function writeTest() {
        
        if (!file_put_contents($this->testFileName, $this->sectionData['FILE']))
            Control::bomb("unable to write .php test file (FILE section): ".$this->testFileName);
        
        if (!file_put_contents($this->expectFileName, $this->sectionData[$this->expectType]))
            Control::bomb("unable to write expect test file ({$this->expectType} section): ".$this->expectFileName);
        
    }

    protected function doInterpreterTest() {

        if (defined('ROADSEND_PHP')) {
            $cmd = Control::$pccBinary.' -I '.dirname($this->tptFileName).' -f '.$this->testFileName;
        }
        else {
            // XXX do zend command here
        }
        Control::log(2, $cmd);
        $this->iOutput = trim(`$cmd`);
        
        if (!file_put_contents($this->ioutFileName, $this->iOutput))
            Control::bomb("unable to write interpreter output file: ".$this->ioutFileName);

        // compare output
        if ($this->expectType != 'EXPECT')
            $re_expect = trim($this->sectionData[$this->expectType]);
        switch ($this->expectType) {
            case 'EXPECT':
                if ($this->iOutput != trim($this->sectionData['EXPECT'])) {
                    $this->interpetResult = self::RESULT_FAIL;
                }
                else {
                    $this->interpetResult = self::RESULT_PASS;
                }
                break;
            case 'EXPECTF':
                $re_expect = preg_quote($re_expect, '/');
                $re_expect = str_replace('%e', '\\' . DIRECTORY_SEPARATOR, $re_expect);
                $re_expect = str_replace('%s', '[^\r\n]+', $re_expect);
                $re_expect = str_replace('%a', '.+', $re_expect);
                $re_expect = str_replace('%w', '\s*', $re_expect);
                $re_expect = str_replace('%i', '[+-]?\d+', $re_expect);
                $re_expect = str_replace('%d', '\d+', $re_expect);
                $re_expect = str_replace('%x', '[0-9a-fA-F]+', $re_expect);
                $re_expect = str_replace('%f', '[+-]?\.?\d+\.?\d*(?:E-?\d+)?', $re_expect);
                $re_expect = str_replace('%c', '.', $re_expect);
            case 'EXPECTREGEX':
                if (preg_match("/^$re_expect\$/s", trim($this->iOutput))) {
                    $this->interpetResult = self::RESULT_PASS;
                }
                else {
                    $this->interpetResult = self::RESULT_FAIL;
                }
                break;
        }
        
    }

    protected function writeInterpreterDiff() {

        $cmd = 'diff '.$this->expectFileName.' '.$this->ioutFileName;
        Control::log(2, $cmd);
        $this->iDiffOutput = `$cmd`;
        file_put_contents($this->idiffFileName, $this->iDiffOutput);
        
    }
    
    protected function doCompilerTest() {


    }

    
    public function runTest() {
        
        $this->parseTest();

        // XXX do skip check

        // write test
        $this->writeTest();
        
        echo "INTERPRETER: ";
        Control::flush();
        
        // do interpreter test
        $this->doInterpreterTest();

        if ($this->interpetResult == self::RESULT_FAIL)
            $this->writeInterpreterDiff();

        echo ($this->interpetResult == PHP_Test::RESULT_PASS) ? "PASS " : "FAIL ";
        echo "\n";
        
        // do compiled test
        if (defined('ROADSEND_PHP')) {
            $this->doCompilerTest();
        }
        
        
    }
    
}

// MAIN
$c = new TestSuite();
$c->run();

?>