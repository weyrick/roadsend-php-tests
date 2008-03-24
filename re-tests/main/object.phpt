--TEST--
/home/weyrick/pcc/tests/object.php (converted from Roadsend suite)
--FILE--
<?php

class zot {

  var $bing = 12;
  var $Bing = "this is the capitalized bing";


  function zot() {
    echo "constructor\n";
  }

  var $otherplacement = 9;

  function __toString() {
      return "[this is a zot class]";
  }

  function afun($anarg) {
    //    echo $this->bing;
    echo $this;
    echo "you called zot->afun with $anarg.  bing was {$this->bing}.\n";
    //    $this->bing = $anarg;
  }

}

class argconstructor {

  var $bing = 12;


  function __toString() {
      return "[this is an argconstructor class]";
  }

  function argconstructor($a, $b="foo") {
    echo "constructor $a, $b\n";
  }

  var $otherplacement = 9;

  function afun($anarg) {
    //    echo $this->bing;
    echo $this;
    echo "you called argconstructor->afun with $anarg.  bing was {$this->bing}.\n";
    //    $this->bing = $anarg;
  }

}

function zot() {
  echo "I am the walrus\n";
}

$bing = new zot;

print "lower: $bing->bing, capitalized: $bing->Bing\n";

echo "foo";

$bing->afun(19);
$bing->afun(20);

$bing = new zot();
$bing = new zot;
//$bing = new zot("asdf");

$bing->afun(34);


zot();

$bing = new argconstructor(12);
$bing->afun(12);

$c = 'argconstructor';
$bap = new $c;
$bpa = new $c(12);

class bar {
  var $baz;
  function bar($a='noarg') { $this->baz = $a; }
}

class foo {

  var $a ='bar';

  function assign() {
    $zap = new $this->a('setbaz');
    print_r($zap);
    $zap2 = new $this->a;
    print_r($zap);
  }

}

$a = new foo();
$a->assign();
print_r($a);

?>

--EXPECTF--
constructor
lower: 12, capitalized: this is the capitalized bing
foo[this is a zot class]you called zot->afun with 19.  bing was 12.
[this is a zot class]you called zot->afun with 20.  bing was 12.
constructor
constructor
[this is a zot class]you called zot->afun with 34.  bing was 12.
I am the walrus
constructor 12, foo
[this is an argconstructor class]you called argconstructor->afun with 12.  bing was 12.

Warning: Missing argument 1 for argconstructor::argconstructor(), called in /home/weyrick/workspace/pcc/tests/object.php on line 78 and defined in /home/weyrick/workspace/pcc/tests/object.php on line 37
constructor , foo
constructor 12, foo
bar Object
(
    [baz] => setbaz
)
bar Object
(
    [baz] => setbaz
)
foo Object
(
    [a] => bar
)
