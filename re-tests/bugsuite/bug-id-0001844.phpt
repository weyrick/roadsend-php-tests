--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001844.php (converted from Roadsend suite)
--FILE--
segfault on string/array access

<?

$a = "hi";
@$a[] = 5;
var_dump($a);

?>
--EXPECT--
segfault on string/array access

