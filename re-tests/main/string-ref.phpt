--TEST--
/home/weyrick/pcc/tests/string-ref.php (converted from Roadsend suite)
--FILE--
<?php

function foo() {
	return "f";
}

$bar = "ooo";
$bar{0} = foo();

echo $bar{0} . $bar{1} . $bar{2};

?>
--EXPECT--
foo