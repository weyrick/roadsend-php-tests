--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001076.php (converted from Roadsend suite)
--FILE--
<?

$c = NULL;
foreach ($c as $k => $v) {
    echo "shouldn't see this: $k => $v\n";
}

echo "this should run, however\n";

?>
--EXPECTF--
Warning: Not an array or iterable object in foreach, variable is NULL in %s on line %d
this should run, however
