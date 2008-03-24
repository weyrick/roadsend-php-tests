--TEST--
/home/weyrick/pcc/tests/refarg-in-env.php (converted from Roadsend suite)
--FILE--
<?php

$foo = 9;
$bar = 10;
$bar =& $foo;
$bar = 11;

echo "0bar: $bar, foo: $foo\n";

$zot = 12;
$bar =& $zot;
$zot = 13;

echo "1foo: $foo, bar: $bar, zot: $zot\n";

$zot =& $foo;
#is this a zend bug?  $a =& $a seems to copy $a.
#$foo =& $foo;
$bar =& $foo;


#$bar++;

echo "2foo: $foo, bar: $bar, zot: $zot\n";

$bing = "bar";

$broof = "foo";

$barp = "zot";

echo "3foo: ". $$broof . ", bar: " . $$bing . ", zot: " . $$barp . "\n";


function one(&$foo, $bar) {
  $foo = 9;
  $bar = 10;
  $bar =& $foo;
  $bar = 11;
}

one($bar, $foo);
echo "4bar: $bar, foo: $foo\n";


function two($bar, &$zot) {
  $zot = 12;
  $bar =& $zot;
  $zot = 13;
}

two($bar, $zot);
echo "5foo: $foo, bar: $bar, zot: $zot\n";

function three($zot, $foo) {
  $zot =& $foo;
  $foo =& $foo;
  $bar =& $foo;
  $zot =& $bar;
  $bar++;
}

function four(&$zot, &$foo) {

//this screws up zend's implementation.
//  $foo =& $foo;

  $foo++;
}

three($zot, $foo);
echo "6foo: $foo, bar: $bar, zot: $zot\n";

$bar++;
echo "7foo: $foo, bar: $bar, zot: $zot\n";

$zot--;
echo "8foo: $foo, bar: $bar, zot: $zot\n";

$foo-=3;
echo "9foo: $foo, bar: $bar, zot: $zot\n";


four($foo, $zot);
echo "10foo: $foo, bar: $bar, zot: $zot\n";

$foo += 9;

echo "11foo: $foo, bar: $bar, zot: $zot\n";


echo "12foo: ". $$broof . ", bar: " . $$bing . ", zot: " . $$barp . "\n";

?>
--EXPECTF--
0bar: 11, foo: 11
1foo: 11, bar: 13, zot: 13
2foo: 11, bar: 11, zot: 11
3foo: 11, bar: 11, zot: 11
4bar: 11, foo: 11
5foo: 13, bar: 13, zot: 13
6foo: 13, bar: 13, zot: 13
7foo: 14, bar: 14, zot: 14
8foo: 13, bar: 13, zot: 13
9foo: 10, bar: 10, zot: 10
10foo: 11, bar: 11, zot: 11
11foo: 20, bar: 20, zot: 20
12foo: 20, bar: 20, zot: 20
