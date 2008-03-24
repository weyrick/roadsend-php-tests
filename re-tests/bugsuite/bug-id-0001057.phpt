--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001057.php (converted from Roadsend suite)
--FILE--
0001057 allow blank class definitions
<?

class aclass {
var $prop = 'hi';
}

class bclass extends aclass {
}

$a = new bclass();
var_dump($a);


?>

--EXPECTF--
0001057 allow blank class definitions
object(bclass)#1 (1) {
  ["prop"]=>
  string(2) "hi"
}
