--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000983.php (converted from Roadsend suite)
--FILE--
0000983 parse error, single quotes in double quotes on class var default

<?php

class aclass {
  var $avar = "'test'";
  function aclass() {
    echo "$this->avar\n";
  }
}

$a = new aclass();

?>
--EXPECT--
0000983 parse error, single quotes in double quotes on class var default

'test'
