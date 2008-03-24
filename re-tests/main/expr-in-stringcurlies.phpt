--TEST--
/home/weyrick/pcc/tests/expr-in-stringcurlies.php (converted from Roadsend suite)
--FILE--
The {$ ... } construct now allows general expressions in some cases.  
${ ... } in some too, but not as many (??)
<?php
class foo { function method() { return "value"; } }
$foo = new foo();
print "property is : {$foo->method(print 'asdf')}\n";

$bar = array(1, 2, 3);
print "property is : {$bar[print 'another print']}\n";
print "property is : ${bar[print 'another print']}\n";
//$bar[print 'another print'];

var_dump(print('asdfasdfasdf'));
?>
--EXPECTF--
The {$ ... } construct now allows general expressions in some cases.  
${ ... } in some too, but not as many (??)
asdfproperty is : value
another printproperty is : 2
another printproperty is : 2
asdfasdfasdfint(1)
