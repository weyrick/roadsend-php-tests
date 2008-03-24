--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000939.php (converted from Roadsend suite)
--FILE--
unset() needs to take variable number of arguments

<?php

$a = 'hi';
$b = 'yo';
$c = 'man!';

echo "$a, $b, $c\n";
unset($a, $b, $c);
echo "$a, $b, $c\n";

?>
--EXPECTF--
unset() needs to take variable number of arguments

hi, yo, man!
, , 
