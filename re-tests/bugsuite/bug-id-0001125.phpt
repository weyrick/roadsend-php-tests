--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001125.php (converted from Roadsend suite)
--FILE--
<?

define('LONG_MAX', is_int(5000000000)? 9223372036854775807 : 0x7FFFFFFF);
define('LONG_MIN', -LONG_MAX - 1);
printf("%d,%d,%d,%d\n",is_int(LONG_MIN ),is_int(LONG_MAX ),
is_int(LONG_MIN-1),is_int(LONG_MAX+1));

$z = 5000000000;
var_dump($z);
$z = 9223372036854775807;
var_dump($z);

echo "this is z: ";
$z = 0x7FFFFFFF;
var_dump($z);

echo "this is -z: ".-$z."\n";

echo "1: ";
$z = (-$z - 1);
var_dump($z);

echo "1a: ";
$z = 0x7FFFFFFF;
$za = -$z;
$zb = ($za - 1);
echo "za is $za, zb is $zb\n"; 
var_dump($zb);

echo "2: ";
$z = ((-$z) + 1);
var_dump($z);

$a = LONG_MIN;
$b = LONG_MAX;
$c = (LONG_MIN-1);
$d = (LONG_MAX+1);

echo "3:";
var_dump($a);
echo "4:";
var_dump($b);
echo "5:";
var_dump($c);
echo "6:";
var_dump($d);

?>
--EXPECT:32--
1,1,0,0
float(5.0E+9)
float(9.22337203685E+18)
this is z: int(2147483647)
this is -z: -2147483647
1: int(-2147483648)
1a: za is -2147483647, zb is -2147483648
int(-2147483648)
2: int(-2147483646)
3:int(-2147483648)
4:int(2147483647)
5:float(-2147483649)
6:float(2147483648)
--EXPECT:64--
1,1,0,0
int(5000000000)
int(9223372036854775807)
this is z: int(2147483647)
this is -z: -2147483647
1: int(-2147483648)
1a: za is -2147483647, zb is -2147483648
int(-2147483648)
2: int(-2147483646)
3:int(-9223372036854775808)
4:int(9223372036854775807)
5:float(-9.22337203685E+18)
6:float(9.22337203685E+18)
