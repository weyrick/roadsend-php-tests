--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0002248.php (converted from Roadsend suite)
--FILE--
<?php

if (function_exists(NULL))
  print "foo\n";
else
  print "bar\n";

if (function_exists())
  print "foo\n";
else
  print "bar\n";


?>
--EXPECTF--
bar

Warning: Not enough arguments for function function_exists: 1 required, 0 provided in %s on line %d
bar
--COMPILER:EXPECTF--
bar
bar
