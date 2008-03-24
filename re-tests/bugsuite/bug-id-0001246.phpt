--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001246.php (converted from Roadsend suite)
--FILE--
0001246 warning on mutation of non reference function parameter

<?php


function modit($var) {
$var = 'i have changed the variable';
}

function modarray($a) {
asort($a);
}

function returncopy($var) {
$var = 'meep';
return $var;
}

function &returnref($var) {
return $var;
}

$a = 'test';
modit($a);
var_dump($a);

$a = array(1,2,3);
modarray($a);
var_dump($a);

$b =& $a;
$a = 'hello';
$c = returncopy($b);
var_dump($c);

$x =& $a;
$a = 'hi ho';
$w = returnref($x);
var_dump($w);

$d = $f = array(5,3,8,2,1);
asort($f);
var_dump($d);
var_dump($f);

$a = array('1' => 'hey there',
'six' => 'snorg',
'blix' => 'bellbottom');

foreach ($a as $k => $v) {
echo "$k => $v\n";
$v = 'changeit';
}

var_dump($a);

class aclass {
var $v = 'initial';
}

$z[] =& new aclass;
$z[] = new aclass;

var_dump($z);

foreach ($z as $c) {
$c->v = 'changed';
}

var_dump($z);

echo "Test return values by reference\n";


function &byref() {
  static $foo;

  $foo++;
  echo "$foo\n";
  return $foo;
}

$bar = byref();
$bar++;
byref();


$bar =& byref();
$bar++;
byref();

echo "Test return values getting copied\n";

function copying() {
  static $foo;

  $foo[] = "asdf";
  var_dump($foo);
  return $foo;
}

$bar = copying();
$bar[] = 22;
copying();


$bar =& copying();
$bar[] = 23;
copying();


?>

--EXPECTF--
0001246 warning on mutation of non reference function parameter

string(4) "test"
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
string(4) "meep"
string(5) "hi ho"
array(5) {
  [0]=>
  int(5)
  [1]=>
  int(3)
  [2]=>
  int(8)
  [3]=>
  int(2)
  [4]=>
  int(1)
}
array(5) {
  [4]=>
  int(1)
  [3]=>
  int(2)
  [1]=>
  int(3)
  [0]=>
  int(5)
  [2]=>
  int(8)
}
1 => hey there
six => snorg
blix => bellbottom
array(3) {
  [1]=>
  string(9) "hey there"
  ["six"]=>
  string(5) "snorg"
  ["blix"]=>
  string(10) "bellbottom"
}
array(2) {
  [0]=>
  object(aclass)#1 (1) {
    ["v"]=>
    string(7) "initial"
  }
  [1]=>
  object(aclass)#2 (1) {
    ["v"]=>
    string(7) "initial"
  }
}
array(2) {
  [0]=>
  object(aclass)#1 (1) {
    ["v"]=>
    string(7) "changed"
  }
  [1]=>
  object(aclass)#2 (1) {
    ["v"]=>
    string(7) "changed"
  }
}
Test return values by reference
1
2
3
5
Test return values getting copied
array(1) {
  [0]=>
  string(4) "asdf"
}
array(2) {
  [0]=>
  string(4) "asdf"
  [1]=>
  string(4) "asdf"
}
array(3) {
  [0]=>
  string(4) "asdf"
  [1]=>
  string(4) "asdf"
  [2]=>
  string(4) "asdf"
}
array(4) {
  [0]=>
  string(4) "asdf"
  [1]=>
  string(4) "asdf"
  [2]=>
  string(4) "asdf"
  [3]=>
  string(4) "asdf"
}
