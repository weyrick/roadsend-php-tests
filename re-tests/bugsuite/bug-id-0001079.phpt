--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001079.php (converted from Roadsend suite)
--FILE--
<?

if (!ereg('(^|[^\])(_|%)', "hi")) {
  echo 'good';
}

?>
--EXPECT--
good