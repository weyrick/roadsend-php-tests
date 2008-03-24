--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000919.php (converted from Roadsend suite)
--FILE--
<?php
echo "unreferenced magic global stuff doesn't work.\n\n";

$aglobal = "aglobal";

function useit() {
  global $aglobal; 

  $foo = "boo";
  //if the variable $aglobal isn't used, we generate bad scheme code.

  //  print $aglobal . "\n"; 
  
  //  $aglobal = 42;
}

print $aglobal . "\n";

useit();

print $aglobal . "\n";

?>
--EXPECTF--
unreferenced magic global stuff doesn't work.

aglobal
aglobal
