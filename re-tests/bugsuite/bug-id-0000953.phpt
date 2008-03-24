--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000953.php (converted from Roadsend suite)
--FILE--
0000953 parse error on question mark in comments
<?php

// wouldn't you think this is harmless ???
echo "nope!\n";

?>

--EXPECTF--
0000953 parse error on question mark in comments
nope!
