--TEST--
/home/weyrick/pcc/tests/superglobal_bindings.php (converted from Roadsend suite)
--FILE--
<?

$foo = 5;

function yay() {

echo $GLOBALS['foo'];
$GLOBALS['foo'] = 6;
echo $GLOBALS['foo'];

$a =& $GLOBALS;
$a['foo'] = 7;

$b = 5;
$GLOBALS['bar'] =& $b;

}

yay();
echo $foo;
echo $bar;

?>

--EXPECT--
5675
