--TEST--
/home/weyrick/pcc/tests/zsimple_while_loop.php (converted from Roadsend suite)
--FILE--
<?php $a=1; 
  while($a<10):
	echo $a;
	$a++;
  endwhile?>
--EXPECT--
123456789