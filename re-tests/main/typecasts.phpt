--TEST--
/home/weyrick/pcc/tests/typecasts.php (converted from Roadsend suite)
--FILE--
<?php

print "Four scalar types:\n";


print "***   boolean   ***\n";


var_dump( FALSE );
var_dump( (bool)FALSE ); 
var_dump( (boolean)FALSE );
var_dump( (bool)0 );
var_dump( (bool)0.0 );
var_dump( (bool)"" );
var_dump( (bool)"0" );
var_dump( (bool)(array)$foo );
var_dump( (bool)(object)$foo );
var_dump( (bool)NULL );


$foo[1] = 2;

var_dump( TRUE );
var_dump( (bool)TRUE );
var_dump( (boolean)TRUE );
var_dump( (bool)33, (bool)0.21, (bool)"9" );
var_dump( (bool)"foo" );
var_dump( (bool)$foo );
var_dump( (bool)(object)$foo );



print( "***   integer   ***\n");

var_dump( 12 );
var_dump( (integer)FALSE );
var_dump( (int)TRUE );
var_dump( (integer)-23 );
var_dump( (integer)03800 );
var_dump( (integer)0x3800 );
var_dump( (integer)0 );
var_dump( (int)0.0 );
var_dump( (integer)1.2324 );
var_dump( (integer)-1.2324 );
var_dump( (integer)"" );
var_dump( (integer)"0" );
var_dump( (integer)$foo );
var_dump( (integer)(object)$foo );
var_dump( (integer)NULL );
    

print( "***   float   ***\n");

var_dump( 12.1234 );
var_dump( (float)FALSE );
var_dump( (double)TRUE );
var_dump( (float)-23 );
var_dump( (float)03800 );
var_dump( (real)0x3800 );
var_dump( (float)0 );
var_dump( (double)0.0 );
var_dump( (float)1.2324 );
var_dump( (real)-1.2324 );
var_dump( (double)1.2324 );
var_dump( (double)-1.2324 );
var_dump( (float)"" );
var_dump( (float)"0" );
var_dump( (real)$foo );
var_dump( (float)(object)$foo );
var_dump( (float)NULL );
var_dump( (float)"1.234");
var_dump( (float)"-3.2e2");

var_dump( (float)1.2e3 ); 
var_dump( (float)(7E-10 + 1) );


print( "***   string   ***\n");

var_dump( "12.1234" );
var_dump( (string)FALSE );
var_dump( (string)TRUE );
var_dump( (string)-23 );
var_dump( (string)03800 );
var_dump( (string)0x3800 );
var_dump( (string)0 );
var_dump( (string)0.0 );
var_dump( (string)1.2324 );
var_dump( (string)-1.2324 );
var_dump( (string)1.2324 );
var_dump( (string)-1.2324 );
var_dump( (string)"" );
var_dump( (string)"0" );
var_dump( (string)$foo );
//var_dump( (string)(object)$foo );
var_dump( (string)NULL );
    

var_dump( (string)1.2e3 ); 
var_dump( (string)(7E-10 + 1) );





print( "\n\nTwo compound types:.\n");


$foo['asdf'] = "valasdf";
$foo['hjlk'] = "valhjlk";

class aclass {
  var $aprop = 12;
  //  var $bprop = "asdf";

  function foo() {
  }
}

$bar = new aclass();
$bar->bprop = "fdsa";    

print( "***   array   ***\n");

var_dump( array(12.1234 => "Asdf") );
var_dump( array(12.51234 => "Asdf") );
var_dump( array("12.51234" => "Asdf") );
var_dump( $foo);
var_dump( (array)FALSE );
var_dump( (array)TRUE );
var_dump( (array)-23 );
var_dump( (array)"" );
var_dump( (array)"0" );
var_dump( (array)$foo );
var_dump( (array)$bar );
var_dump( (array)NULL );
    


print( "***   object   ***\n");

print_r( $bar);
$bar->cprop = $bar;
print_r( $bar);
print_r( (object)array("foo" => "Asdf") );
print_r( (object)FALSE );
print_r( (object)TRUE );
print_r( (object)-23 );
print_r( (object)"" );
print_r( (object)"0" );
print_r( (object)$foo );
print_r( (object)$bar );
print_r( (object)NULL );



print( "\n\nTwo special types:\n");

    

print( "***   resource   ***\n");
    


print( "***   NULL   ***\n");

var_dump( NULL );



?>
--EXPECTF--
Four scalar types:
***   boolean   ***
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(true)
bool(false)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
***   integer   ***
int(12)
int(0)
int(1)
int(-23)
int(3)
int(14336)
int(0)
int(0)
int(1)
int(-1)
int(0)
int(0)
int(1)
int(1)
int(0)
***   float   ***
float(12.1234)
float(0)
float(1)
float(-23)
float(3)
float(14336)
float(0)
float(0)
float(1.2324)
float(-1.2324)
float(1.2324)
float(-1.2324)
float(0)
float(0)
float(1)
float(1)
float(0)
float(1.234)
float(-320)
float(1200)
float(1.0000000007)
***   string   ***
string(7) "12.1234"
string(0) ""
string(1) "1"
string(3) "-23"
string(1) "3"
string(5) "14336"
string(1) "0"
string(1) "0"
string(6) "1.2324"
string(7) "-1.2324"
string(6) "1.2324"
string(7) "-1.2324"
string(0) ""
string(1) "0"
string(5) "Array"
string(0) ""
string(4) "1200"
string(12) "1.0000000007"


Two compound types:.
***   array   ***
array(1) {
  [12]=>
  string(4) "Asdf"
}
array(1) {
  [12]=>
  string(4) "Asdf"
}
array(1) {
  ["12.51234"]=>
  string(4) "Asdf"
}
array(3) {
  [1]=>
  int(2)
  ["asdf"]=>
  string(7) "valasdf"
  ["hjlk"]=>
  string(7) "valhjlk"
}
array(1) {
  [0]=>
  bool(false)
}
array(1) {
  [0]=>
  bool(true)
}
array(1) {
  [0]=>
  int(-23)
}
array(1) {
  [0]=>
  string(0) ""
}
array(1) {
  [0]=>
  string(1) "0"
}
array(3) {
  [1]=>
  int(2)
  ["asdf"]=>
  string(7) "valasdf"
  ["hjlk"]=>
  string(7) "valhjlk"
}
array(2) {
  ["aprop"]=>
  int(12)
  ["bprop"]=>
  string(4) "fdsa"
}
array(0) {
}
***   object   ***
aclass Object
(
    [aprop] => 12
    [bprop] => fdsa
)
aclass Object
(
    [aprop] => 12
    [bprop] => fdsa
    [cprop] => aclass Object
 *RECURSION*
)
stdClass Object
(
    [foo] => Asdf
)
stdClass Object
(
    [scalar] => 
)
stdClass Object
(
    [scalar] => 1
)
stdClass Object
(
    [scalar] => -23
)
stdClass Object
(
    [scalar] => 
)
stdClass Object
(
    [scalar] => 0
)
stdClass Object
(
    [1] => 2
    [asdf] => valasdf
    [hjlk] => valhjlk
)
aclass Object
(
    [aprop] => 12
    [bprop] => fdsa
    [cprop] => aclass Object
 *RECURSION*
)
stdClass Object
(
)


Two special types:
***   resource   ***
***   NULL   ***
NULL
