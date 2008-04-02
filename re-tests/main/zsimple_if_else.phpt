--TEST--
/home/weyrick/pcc/tests/zsimple_if_else.php (converted from Roadsend suite)
--FILE--
<?php $a=1; 
  if($a==0):
	echo "bad1";
	echo "bad2";
  else:
	echo "good1";
	echo "good2";
  endif?>
--EXPECT--
good1good2