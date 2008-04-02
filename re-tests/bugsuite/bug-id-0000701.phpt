--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000701.php (converted from Roadsend suite)
--FILE--
instantiating a class with a variable class name


<?php

class SM_configReader_foo {
  var $zot = 23;
}

$rName = "foo";

$className = 'SM_configReader_'.$rName;
$reader =& new $className();
echo $reader->zot . "\n";


?>
--EXPECT--
instantiating a class with a variable class name


23
