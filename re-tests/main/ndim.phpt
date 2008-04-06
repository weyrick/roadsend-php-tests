--TEST--
/home/weyrick/pcc/tests/ndim.php (converted from Roadsend suite)
--FILE--
<?php

$foo['asdf'] = "foo";
$foo['fdsa'][] = "bar";
echo "$foo[asdf] $foo[fdsa][0]\n";

$bar[0][0][0] = "foo";
echo $bar[0][0][0] . "\n";
echo "$bar[0][0][0]\n";

$fruits = array ( "fruits"  => array ( "a" => "orange"
                                     , "b" => "banana"
                                     , "c" => "apple"
                                     )
                , "numbers" => array ( 1
                                     , 2
                                     , 3
                                     , 4
                                     , 5
                                     , 6
                                     )
                , "holes"   => array (      "first"
                                     , 5 => "second"
                                     ,      "third"
                                     )
                );

echo "$fruits[holes][5]\n";    



$firstquarter  = array(1 => 'January', 'February', 'March');
print_r($firstquarter);

?>
--EXPECT--
foo Array[0]
foo
Array[0][0]
Array[5]
Array
(
    [1] => January
    [2] => February
    [3] => March
)
