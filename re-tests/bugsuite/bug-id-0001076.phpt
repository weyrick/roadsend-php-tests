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

Warning: Invalid argument supplied for foreach() in /home/weyrick/workspace/pcc/bugs/tests/bug-id-0001076.php on line 4
this should run, however
