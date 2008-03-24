--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000702.php (converted from Roadsend suite)
--FILE--
 a parse error is thrown when a # comment is immediately followed by a carriage return.

<?php


# error below
#

?>

--EXPECTF--
 a parse error is thrown when a # comment is immediately followed by a carriage return.

