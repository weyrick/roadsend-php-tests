--TEST--
/home/weyrick/pcc/tests/versions.php (converted from Roadsend suite)
--FILE--
<?

echo substr(PHP_VERSION, 0, 5)."\n";
echo substr(zend_version(), 0, 5)."\n";
echo substr(phpversion(),0, 5)."\n";

?>
--EXPECT--
5.2.5
2.2.0
5.2.5
