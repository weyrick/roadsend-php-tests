--TEST--
/home/weyrick/pcc/tests/funorder.php (converted from Roadsend suite)
--FILE--
<?php

foo(1, 2);

function foo($a, $b) {
  echo "$a $b\n";
}

?>
--EXPECT--
1 2
