--TEST--
/home/weyrick/pcc/tests/sort.php (converted from Roadsend suite)
--FILE--
<?php

$fruits = array ("lemon", "orange", "banana", "apple");
print_r($fruits);
sort ($fruits);
reset ($fruits);
while (list ($key, $val) = each ($fruits)) {
    echo "fruits[".$key."] = ".$val."\n";
}

?>


--EXPECTF--
Array
(
    [0] => lemon
    [1] => orange
    [2] => banana
    [3] => apple
)
fruits[0] = apple
fruits[1] = banana
fruits[2] = lemon
fruits[3] = orange

