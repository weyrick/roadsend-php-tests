--TEST--
/home/weyrick/pcc/tests/zrecursive_function.php (converted from Roadsend suite)
--FILE--
<?php  Function Test()
	{
		static $a=1;

		echo "$a ";	
		$a++;
		if($a<10): Test(); endif;
	}
	Test()?>
--EXPECT--
1 2 3 4 5 6 7 8 9 