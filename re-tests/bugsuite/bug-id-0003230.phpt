--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003230.php (converted from Roadsend suite)
--FILE--
0003230: line numbers incorrect with multiline strings in double quotes
<?

echo __LINE__."\n";

echo "foo\n";

echo __LINE__."\n";

echo 'string line 1
two
three
four
five';

echo "\n".__LINE__."\n";

echo "string line 1
two
three\n\n
four
five\n";

echo __LINE__."\n";

?>
--EXPECTF--
0003230: line numbers incorrect with multiline strings in double quotes
4
foo
8
string line 1
two
three
four
five
16
string line 1
two
three


four
five
24
