--TEST--
/home/weyrick/pcc/tests/zdo_while.php (converted from Roadsend suite)
--FILE--
<?php 
$i=3;
do {
	echo $i;
	$i--;
} while($i>0);
?>


--EXPECTF--
321
