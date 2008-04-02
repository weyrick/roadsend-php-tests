--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003191.php (converted from Roadsend suite)
--FILE--
<?
$foo = "/^(3\.23|4\.|5\.)/";
echo "pattern: $foo\n";
$foo = '/^(3\.23|4\.|5\.)/';
echo "pattern: $foo\n";
?>
--EXPECT--
pattern: /^(3\.23|4\.|5\.)/
pattern: /^(3\.23|4\.|5\.)/
