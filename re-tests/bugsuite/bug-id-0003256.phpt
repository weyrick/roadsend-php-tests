--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003256.php (converted from Roadsend suite)
--FILE--
 <?
 $foo = "this is \371 a null \x00 and this is after the null";
 echo $foo;
?>
--EXPECT--
 this is ù a null 