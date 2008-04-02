--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001534.php (converted from Roadsend suite)
--FILE--
<?php

class aclass {
  var $blah = 'ho';
  function unsetit() {
    var_dump($this->blah);
    unset($this->blah);
    var_dump($this->blah);
  }
}

$a = new aclass();
$a->unsetit();

?>
--EXPECT--
string(2) "ho"
NULL
