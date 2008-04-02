--TEST--
/home/weyrick/pcc/tests/zsimple_switch.php (converted from Roadsend suite)
--FILE--
<?php 

$a=1; 
  switch($a):
	case 0;
		echo "bad";	
		break;
	case 1;
		echo "good";
		break;
	default;
		echo "bad";
		break;
  endswitch;

  switch($a):
	case 0:
		echo "bad";	
		break;
	case 1:
		echo "good";
		break;
	default:
		echo "bad";
		break;
  endswitch;

  switch($a) {
	case 0:
		echo "bad";	
		break;
	case 1:
		echo "good";
		break;
	default:
		echo "bad";
		break;
  }
?>
--EXPECT--
goodgoodgood