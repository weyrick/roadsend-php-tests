--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003250.php (converted from Roadsend suite)
--FILE--
 This
 <?php if($i++ < 1) { } ?>
 gives me
 Runtime error in file bar.php on line 0: Type `onum' expected, `bnil' provided

--EXPECTF--
 This
  gives me
 Runtime error in file bar.php on line 0: Type `onum' expected, `bnil' provided
