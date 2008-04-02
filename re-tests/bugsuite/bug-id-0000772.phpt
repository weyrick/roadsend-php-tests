--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000772.php (converted from Roadsend suite)
--FILE--
<?php

$s = 'hello';
echo "thus should be 'hello' --> '$s'\n";

?>
--EXPECT--
thus should be 'hello' --> 'hello'
