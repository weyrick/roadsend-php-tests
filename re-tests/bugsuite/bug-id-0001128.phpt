--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001128.php (converted from Roadsend suite)
--FILE--
<?php

$a="This is a nice and simple string";
echo ereg(".*(is).*(is).*",$a,$registers);
echo "\n";
echo $registers[0];
echo "\n";
echo $registers[1];
echo "\n";
echo $registers[2];
echo "\n";

?>
--EXPECTF--
32
This is a nice and simple string
is
is
