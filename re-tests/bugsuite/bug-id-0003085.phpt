--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003085.php (converted from Roadsend suite)
--FILE--
<?php 
header("bork: baz"); 
echo "okay\n";
?>
--EXPECTF--
okay
