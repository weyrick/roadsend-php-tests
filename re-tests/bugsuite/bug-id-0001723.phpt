--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001723.php (converted from Roadsend suite)
--FILE--
compiled code is mutating arrays on n-dimensional access:

<?php

//lookup using isset
if (isset($foo['asdf']['zipl'])) {
echo "wasset\n";
}

print_r($foo);

//a different lookup
print($foo['anotherkey']['bork']);

print_r($foo);

if(isset($foo)) {
  print "the foo variable was set\n";
}

?>
--EXPECT--
compiled code is mutating arrays on n-dimensional access:

