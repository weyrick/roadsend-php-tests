--TEST--
/home/weyrick/pcc/tests/static-methods.php (converted from Roadsend suite)
--FILE--
<?php

class notparent {
  var $nprop = "foo";

  function nmethod() {
    echo("in nmethod()\n");
    var_dump($this);
    echo("/in nmethod()\n");
  }
}

class aclass {
  var $aprop = "wrong";

  function aclass() {
    echo("in aclass()\n");
    var_dump($this);
    echo("/in aclass()\n");
  }

  function amethod() {
    echo("in amethod()\n");
    var_dump($this);
    echo("/in amethod()\n");
  }
}

class bclass extends aclass {
  var $bprop = "okay";

  function bclass() {
    $this->aprop = "right";
    echo("in bclass()\n");
    aclass::aclass();
    echo("/in bclass()\n");
  }

  function bmethod() {
    $this->aprop = "the current instance";
    aclass::aclass();
    aclass::amethod();

// We want to disagree with PHP in this case.
//  notparent::nmethod(); 
  }
}

$foo = new bclass();

//aclass::aclass();

$foo->bmethod();


class A {
    static function foo () {
        echo "A::foo()";
    }
   
    static function callFoo () {
        self::foo();
    }
}

class B extends A {
    static function foo () {
        echo "B::foo()";
    }
}

B::callFoo();

$name = 'callFoo';
B::$name();

?>

--EXPECT--
in bclass()
in aclass()
object(bclass)#1 (2) {
  ["bprop"]=>
  string(4) "okay"
  ["aprop"]=>
  string(5) "right"
}
/in aclass()
/in bclass()
in aclass()
object(bclass)#1 (2) {
  ["bprop"]=>
  string(4) "okay"
  ["aprop"]=>
  string(20) "the current instance"
}
/in aclass()
in amethod()
object(bclass)#1 (2) {
  ["bprop"]=>
  string(4) "okay"
  ["aprop"]=>
  string(20) "the current instance"
}
/in amethod()
A::foo()A::foo()
