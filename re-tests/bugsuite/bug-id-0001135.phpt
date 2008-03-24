--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001135.php (converted from Roadsend suite)
--FILE--
<?php
printf("1 %10.5e\n", 1.1);
var_dump(sprintf("2 %10.5e\n", 1.1));
printf("3 %10.5f\n", 1.1);
var_dump(sprintf("4 %10.5f\n", 1.1));
printf("5 %10.5d\n", 1.1);
var_dump(sprintf("6 %10.5d\n", 1.1));
?>
--EXPECTF--
1 1.10000e+0
string(13) "2 1.10000e+0
"
3    1.10000
string(13) "4    1.10000
"
5          1
string(13) "6          1
"
