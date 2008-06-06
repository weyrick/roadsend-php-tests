--TEST--
unsetting of object properties
--FILE--
<?

class a {
  var $foo=5;  
}

$ao = new a();
var_dump($ao);
unset($ao->foo);
var_dump($ao);

class b {
}
$bo = new b();
$bo->foo = 5;
var_dump($bo);
unset($bo->foo);
var_dump($bo);

unset($bo->foo);
var_dump($bo);

?>
--EXPECT--
object(a)#1 (1) {
  ["foo"]=>
  int(5)
}
object(a)#1 (0) {
}
object(b)#2 (1) {
  ["foo"]=>
  int(5)
}
object(b)#2 (0) {
}
object(b)#2 (0) {
}
