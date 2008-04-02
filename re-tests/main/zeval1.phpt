--TEST--
/home/weyrick/pcc/tests/zeval1.php (converted from Roadsend suite)
--FILE--
<?php 
function F($a) { 
	eval($a);
};

error_reporting(0);
F("echo \"Hello\";");
?>
--EXPECT--
Hello