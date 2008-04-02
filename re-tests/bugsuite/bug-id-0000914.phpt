--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000914.php (converted from Roadsend suite)
--FILE--
<?php

class foo {
  var $aprop = 12;
}

$bar = new foo();
var_dump($bar);
$zot = 52;

$bar->aprop =& $zot;

$zot = 42;

print "the answer is: " . $bar->aprop . "\n";


?>
--EXPECT--
object(foo)#1 (1) {
  ["aprop"]=>
  int(12)
}
the answer is: 42
