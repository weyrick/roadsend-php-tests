--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000999.php (converted from Roadsend suite)
--FILE--
0000999	continue in foreach does not advance array, causing infinite loop
<?

$a = array(1,2,3,4);

foreach($a as $b) {
if ($b == 1)
continue;
echo $b;
}

?>

--EXPECTF--
0000999	continue in foreach does not advance array, causing infinite loop
234