--TEST--
/home/weyrick/pcc/tests/refhash.php (converted from Roadsend suite)
--FILE--
<?php

$bar = 1;
$tree = 2;

$foo['asdf'] = $bar;
$foo['bsdf'] =& $bar;
$foo['csdf'] =& $tree;

echo "1: bar: $bar, tree: $tree\n";
echo "2: $foo[asdf], $foo[bsdf], $foo[csdf]\n";

$foo['asdf'] = 8;
$foo['bsdf'] = 9;
$foo['csdf'] = 10;

echo "3: bar: $bar, tree: $tree\n";
echo "4: $foo[asdf], $foo[bsdf], $foo[csdf]\n";


?>
--EXPECT--
1: bar: 1, tree: 2
2: 1, 1, 2
3: bar: 9, tree: 10
4: 8, 9, 10
