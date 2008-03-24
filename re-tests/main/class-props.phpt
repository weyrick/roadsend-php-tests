--TEST--
/home/weyrick/pcc/tests/class-props.php (converted from Roadsend suite)
--FILE--
<?

class Foo {

    public $bar1;
    protected $bar2;
    private $bar3;

    function __construct() {
        $this->bar1 = 'init1';
        $this->bar2 = 'init2';
        $this->bar3 = 'init3';
        echo $this->bar1;
        echo $this->bar2;
        echo $this->bar3;
    }

}


class BaR extends Foo {
    
    function __construct() {
        $this->bar1 = 'init4';
        $this->bar2 = 'init5';
        $this->bar3 = 'init6';
        echo $this->bar1;
        echo $this->bar2;
        echo $this->bar3;
    }

}

$f = new foo();
var_dump($f);
echo $f->bar1;
//echo $f->bar2;
//echo $f->bar3;
$b = new bar();
var_dump($b);
echo $b->bar1;
//echo $b->bar2;
echo $b->bar3;

?>
--EXPECTF--
init1init2init3object(Foo)#1 (3) {
  ["bar1"]=>
  string(5) "init1"
  ["bar2:protected"]=>
  string(5) "init2"
  ["bar3:private"]=>
  string(5) "init3"
}
init1init4init5init6object(BaR)#2 (4) {
  ["bar1"]=>
  string(5) "init4"
  ["bar2:protected"]=>
  string(5) "init5"
  ["bar3:private"]=>
  NULL
  ["bar3"]=>
  string(5) "init6"
}
init4init6