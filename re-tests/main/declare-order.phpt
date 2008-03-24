--TEST--
/home/weyrick/pcc/tests/declare-order.php (converted from Roadsend suite)
--FILE--
<?

$a = new foo();
echo "this is the very top\n";

hey();

class foo {
  const a = 'hello';
}

function hey($a = foo::a) {
  echo "$a\n";
}


?>
--EXPECTF--
this is the very top
hello
