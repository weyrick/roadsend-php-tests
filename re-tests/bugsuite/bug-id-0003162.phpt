--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003162.php (converted from Roadsend suite)
--FILE--
0003162: windows: string-> int conversion broken
<?

$UNIXTIME = '1104534831';

$K = 5;

$from = (int) $UNIXTIME - $K;
$to = (int) $UNIXTIME + $K;

echo "$from - $to\n";

$UNIXTIME = 1104534831;

$from = $UNIXTIME - $K;
$to = $UNIXTIME + $K;

echo "$from - $to\n";

?>
--EXPECT--
0003162: windows: string-> int conversion broken
1104534826 - 1104534836
1104534826 - 1104534836
