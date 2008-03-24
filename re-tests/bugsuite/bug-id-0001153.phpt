--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001153.php (converted from Roadsend suite)
--FILE--
<?php
function foo($bar = array("a", "b", "c"))
{
    var_dump($bar);
}
foo();
?>
--EXPECTF--
array(3) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
  [2]=>
  string(1) "c"
}
