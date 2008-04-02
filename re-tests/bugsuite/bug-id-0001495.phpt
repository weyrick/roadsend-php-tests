--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001495.php (converted from Roadsend suite)
--FILE--
this inserts the 12 at key 1001, should be at key 2:

check if looking up a big integer key bumps the maximum integer key

<?php

$foo = array("foo", "bar");

print $foo[1000];

$foo[] = 12;

print_r($foo);
?>
--EXPECT--
this inserts the 12 at key 1001, should be at key 2:

check if looking up a big integer key bumps the maximum integer key

Array
(
    [0] => foo
    [1] => bar
    [2] => 12
)
