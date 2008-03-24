--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000729.php (converted from Roadsend suite)
--FILE--
0000729 access to a class property through variable variable: 

<?
class testc { var $test='5'; }
$c = new testc();
$prop = 'test';
echo $c->{$prop} . "\n";
echo $c->$prop . "\n";
?>


--EXPECTF--
0000729 access to a class property through variable variable: 

5
5

