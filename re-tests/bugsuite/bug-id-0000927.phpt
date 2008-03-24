--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000927.php (converted from Roadsend suite)
--FILE--
0000927 unable to foreach() on $GLOBALS

<?php

$thisisaglobal = "foo";

foreach ($GLOBALS as $key => $value)
{
  $i++;
}

echo "it worked.\n";

?>

--EXPECTF--
0000927 unable to foreach() on $GLOBALS

it worked.
