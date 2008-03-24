--TEST--
/home/weyrick/pcc/tests/class-functions.php (converted from Roadsend suite)
--FILE--
<?

class foo {

}

class bar extends foo {


}

// is_subsclass: first param can be string
echo "subclass? ".is_subclass_of('bar','foo'),"\n";

?>
--EXPECTF--
subclass? 1
