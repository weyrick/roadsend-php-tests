--TEST--
/home/weyrick/pcc/tests/znested_if_elseif_else.php (converted from Roadsend suite)
--FILE--
<?php $a=1; $b=2;
  if($a==0):
	echo "bad";
  elseif($a==3):
	echo "bad";
  else:
	if($b==1):
		echo "bad";
	elseif($b==2):
		echo "good";
	else:
		echo "bad";
	endif;
  endif?>	

--EXPECTF--
good	
