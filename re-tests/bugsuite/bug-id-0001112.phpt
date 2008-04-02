--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001112.php (converted from Roadsend suite)
--FILE--
<?php

$a = array("a", "b", "c");

var_dump(key($a));
var_dump(array_pop($a));
var_dump(key($a));
var_dump(array_pop($a));
var_dump(key($a));
var_dump(array_pop($a));
var_dump(key($a));

?>
--EXPECT--
int(0)
string(1) "c"
int(0)
string(1) "b"
int(0)
string(1) "a"
NULL
