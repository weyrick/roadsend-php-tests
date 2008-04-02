--TEST--
/home/weyrick/pcc/tests/ref2.php (converted from Roadsend suite)
--FILE--
<?php

$foo = 5;
$wibb = array($foo, &$foo);
$foo = 6;
echo "$wibb[0], $wibb[1]\n";

$wibb[0] = 9;

$wibb[1] = 10;

echo "$foo, $wibb[0], $wibb[1]\n";

?>
--EXPECT--
5, 6
10, 9, 10
