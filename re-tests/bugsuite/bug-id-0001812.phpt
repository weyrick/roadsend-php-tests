--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001812.php (converted from Roadsend suite)
--FILE--
parser problem with echo

When one of the arguments to echo is 'exit', pcc returns a parser error. example:

<?
echo "foo\n", exit();
?>
--EXPECT--
parser problem with echo

When one of the arguments to echo is 'exit', pcc returns a parser error. example:

foo
