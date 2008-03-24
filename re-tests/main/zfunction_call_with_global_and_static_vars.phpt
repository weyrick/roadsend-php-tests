--TEST--
/home/weyrick/pcc/tests/zfunction_call_with_global_and_static_vars.php (converted from Roadsend suite)
--FILE--
<?php  error_reporting(0);
	$a = 10;
	function Test()
	{
		static $a=1;
		global $b;
		$c = 1;
		$b = 5;
		echo "one $a $b one";
		$a++;
		$c++;
		echo "two $a $c two";
	}
	Test();	
	echo "buckle $a $b $c my";
	Test();	
	echo "shoe $a $b $c shoe";
	Test()?>

--EXPECTF--
one 1 5 onetwo 2 2 twobuckle 10 5  myone 2 5 onetwo 3 2 twoshoe 10 5  shoeone 3 5 onetwo 4 2 two