--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000959.php (converted from Roadsend suite)
--FILE--
0000959 $this is null in constructor

<?php

class bling {

  function __toString() {
    return "[this is class ".__CLASS__."]";
  }
  function bling() {
    echo "bling this is $this\n";
    echo "bling this->zot is " . $this->zot ."\n";
  }

  function wibble() {
    print "bling's wibble\n";
    echo "bling's wibble's this: $this\n";
    echo "bling's wibbles' this->zot is " . $this->zot ."\n";
  }
}

class foo extends bling {
  var $zot = 3;

  function __toString() {
    return "[this is class ".__CLASS__."]";
  }
  function foo() {
    parent::bling();
    echo "this is $this\n";
    echo "this->zot is " . $this->zot ."\n";
    $this->wibble();
    parent::wibble();
  }

  function wibble() {
    print "foo's wibble\n";
    echo "foo's wibble's this: $this\n";
    echo "foos's wibbles' this->zot is " . $this->zot ."\n";
  }
}


$bar = new foo();

//echo "--\n";
//bling::bling();

?>

--EXPECTF--
0000959 $this is null in constructor

bling this is [this is class foo]
bling this->zot is 3
this is [this is class foo]
this->zot is 3
foo's wibble
foo's wibble's this: [this is class foo]
foos's wibbles' this->zot is 3
bling's wibble
bling's wibble's this: [this is class foo]
bling's wibbles' this->zot is 3
