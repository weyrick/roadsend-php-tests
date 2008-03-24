--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000692.php (converted from Roadsend suite)
--FILE--
constant as default argument for function parameter

the following breaks in the parser:


<?php

echo SF_LAYOUT_UNDEFINED."\n";
define("SF_LAYOUT_UNDEFINED", 100);
echo SF_LAYOUT_UNDEFINED."\n";

function addText($text, $lay=SF_LAYOUT_UNDEFINED) {

  echo ("$text, $lay\n");
}

addText("foo");


?>

this is also a problem for assigning a constant to a class variable in a class definition, ie:

<?php




class foo {
  var $sample = SF_LAYOUT_UNDEFINED;
  var $sample2 = SF_LAYOUT_UNDEFINED2;
}


$afoo = new foo();
echo $afoo->sample . "\n";
echo $afoo->sample2 . "\n";

echo SF_LAYOUT_UNDEFINED2."\n";
define("SF_LAYOUT_UNDEFINED2", 200);
echo SF_LAYOUT_UNDEFINED2."\n";

?>
--EXPECTF--
constant as default argument for function parameter

the following breaks in the parser:


SF_LAYOUT_UNDEFINED
100
foo, 100

this is also a problem for assigning a constant to a class variable in a class definition, ie:

100
SF_LAYOUT_UNDEFINED2
SF_LAYOUT_UNDEFINED2
200
