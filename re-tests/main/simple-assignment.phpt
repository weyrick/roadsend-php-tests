--TEST--
/home/weyrick/pcc/tests/simple-assignment.php (converted from Roadsend suite)
--FILE--
<?php

$a = 8;
echo "A: $a\n";
$b = 32;
echo "B: $b\n";
$a = $b;
echo "A: $a, B: $b\n";
$a = 1;
echo "A: $a, B: $b\n";
$b++;
echo "A: $a, B: $b\n";

?>
--EXPECT--
A: 8
B: 32
A: 32, B: 32
A: 1, B: 32
A: 1, B: 33
