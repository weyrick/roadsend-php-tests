--TEST--
/home/weyrick/pcc/tests/overloading.php (converted from Roadsend suite)
--FILE--
<?php

class tester {
    public $a=1;
    protected $b=2;
    private $c=3;    
    public function __isset($a) {
        echo "__isset called for [$a]\n";
    }
    public function __unset($a) {
        echo "__unset called for [$a]\n";
    }
    public function testFromClass() {
      echo 'ic1: '.isset($this->a)."\n";
      echo 'ic2: '.isset($this->b)."\n";
      echo 'ic3: '.isset($this->c)."\n";      
      echo 'ic4: '.isset($this->notHere)."\n";      
    }
}

$a = new tester();
echo 'i1: '.isset($a)."\n";
echo 'i2: '.isset($a->a)."\n";
echo 'i3: '.isset($a->b)."\n";
echo 'i4: '.isset($a->c)."\n";
echo 'i5: '.isset($a->notThere)."\n";
$a->testFromClass();
echo 'u1: ';
unset($a->a);
echo "\n";
echo 'u2: ';
unset($a->b);
echo "\n";
echo 'u3: ';
unset($a->c);
echo "\n";

class Setter
{
    public $n;
    private $x = array("a" => 1, "b" => 2, "c" => 3);

    public function __get($nm)
    {
        echo "Getting [$nm]\n";

        if (isset($this->x[$nm])) {
            $r = $this->x[$nm];
            print "Returning: $r\n";
            return $r;
        } else {
            echo "Nothing!\n";
        }
    }

    public function __set($nm, $val)
    {
        echo "Setting [$nm] to $val\n";

        if (isset($this->x[$nm])) {
            $this->x[$nm] = $val;
            echo "OK!\n";
        } else {
            echo "Not OK!\n";
        }
    }

    public function __isset($nm)
    {
        echo "Checking if $nm is set\n";

        return isset($this->x[$nm]);
    }

    public function __unset($nm)
    {
        echo "Unsetting $nm\n";

        unset($this->x[$nm]);
    }
}

$foo = new Setter();
$foo->n = 1;
$foo->a = 100;
$foo->a++;
$foo->z++;

var_dump(isset($foo->a)); //true
unset($foo->a);
var_dump(isset($foo->a)); //false

// this doesn't pass through the __isset() method
// because 'n' is a public property
var_dump(isset($foo->n));

var_dump($foo);
?>
--EXPECT--
i1: 1
i2: 1
__isset called for [b]
i3: 
__isset called for [c]
i4: 
__isset called for [notThere]
i5: 
ic1: 1
ic2: 1
ic3: 1
__isset called for [notHere]
ic4: 
u1: 
u2: __unset called for [b]

u3: __unset called for [c]

Setting [a] to 100
OK!
Getting [a]
Returning: 100
Setting [a] to 101
OK!
Getting [z]
Nothing!
Setting [z] to 1
Not OK!
Checking if a is set
bool(true)
Unsetting a
Checking if a is set
bool(false)
bool(true)
object(Setter)#2 (2) {
  ["n"]=>
  int(1)
  ["x:private"]=>
  array(2) {
    ["b"]=>
    int(2)
    ["c"]=>
    int(3)
  }
}
