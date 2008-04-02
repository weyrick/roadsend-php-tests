--TEST--
/home/weyrick/pcc/tests/magic-constants.php (converted from Roadsend suite)
--FILE--
<?

class Foo {

    function __construct() {
        echo __CLASS__.' -- '.__METHOD__."\n";
        echo "location is ".basename(__FILE__)." on line ".__LINE__."\n";
    }

    function testm() {
        echo __CLASS__.' -- '.__METHOD__."\n";
        echo "function: ".__FUNCTION__."\n";
    }

    function testm2() {
        echo __CLASS__.' -- '.__METHOD__."\n";
    }

}


class BaR extends Foo {
    
    function __construct() {
        echo __CLASS__.' -- '.__METHOD__."\n";
        echo "function: ".__FUNCTION__."\n";
        echo "location is ".basename(__FILE__)." on line ".__LINE__."\n";
    }

    function testm2() {
        echo __CLASS__.' -- '.__METHOD__."\n";
        echo "location is ".basename(__FILE__)." on line ".__LINE__."\n";
    }
}

function testfunc() {
    echo "function: ".__FUNCTION__."\n";
}

echo __CLASS__.' -- '.__METHOD__.", function: ".__FUNCTION__."\n";

echo "location is ".basename(__FILE__)." on line ".__LINE__."\n";

$f = new foo();
$f->testm();
$f->testm2();

$f = new bar();
$f->testm();
$f->testm2();

testfunc();

?>
--EXPECT--
 -- , function: 
location is magic-constants.php on line 42
Foo -- Foo::__construct
location is magic-constants.php on line 7
Foo -- Foo::testm
function: testm
Foo -- Foo::testm2
BaR -- BaR::__construct
function: __construct
location is magic-constants.php on line 27
Foo -- Foo::testm
function: testm
BaR -- BaR::testm2
location is magic-constants.php on line 32
function: testfunc
