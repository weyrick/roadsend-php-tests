--TEST--
/home/weyrick/pcc/tests/zclasses-test.php (converted from Roadsend suite)
--FILE--
<pre>
<?php

include "zclasses.inc";

// utility functions

function print_vars($obj) {
     $arr = get_object_vars($obj);
     print ("print_r: \n");
     print_r($arr);
     print ("while: \n");
     while (list($prop, $val) = each($arr))
         echo "\t$prop = $val\n";
}

function print_methods($obj) {
     $arr = get_class_methods(get_class($obj));
     sort($arr);
     foreach ($arr as $method)
         echo "\tfunction $method()\n";
}

function class_parentage($obj, $class) {
    global $$obj;
    if (is_subclass_of($$obj, $class)) {
        echo "Object $obj belongs to class ".get_class($$obj);
        echo " a subclass of $class\n";
    } else {
        echo "Object $obj does not belong to a subclass of $class\n";
    }
}

// instantiate 2 objects

$veggie = new Vegetable(true,"blue");
$leafy = new Spinach();

// print out information about objects
echo "veggie: CLASS ".get_class($veggie)."\n";
echo "leafy: CLASS ".get_class($leafy);
echo ", PARENT ".get_parent_class($leafy)."\n";

// show veggie properties
echo "\nveggie: Properties\n";
print_vars($veggie);

// and leafy methods
echo "\nleafy: Methods\n";
print_methods($leafy);

echo "\nParentage:\n";
class_parentage("leafy", "Spinach");
class_parentage("leafy", "Vegetable");

#print "brownly goes the deep chime: " . Vegetable::color . "\n";
Vegetable::staticable("a very special argument");


print "class vars for Vegetable: " . get_class_vars(get_class($veggie));


?>
</pre>

--EXPECT--
<pre>
veggie: CLASS Vegetable
leafy: CLASS Spinach, PARENT Vegetable

veggie: Properties
print_r: 
Array
(
    [edible] => 1
    [color] => blue
)
while: 
	edible = 1
	color = blue

leafy: Methods
	function Spinach()
	function Vegetable()
	function cook_it()
	function is_cooked()
	function is_edible()
	function staticable()
	function what_color()

Parentage:
Object leafy does not belong to a subclass of Spinach
Object leafy belongs to class Spinach a subclass of Vegetable
You passed this very special staticable function: a very special argument
class vars for Vegetable: Array</pre>

