--TEST--
/home/weyrick/pcc/tests/zstring_scanner.php (converted from Roadsend suite)
--FILE--
<?php echo "\"\t'" . 
           '\n\\\'a\\\b\\' ?>

--EXPECTF--
"	'\n\'a\\b\