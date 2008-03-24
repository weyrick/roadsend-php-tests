--TEST--
/home/weyrick/pcc/tests/ref3.php (converted from Roadsend suite)
--FILE--
<?

class foo {
}

$a[] = new foo();
$a[] =& new foo();

$b = new foo();
$c =& new foo();
$d = new foo();
$d->a = $b;
$d->b = $c;
$d->a1 =& $b;
$d->a2 =& $c;
$d->a3[] = $a;
$d->a4[] = $b;
$d->a5[] = $c;
$d->a6[] =& $a;
$d->a7[] =& $b;
$d->a8[] =& $c;


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

?>
--EXPECTF--
array(2) {
  [0]=>
  object(foo)#1 (0) {
  }
  [1]=>
  object(foo)#2 (0) {
  }
}
object(foo)#3 (0) {
}
object(foo)#4 (0) {
}
object(foo)#5 (10) {
  ["a"]=>
  object(foo)#3 (0) {
  }
  ["b"]=>
  object(foo)#4 (0) {
  }
  ["a1"]=>
  &object(foo)#3 (0) {
  }
  ["a2"]=>
  &object(foo)#4 (0) {
  }
  ["a3"]=>
  array(1) {
    [0]=>
    array(2) {
      [0]=>
      object(foo)#1 (0) {
      }
      [1]=>
      object(foo)#2 (0) {
      }
    }
  }
  ["a4"]=>
  array(1) {
    [0]=>
    object(foo)#3 (0) {
    }
  }
  ["a5"]=>
  array(1) {
    [0]=>
    object(foo)#4 (0) {
    }
  }
  ["a6"]=>
  array(1) {
    [0]=>
    &array(2) {
      [0]=>
      object(foo)#1 (0) {
      }
      [1]=>
      object(foo)#2 (0) {
      }
    }
  }
  ["a7"]=>
  array(1) {
    [0]=>
    &object(foo)#3 (0) {
    }
  }
  ["a8"]=>
  array(1) {
    [0]=>
    &object(foo)#4 (0) {
    }
  }
}
