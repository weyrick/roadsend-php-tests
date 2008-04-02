--TEST--
/home/weyrick/pcc/tests/zthis.php (converted from Roadsend suite)
--FILE--
<?php
class foo {
  function foo($name) {
    $GLOBALS['List'] =& $this;
    $this->Name = $name;
    $GLOBALS['List']->echoName(); 
  }
  
  function echoName() {
    $GLOBALS['names'][]=$this->Name; 
    echo "Foo";
  } 
}

function &foo2(&$foo)	{
	return $foo; }


$bar1 =& new foo('constructor');

$bar1->Name = 'outside';

$bar1->echoName();

$List->echoName();

$bar1 =& foo2(new foo('constructor'));

$bar1->Name = 'outside';

$bar1->echoName();


$List->echoName();

print ($names==array('constructor','outside','outside','constructor','outside','outside')) ? 'success':'failure'; 

print("\nthe array:\n");

print_r(array('constructor','outside','outside','constructor','outside','outside'));

print("\n\$names:\n");

print_r($names);


?>
--EXPECT--
FooFooFooFooFooFoosuccess
the array:
Array
(
    [0] => constructor
    [1] => outside
    [2] => outside
    [3] => constructor
    [4] => outside
    [5] => outside
)

$names:
Array
(
    [0] => constructor
    [1] => outside
    [2] => outside
    [3] => constructor
    [4] => outside
    [5] => outside
)
