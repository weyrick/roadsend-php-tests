--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001819.php (converted from Roadsend suite)
--FILE--
It appears to be undocumented, but you can use {} for 
accessing arrays as well as []. i.e. foo{1}{2}

<?
$test = array('foo' => array('foo2' => 'bar'));
echo $test{'foo'}{'foo2'} . "\n";
?>
--EXPECTF--
It appears to be undocumented, but you can use {} for 
accessing arrays as well as []. i.e. foo{1}{2}

bar
