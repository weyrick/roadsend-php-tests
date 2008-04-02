--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003165.php (converted from Roadsend suite)
--FILE--
<?php

function foo()
{
   $numargs = func_num_args();
   echo "Number of arguments: $numargs<br />\n";
   if ($numargs >= 2) {
       echo "Second argument is: " . func_get_arg(1) . "<br />\n";
   }
   /*$arg_list = func_get_args();
   for ($i = 0; $i < $numargs; $i++) {
       echo "Argument $i is: " . $arg_list[$i] . "<br />\n";
   }*/
}

function foo_with_args($a, $b)
{
   $numargs = func_num_args();
   echo "correct -- Number of arguments: $numargs<br />\n";
   if ($numargs >= 2) {
       echo "0Second argument is: " . func_get_arg(1) . "<br />\n";
   }
   foo(6,5,4);
   $numargs = func_num_args();
   echo "wrong -- Number of arguments: $numargs<br />\n";
   if ($numargs >= 2) {
       echo "1Second argument is: " . func_get_arg(1) . "<br />\n";
   }
   foo(11,12,13);
   $arg_list = func_get_args();
   for ($i = 0; $i < $numargs; $i++) {
       echo "2Argument $i is: " . $arg_list[$i] . "<br />\n";
   }
}

foo_with_args(1,2);

?>
--EXPECT--
correct -- Number of arguments: 2<br />
0Second argument is: 2<br />
Number of arguments: 3<br />
Second argument is: 5<br />
wrong -- Number of arguments: 2<br />
1Second argument is: 2<br />
Number of arguments: 3<br />
Second argument is: 12<br />
2Argument 0 is: 1<br />
2Argument 1 is: 2<br />
