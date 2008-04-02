--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000894.php (converted from Roadsend suite)
--FILE--
parse error on class variable named 'default'

<?php

class myclass {
var $default = 'test';
function blah() {
$this->default = 'meep';
}
}

$c = new myclass();
$c->blah();
echo $c->default;

?>
--EXPECT--
parse error on class variable named 'default'

meep