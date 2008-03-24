--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000800.php (converted from Roadsend suite)
--FILE--
0000800 more string interpolation crazyness

<?php

class testClass {

var $var;

function testClass() {
$this->var['test'] = 'fnord';
echo "can you see the [{$this->var['test']}]?\n";
}

}

$c = new testClass();

?>

--EXPECTF--
0000800 more string interpolation crazyness

can you see the [fnord]?
