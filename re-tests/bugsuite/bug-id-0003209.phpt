--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003209.php (converted from Roadsend suite)
--FILE--
<?php

class Foo {
  var $prop;
  var $otherprop;

  function Foo () {
    $this->prop =& $this->otherprop;
    $this->prop = "foo";
  }
}

$foo = new Foo();               
var_dump($foo);
?>

--EXPECTF--
object(Foo)#1 (2) {
  ["prop"]=>
  &string(3) "foo"
  ["otherprop"]=>
  &string(3) "foo"
}
