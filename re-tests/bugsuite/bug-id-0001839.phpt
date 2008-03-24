--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001839.php (converted from Roadsend suite)
--FILE--
<?

$a = 12;
@$a[] = 5;
var_dump($a);

?>

we coerce, they don't (anymore)

--EXPECTF--
int(12)

we coerce, they don't (anymore)
