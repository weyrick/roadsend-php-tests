--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000923.php (converted from Roadsend suite)
--FILE--
key or value is optional in list()

<?php

$a = array('1'=>'blah','2'=>'meep','3'=>'mope');

reset($a);
while (list(,$v) = each($a)) {
  echo "$v\n";
}

echo "-- next --\n";

reset($a);
while (list($v,) = each($a)) {
  echo "$v\n";
}

echo "-- next --\n";

reset($a);
while (list(,,$v) = each($a)) {
  echo "$v\n";
}

?>

--EXPECTF--
key or value is optional in list()

blah
meep
mope
-- next --
1
2
3
-- next --



