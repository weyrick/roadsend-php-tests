--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003251.php (converted from Roadsend suite)
--FILE--
<?php
 $foo = 'some val';
 define('DEFFOO', $foo);
 echo '$foo is '.$foo.' and DEFFOO is '.DEFFOO."\n";
 unset($foo);
 echo '$foo is '.$foo.' and DEFFOO is '.DEFFOO."\n";
?>
--EXPECT--
$foo is some val and DEFFOO is some val
$foo is  and DEFFOO is some val
