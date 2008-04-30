--TEST--
trac bug #3571: symtab issue with clone
--FILE--
<?php

class foo {
  function bar($x) {
    $foo = clone($x);
  }

}

function bar($o) {
    $baz = clone($o);
}

$x = new foo();
$a = new foo();
$a->bar($x);
print_r($a);

bar($a);

?>
--EXPECT--
foo Object
(
)
