--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000700.php (converted from Roadsend suite)
--FILE--
unable to foreach on a class variable
parse error on this code in a class method:

foreach ($this->attributes as $attrKey => $attrVal) {

<?php


class foo {

  var $attributes = array(1 => "Foo", 2 => "Bar");

  function zot() {
    
      foreach ($this->attributes as $attrKey => $attrVal) {
	print "$attrKey, $attrVal\n";
      }

  }
  
}


$afoo = new foo();
$afoo->zot(); 


?>
--EXPECT--
unable to foreach on a class variable
parse error on this code in a class method:

foreach ($this->attributes as $attrKey => $attrVal) {

1, Foo
2, Bar
