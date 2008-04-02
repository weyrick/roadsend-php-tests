--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001104.php (converted from Roadsend suite)
--FILE--
<?php



$a = array("foo", "bar", "fubar");
$b = array("3" => "foo", "4" => "bar", "5" => "fubar");
$c = array("a" => "foo", "b" => "bar", "c" => "fubar");
$d = array("foo", "bar", "fubar", 'hello' => 'meep');

/* simple array */
echo array_pop($a), "\n";
array_push($a, "foobar");
var_dump($a);

echo array_pop($d), "\n";
array_push($d, "mope");
var_dump($d);

/* numerical assoc indices */
echo array_pop($b), "\n";
$k = key($b);
var_dump($k);
var_dump($b);

/* assoc indices */
echo array_pop($c), "\n";
var_dump($c);

array_pop($GLOBALS);

?>
--EXPECT--
fubar
array(3) {
  [0]=>
  string(3) "foo"
  [1]=>
  string(3) "bar"
  [2]=>
  string(6) "foobar"
}
meep
array(4) {
  [0]=>
  string(3) "foo"
  [1]=>
  string(3) "bar"
  [2]=>
  string(5) "fubar"
  [3]=>
  string(4) "mope"
}
fubar
int(3)
array(2) {
  [3]=>
  string(3) "foo"
  [4]=>
  string(3) "bar"
}
fubar
array(2) {
  ["a"]=>
  string(3) "foo"
  ["b"]=>
  string(3) "bar"
}
