--TEST--
/home/weyrick/pcc/tests/zeval.php (converted from Roadsend suite)
--FILE--
<?php 
	error_reporting(0);
	$a="echo \"Hello\";";
	eval($a);
?>
--EXPECT--
Hello