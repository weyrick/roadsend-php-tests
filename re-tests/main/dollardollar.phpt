--TEST--
/home/weyrick/pcc/tests/dollardollar.php (converted from Roadsend suite)
--FILE--
<?php

$bar = 7;
$foo = "bar";

echo "bar is $bar\n";
echo "bar is $$foo\n";
echo "bar is ${$foo}\n";
echo "bar is " . $$foo . "\n"; 

$zot = "foo";

echo "bar is still " . $$$zot . "\n";

$$$zot = "ping";

echo "bar is now $bar (want ping)\n";

$foo = "bar\n";
echo "bar is not " . $$foo . "\n"; 

?>

--EXPECTF--
bar is 7
bar is $bar
bar is 7
bar is 7
bar is still 7
bar is now ping (want ping)
bar is not 
