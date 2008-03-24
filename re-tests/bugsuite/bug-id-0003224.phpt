--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003224.php (converted from Roadsend suite)
--FILE--
<?php
class foo {
    var $prop = "value";
    function foo() {
        eval('echo $this->prop . "\n";');
    }
}
$foo = new foo();
?>

--EXPECTF--
value
