--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000791.php (converted from Roadsend suite)
--FILE--
0000791 switch statement parse error having to do with where the default: is

<?

$i = 5;

switch ($i) {
default:
case 1:
echo "1\n";
case 2:
echo "2\n";
}

?>
--EXPECT--
0000791 switch statement parse error having to do with where the default: is

1
2
