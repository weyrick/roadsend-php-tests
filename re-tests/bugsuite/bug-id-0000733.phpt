--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000733.php (converted from Roadsend suite)
--FILE--
0000733 parse error on class property named $parent

<?php

class aclass {
  var $parent = 12;

  function aclass() {
    echo $this->parent . "\n";
  }
}

$zot = new aclass();

?>
--EXPECT--
0000733 parse error on class property named $parent

12
