--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001151.php (converted from Roadsend suite)
--FILE--
0001151 core error
<?php
$ar = array();
for ($count = 0; $count < 10; $count++) {
$ar[$count] = "$count";
$ar[$count]['idx'] = "$count";
}

for ($count = 0; $count < 10; $count++) {
echo $ar[$count]." -- ".$ar[$count]['idx']."\n";
}
$a = "0123456789";
print $a{0} . "\n";
$a[9] = $a{0};
var_dump($a);
?>
--EXPECT--
0001151 core error
0 -- 0
1 -- 1
2 -- 2
3 -- 3
4 -- 4
5 -- 5
6 -- 6
7 -- 7
8 -- 8
9 -- 9
0
string(10) "0123456780"
