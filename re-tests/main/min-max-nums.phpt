--TEST--
/home/weyrick/pcc/tests/min-max-nums.php (converted from Roadsend suite)
--FILE--
<?

$a = PHP_INT_MAX;
echo "a is [$a] :: as int [".(int)$a."] as float [".(float)$a."]\n";
echo "$a + 1 = ".($a+1)."\n";
echo "$a++ = ".++$a."\n";
define(PHP_INT_MIN, (- PHP_INT_MAX - 1));
$a = PHP_INT_MIN;
echo "a is [$a] :: as int [".(int)$a."] as float [".(float)$a."]\n";
echo "$a - 1 = ".($a-1)."\n";
echo "$a-- = ".--$a."\n";

?>
--EXPECTF--
a is [9223372036854775807] :: as int [9223372036854775807] as float [9.22337203685E+18]
9223372036854775807 + 1 = 9.22337203685E+18
9223372036854775807++ = 9.22337203685E+18
a is [-9223372036854775808] :: as int [-9223372036854775808] as float [-9.22337203685E+18]
-9223372036854775808 - 1 = -9.22337203685E+18
-9223372036854775808-- = -9.22337203685E+18
