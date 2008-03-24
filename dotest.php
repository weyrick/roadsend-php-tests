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
 * template files. It supports features that are specific to Roadsend PHP.
 */

class Control {
    
    static public $verbosity = 1;
    static public $pccBinary;
    static public $pccVersion;
    
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
    
}

class TestSuite {

    protected $testList;
    
    public function usage() {
        echo "Roadsend PHP Test Suite\n";
        echo "dotest [-dfl] <directory or file>\n";
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
               $this->findTestsInDirectory($GLOBALS['argv'][2]);
               break;
           default:
               Control::bomb('invalid option: '.$GLOBALS['argv'][1]);
               break;
        }

       
        Control::log(1,sizeof($this->testList).' total tests');
        foreach ($this->testList as $testH) {
            $testH->runTest();
        }

    }

}

class PHP_Test {

    protected $fileName;
    protected $templateData;
    protected $sectionData;
    
    public function __construct($fName) {
        Control::log(2,'adding test: '.$fName);
        $this->fileName = $fName;
    }

    protected function parseTest() {

        $this->templateData = file($this->fileName);
        if (empty($this->templateData))
            Control::bomb('unable to load test: '.$this->fileName);

        $curSection = '';
        for ($i=0; $i <= sizeof($this->templateData); $i++) {
            $line = $this->templateData[$i];
            if (preg_match('/^--([A-Z]+)--/',$line,$m)) {
                $curSection = $m[1];
                continue;
            }
            else {
                if (empty($curSection))
                    Control::bomb($this->fileName.':'.($i+1).' - template parse error');
                else {
                    if ($curSection == 'TEST')
                        $line = trim($line);
                    $this->sectionData[$curSection] .= $line;
                }
            }
        }
        var_dump($this->sectionData);
    }
     
    public function runTest() {

        $this->parseTest();
        
        echo basename($this->fileName).":\n";
        
    }
    
}

// MAIN
$c = new TestSuite();
$c->run();

?>