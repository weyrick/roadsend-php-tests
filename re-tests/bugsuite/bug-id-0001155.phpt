--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001155.php (converted from Roadsend suite)
--FILE--
<?php

$i = 10000000;
var_dump($i);

$i *= 1001;

var_dump($i);

$j = 10000000;
var_dump($j);

$j = $j * 1001;

var_dump($i,$j);

?>
--EXPECT:32--
int(10000000)
float(1.001E+10)
int(10000000)
float(1.001E+10)
float(1.001E+10)
--EXPECT:64--
int(10000000)
int(10010000000)
int(10000000)
int(10010000000)
int(10010000000)
