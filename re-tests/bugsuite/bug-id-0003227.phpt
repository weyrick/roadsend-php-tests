--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003227.php (converted from Roadsend suite)
--FILE--
<?php
$foo = "bar";
$bar = 12;
unset($$foo);
echo $bar."\n";
echo "ok\n";
?>

--EXPECT--
ok
