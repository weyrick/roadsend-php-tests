--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001580.php (converted from Roadsend suite)
--FILE--
failure to compile on return in global context
<?

echo "up here\n";

if (0) {
  return;
} else {
  print (include("1580.inc")) . "\n";
  return;
}

echo "hi\n";

?>
down here
--EXPECT--
failure to compile on return in global context
up here
42
