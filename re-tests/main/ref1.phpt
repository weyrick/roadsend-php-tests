--TEST--
/home/weyrick/pcc/tests/ref1.php (converted from Roadsend suite)
--FILE--
<?php

$foo = 5;
$zot = 7;
$bar =& $foo;
$bar = 8;
$bar =& $zot;
$bar = 9;
echo "$foo, $zot, $bar\n";


?>
--EXPECT--
8, 9, 9
