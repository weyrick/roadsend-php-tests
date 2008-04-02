--TEST--
/home/weyrick/pcc/tests/class-constants.php (converted from Roadsend suite)
--FILE--
<?php
class MyClass
{
    const constant = 'constant value';

    function showConstant() {
        echo  self::constant . "\n";
    }
}

echo MyClass::constant . "\n";

$class = new MyClass();
$class->showConstant();

?> 
--EXPECT--
constant value
constant value
 