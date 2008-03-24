--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000694.php (converted from Roadsend suite)
--FILE--
class property access with $ throws parse error
the following causes a parse error:
(inside class method)

$this->$var = 5;

<?php

class blah {
  var $fnord = 'test';
  var $melp = 'flag';
}


$mah = new blah();

$classVars = get_class_vars(get_class($mah));
foreach ($classVars as $n => $v) {
  print "class prop is $n val is $v\n";
  $v = $mah->$n;
  var_dump($v);
}

?>


--EXPECTF--
class property access with $ throws parse error
the following causes a parse error:
(inside class method)

$this->$var = 5;

class prop is fnord val is test
string(4) "test"
class prop is melp val is flag
string(4) "flag"

