--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0002611.php (converted from Roadsend suite)
--FILE--
<?php

list($foo['asdf'], $foo['qwerty']) = array("unga", "bunga");

var_dump($foo);

?>
--EXPECT--
array(2) {
  ["qwerty"]=>
  string(5) "bunga"
  ["asdf"]=>
  string(4) "unga"
}
