--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001144.php (converted from Roadsend suite)
--FILE--
<?php

$a = "22222222aaaa bbb1111 cccc";
$b = "1234";
var_dump($a);
var_dump($b);
var_dump(strspn($a,$b));
var_dump(strspn($a,$b,2));
var_dump(strspn($a,$b,2,3));

var_dump(strcspn($a,$b));
var_dump(strcspn($a,$b,9));
var_dump(strcspn($a,$b,9,6));

?>
--EXPECTF--
string(25) "22222222aaaa bbb1111 cccc"
string(4) "1234"
int(8)
int(6)
int(3)
int(0)
int(7)
int(6)
