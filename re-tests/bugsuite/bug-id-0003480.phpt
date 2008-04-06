--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003480.php (converted from Roadsend suite)
--FILE--
<?

// test the way we handle integer keys in hashes

print "int max: ".PHP_INT_MAX."\n";
print "int min: ".PHP_INT_SIZE."\n";

$key=PHP_INT_MAX;
$a[$key]=$key;
$key++; 
print "overflow key: $key\n";
$b[$key]=$key;
$bigkey = '9999999999999999999999999999999999999';
$bigkeyneg = '-9999999999999999999999999999999999999';
$bignumkey = 9999999999999999999999999999999999999;
$bignumkeyneg = -9999999999999999999999999999999999999;
$leadzero = '00567';
$float = 1.3217467;
var_dump($bignumkey);
$c[$bigkey] = 'foo';
$c[$bignumkey] = 'bar';
$c[$bignumkeyneg] = 'barzap';
$c[$bigkeyneg] = 'bip';
$c[$leadzero] = 'baz';
$c[$float] = 'f';
print_r($a);
print_r($b); 
print_r($c);

?>
--EXPECT:32--
int max: 2147483647
int min: 4
overflow key: 2147483648
float(1.0E+37)
Array
(
    [2147483647] => 2147483647
)
Array
(
    [-2147483648] => 2147483648
)
Array
(
    [9999999999999999999999999999999999999] => foo
    [-2147483648] => barzap
    [-9999999999999999999999999999999999999] => bip
    [00567] => baz
    [1] => f
)

--EXPECT:64--
int max: 9223372036854775807
int min: 8
overflow key: 9.22337203685E+18
float(1.0E+37)
Array
(
    [9223372036854775807] => 9223372036854775807
)
Array
(
    [-9223372036854775808] => 9.22337203685E+18
)
Array
(
    [9999999999999999999999999999999999999] => foo
    [-9223372036854775808] => barzap
    [-9999999999999999999999999999999999999] => bip
    [00567] => baz
    [1] => f
)
