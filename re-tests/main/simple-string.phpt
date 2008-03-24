--TEST--
/home/weyrick/pcc/tests/simple-string.php (converted from Roadsend suite)
--FILE--
<?php

$foo[1] = 2;
$foo[2] = 1;

$zot = 2;

echo "$foo[1] $foo[$zot]";

echo "$zot $zot";

?>

--EXPECTF--
2 12 2