--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000940.php (converted from Roadsend suite)
--FILE--
erroneous conversion of string to array
<?php


$ts = 'test string';
echo $ts[0];
echo $ts[strlen($ts)-1];

$foo = $ts[4];

#this case should be an error
#$foo =& $ts[4];
#$foo = "bar";

echo $ts["sasf"];

//unset($ts[1]);

var_dump($ts);


?>
--EXPECTF--
erroneous conversion of string to array
tgtstring(11) "test string"
