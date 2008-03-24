--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0002036.php (converted from Roadsend suite)
--FILE--
the reference property belongs to values, not hash slots

in this case, both entries in the array are references, because there is only 
one value and it's a reference. pcc does not implement this correctly:



<?php

$foo = array("bar");
$foo[1] =& $foo[0];
var_dump($foo);

?>



--EXPECTF--
the reference property belongs to values, not hash slots

in this case, both entries in the array are references, because there is only 
one value and it's a reference. pcc does not implement this correctly:



array(2) {
  [0]=>
  &string(3) "bar"
  [1]=>
  &string(3) "bar"
}


