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

Warning: Wrong parameter count for function_exists() in /home/weyrick/workspace/pcc/bugs/tests/bug-id-0002248.php on line 8
bar
