--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001139.php (converted from Roadsend suite)
--FILE--
<?php
echo implode(array())."\n";
echo implode('nothing', array())."\n";
echo implode(array('foo', 'bar', 'baz'))."\n";
echo implode(':', array('foo', 'bar', 'baz'))."\n";
echo implode(':', array('foo', array('bar', 'baz'), 'burp'))."\n";
echo $php_errormsg."\n";
?>
--EXPECT--


foobarbaz
foo:bar:baz
foo:Array:burp

