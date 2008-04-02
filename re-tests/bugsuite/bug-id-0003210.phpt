--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003210.php (converted from Roadsend suite)
--FILE--
I dunno if this changed or what, but we just complain about "Cannot use a scalar value as an array", and php bashes it to an array. Test:

<?php

class Foo {
  var $prop = false;

  function Foo () {
    $this->prop['key'] = "value";
  }
}

$foo = new Foo();
var_dump($foo);


$bar = false;
$bar['key'] = 'value';
var_dump($bar);

?>
--EXPECT--
I dunno if this changed or what, but we just complain about "Cannot use a scalar value as an array", and php bashes it to an array. Test:

object(Foo)#1 (1) {
  ["prop"]=>
  array(1) {
    ["key"]=>
    string(5) "value"
  }
}
array(1) {
  ["key"]=>
  string(5) "value"
}
