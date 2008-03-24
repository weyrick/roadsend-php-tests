--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001017.php (converted from Roadsend suite)
--FILE--
0001017	need static variables in class methods in interpreter

<?php

class aclass {
  function amethod() {
    static $foo;
    
    return $foo++;
  }	
}

print aclass::amethod() . "\n";
print aclass::amethod() . "\n";
print aclass::amethod() . "\n";

$anobj = new aclass();

print $anobj->amethod() . "\n";
print $anobj->amethod() . "\n";
print $anobj->amethod() . "\n";



?>
--EXPECTF--
0001017	need static variables in class methods in interpreter


1
2
3
4
5
