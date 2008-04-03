--TEST--
/home/weyrick/pcc/tests/printtag.php (converted from Roadsend suite)
--FILE--
<? $foo = 'bar'; ?>
<?= $foo, $bar ?>
--EXPECT--
bar