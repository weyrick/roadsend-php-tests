--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001841.php (converted from Roadsend suite)
--FILE--
<?php

function foo($arg) {
   var_dump($arg);
}

// test too few args behavior
foo();

// test too many args behavior
foo(1, 2, 3);

?>

--EXPECTF--

Warning: Missing argument 1 for foo(), called in /home/weyrick/workspace/pcc/bugs/tests/bug-id-0001841.php on line 8 and defined in /home/weyrick/workspace/pcc/bugs/tests/bug-id-0001841.php on line 3
NULL
int(1)
