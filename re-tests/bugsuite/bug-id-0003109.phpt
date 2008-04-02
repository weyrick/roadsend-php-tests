--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003109.php (converted from Roadsend suite)
--FILE--
<?php 
echo "asdf" . (int)"foo" . "bar\n"; 
?>
--EXPECT--
asdf0bar
