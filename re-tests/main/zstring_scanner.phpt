--TEST--
/home/weyrick/pcc/tests/zstring_scanner.php (converted from Roadsend suite)
--FILE--
<?php echo "\"\t'" . 
           '\n\\\'a\\\b\\' ?>
--EXPECT--
"	'\n\'a\\b\