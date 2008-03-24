--TEST--
/home/weyrick/pcc/tests/varargs.php (converted from Roadsend suite)
--FILE--
<?php

function crud($a, $b="asdf", $c="hkjl") {
  echo $a, $b, $c . "\n";
}

crud(9);
crud(9, 10);
crud(9, 10, 11);


?>
--EXPECTF--
9asdfhkjl
910hkjl
91011
