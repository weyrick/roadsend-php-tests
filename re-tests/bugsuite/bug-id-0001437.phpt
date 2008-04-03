--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001437.php (converted from Roadsend suite)
--FILE--
0001437 php-hashes don't behave quite the same as php's hashes after deleting entries
<?php

$foo = array("foo", "bar", "baz");
unset($foo[0]);
print_r($foo);

?>
--EXPECT--
0001437 php-hashes don't behave quite the same as php's hashes after deleting entries
Array
(
    [1] => bar
    [2] => baz
)
