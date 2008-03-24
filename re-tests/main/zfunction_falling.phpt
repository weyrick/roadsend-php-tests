--TEST--
/home/weyrick/pcc/tests/zfunction_falling.php (converted from Roadsend suite)
--FILE--
<?php $a = 1;
function Test ($a) {
	if($a<3):
		return(3);
	endif;
}

if($a < Test($a)):
	echo "$a\n";
	$a++;
endif?>


--EXPECTF--
1

