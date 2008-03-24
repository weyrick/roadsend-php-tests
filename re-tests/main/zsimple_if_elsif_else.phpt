--TEST--
/home/weyrick/pcc/tests/zsimple_if_elsif_else.php (converted from Roadsend suite)
--FILE--
<?php $a=1; 
  if($a==0):
	echo "bad";
  elseif($a==3):
	echo "bad";
  else:
	echo "good";
  endif?>	

--EXPECTF--
good	
