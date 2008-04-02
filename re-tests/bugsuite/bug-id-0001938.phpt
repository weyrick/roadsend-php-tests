--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001938.php (converted from Roadsend suite)
--FILE--
Pcc pukes if you try to access the elements of a multi-dimensional array 
and mix the {} and the []

<?

$test = array('one'=>array('a'=>'b'),'two'=>array('c'=>'d'));

echo $test{'two'}['c'];
echo "\n";

?>
--EXPECT--
Pcc pukes if you try to access the elements of a multi-dimensional array 
and mix the {} and the []

d
