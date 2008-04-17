--TEST--
/home/weyrick/pcc/tests/destructors.php (converted from Roadsend suite)
--KNOWNFAILURE--
fails because we implement destructors with GC finalization, which means
the destructor fires when the object is collected, and not necessarily
right when there are no references to it (as zend)
--FILE--
<?php
class MyDestructableClass {
  static $cnt=0;
   function __construct() {
       print "In constructor\n";
       self::$cnt++;
       $this->name = "MyDestructableClass: ".self::$cnt;
   }

   function __destruct() {
       print "Destroying " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
$obj = NULL;

$obj = new MyDestructableClass();
unset($obj);

$obj = new MyDestructableClass();
$obj = 50;

$obj = new MyDestructableClass();

?> 
--EXPECT--
In constructor
Destroying MyDestructableClass: 1
In constructor
Destroying MyDestructableClass: 2
In constructor
Destroying MyDestructableClass: 3
In constructor
 
Destroying MyDestructableClass: 4
