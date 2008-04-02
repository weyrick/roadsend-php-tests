--TEST--
/home/weyrick/pcc/tests/implicit_copy.php (converted from Roadsend suite)
--FILE--
<?php

#test the implicit copying semantics of php
#did I miss any cases?

$foo[1] = 2;

$bar = $foo;


$bar[1]++;

print "foo\n";
print_r($foo);
print "bar\n";
print_r($bar);


$zot = 2;
$wib = $zot;
$wib++;

print "wib $wib zot $zot\n";

function incvar($var) {
  $var++;
}

incvar($zot);

print "zot $zot\n";

function incarray($arr) {
  $arr[1]++;
}

incarray($foo);

print "foo\n";
print_r($foo);




?>
--EXPECT--
foo
Array
(
    [1] => 2
)
bar
Array
(
    [1] => 3
)
wib 3 zot 2
zot 2
foo
Array
(
    [1] => 2
)
