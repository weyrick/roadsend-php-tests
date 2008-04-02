--TEST--
/home/weyrick/pcc/tests/bitwise.php (converted from Roadsend suite)
--FILE--
<?php

define("CONSTFOO", 1);
define("CONSTBAR", 2);
define("CONSTBAZ", 4);

print("the angle of the " . (CONSTFOO | CONSTBAR | CONSTBAZ) . ".\n");


$a = 1;
$b = 3;
$c = 39;

echo ("foo:" . ($a & $b & $c) . ":foo\n");




?>
--EXPECT--
the angle of the 7.
foo:1:foo
