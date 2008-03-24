--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003212.php (converted from Roadsend suite)
--FILE--
<?php

class foo {
  var $roles;
}

$one = new foo();
$two = new foo();
$one->roles = array(1, 2, 3);
$two->roles = array(1, 2);

if ($one == $two) {
  echo "same\n";
} else {
  echo "not same\n";
}

?>

--EXPECTF--
not same
