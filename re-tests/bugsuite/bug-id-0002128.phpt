--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0002128.php (converted from Roadsend suite)
--FILE--
<?
$out = exec('echo foobar;echo barfoo');
var_dump($out);
$out = exec('echo foobar');
var_dump($out);
?>
--EXPECT--
string(6) "barfoo"
string(6) "foobar"
