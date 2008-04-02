--TEST--
/home/weyrick/pcc/tests/retval-methodcall.php (converted from Roadsend suite)
--FILE--
Test the new $foo->bar()->baz() syntax.
<?php

class foo {
    public $prop = 'a value';

    function foo($arg) {
        print "Constructor called on $arg\n";
    }
    
    function method() {
        print "Method called\n";
        return $this;
    }
    function method2() {
        print "Method 2 called\n";
        return $this;
    }
}

$foo = new foo('an argument');
$foo->method()->method();
// Can you do it on properties too?
print "property is :" . $foo->method()->prop . "\n";
$foo->method()->method2()->prop = 'newval';
print "property is :" . $foo->method()->method2()->prop . "\n";
// Don't forget the double-quoted string parser:

print "property is : {$foo->method()->prop}\n";

function afun() {
    return new foo(22);
}

print afun()->prop;
print_r(afun()->method());

?>
--EXPECT--
Test the new $foo->bar()->baz() syntax.
Constructor called on an argument
Method called
Method called
Method called
property is :a value
Method called
Method 2 called
Method called
Method 2 called
property is :newval
Method called
property is : newval
Constructor called on 22
a valueConstructor called on 22
Method called
foo Object
(
    [prop] => a value
)
