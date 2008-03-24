--TEST--
/home/weyrick/pcc/tests/znested_functions.php (converted from Roadsend suite)
--FILE--
<?php 
function F()
{
	$a = "Hello ";
	return($a);
}

function G()
{
  static $myvar = 4;
  
  echo "$myvar ";
  echo F();
  echo "$myvar";
}

G();
?>

--EXPECTF--
4 Hello 4