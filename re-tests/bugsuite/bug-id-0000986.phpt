--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000986.php (converted from Roadsend suite)
--FILE--
0000986 parse error globalizing a variable variable from a hash
<?php

$aval = 'hi';

function blah() {
  $a['test'] = 'aval';
  global $$a['test'];
  echo "this should say hi--> ".$$a['test']."\n";
}

blah();

?>

--EXPECTF--
0000986 parse error globalizing a variable variable from a hash
this should say hi--> hi
