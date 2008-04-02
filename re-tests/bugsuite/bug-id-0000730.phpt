--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000730.php (converted from Roadsend suite)
--FILE--
0000730 access to a string index in a class property


<?

class testc { var $tp = "this is a test"; }

$c = new testc();

echo "{$c->tp{3}}\n";

?>
--EXPECT--
0000730 access to a string index in a class property


s
