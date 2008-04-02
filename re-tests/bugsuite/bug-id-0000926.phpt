--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000926.php (converted from Roadsend suite)
--FILE--
0000926: we need more operators

<?php

$a = 10;


echo("*=  ");
$a *= 42;

var_dump($a);

echo("\n/=  ");
$a /= 42;
var_dump($a);

echo("\n.=  ");
$a .= 42;
var_dump($a);

echo("\n%=  ");
$a %= 42;
var_dump($a);

echo("\n&=  ");
$a &= 42;
var_dump($a);

print "\n";
print "152 << 2: ";
print(152 << 2);
print "\n";
print "152 >> 2: ";
print(152 >> 2);


echo("\n|=  ");
$a |= 42;
var_dump($a);

echo("\n^=  ");
$a ^= 42;
var_dump($a);

echo("\n<<=  ");
$a <<= 42;
var_dump($a);

echo("\n>>=  ");
$a >>= 4;
var_dump($a);

?>
--EXPECT--
0000926: we need more operators

*=  int(420)

/=  int(10)

.=  string(4) "1042"

%=  int(34)

&=  int(34)

152 << 2: 608
152 >> 2: 38
|=  int(42)

^=  int(0)

<<=  int(0)

>>=  int(0)
