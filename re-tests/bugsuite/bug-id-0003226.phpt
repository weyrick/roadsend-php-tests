--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003226.php (converted from Roadsend suite)
--FILE--
<?php
$foo = "0";
if (empty($foo)) {
    print "foo is empty\n";
} else {
    print "foo is not empty\n";
}
?>

--EXPECTF--
foo is empty
