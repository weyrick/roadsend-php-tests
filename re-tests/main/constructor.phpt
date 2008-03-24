--TEST--
/home/weyrick/pcc/tests/constructor.php (converted from Roadsend suite)
--FILE--
<?php

class aclass {
    function __construct() {
        print "Constructor of aclass called\n";
    }

    function aclass() {
        print "Old constructor of aclass called\n";
    }
}


class bclass extends aclass {
    function __construct() {
        print "Constructor of bclass called\n";
        parent::aclass();
        parent::__construct();
    }
}

class cclass extends bclass {
    function cclass() {
        print "Old constructor of cclass called\n";
    }
}

echo "1\n";
$foo = new aclass();
echo "2\n";
$bar = new bclass();
echo "3\n";
$baz = new cclass();
echo "4\n";
$baz->__construct();
?>
--EXPECTF--
1
Constructor of aclass called
2
Constructor of bclass called
Old constructor of aclass called
Constructor of aclass called
3
Old constructor of cclass called
4
Constructor of bclass called
Old constructor of aclass called
Constructor of aclass called
