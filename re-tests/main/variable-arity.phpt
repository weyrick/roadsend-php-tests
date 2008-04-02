--TEST--
/home/weyrick/pcc/tests/variable-arity.php (converted from Roadsend suite)
--FILE--
test variable arity user functions

<?php
function foo()
{
   $numargs = func_num_args();
   echo "Number of arguments: $numargs<br />\n";
   if ($numargs >= 2) {
       echo "Second argument is: " . func_get_arg(1) . "<br />\n";
   }
   $arg_list = func_get_args();
   for ($i = 0; $i < $numargs; $i++) {
       echo "Argument $i is: " . $arg_list[$i] . "<br />\n";
   }
}

foo();
foo(1, 2, 3);

function foo_with_args($a, $b)
{
   $numargs = func_num_args();
   echo "0Number of arguments: $numargs<br />\n";
   if ($numargs >= 2) {
       echo "0Second argument is: " . func_get_arg(1) . "<br />\n";
   }
   $arg_list = func_get_args();
   for ($i = 0; $i < $numargs; $i++) {
       echo "0Argument $i is: " . $arg_list[$i] . "<br />\n";
   }
}

//foo_with_args();
foo_with_args(1, 2, 3);


class aclass {
  function afun() {
    $numargs = func_num_args();
    echo "1Number of arguments: $numargs<br />\n";
    if ($numargs >= 2) {
      echo "1Second argument is: " . func_get_arg(1) . "<br />\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
      echo "1Argument $i is: " . $arg_list[$i] . "<br />\n";
    }
  }

  function afun_with_args($a) {
    $numargs = func_num_args();
    echo "2Number of arguments: $numargs<br />\n";
    if ($numargs >= 2) {
      echo "2Second argument is: " . func_get_arg(1) . "<br />\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
      echo "2Argument $i is: " . $arg_list[$i] . "<br />\n";
    }
  }
}

aclass::afun(1, 2);
$a = new aclass();
$a->afun(88, 89, 90, 91);


aclass::afun_with_args(1, 2);
$a = new aclass();
$a->afun_with_args(88, 89, 90, 91);

?> 

--EXPECT--
test variable arity user functions

Number of arguments: 0<br />
Number of arguments: 3<br />
Second argument is: 2<br />
Argument 0 is: 1<br />
Argument 1 is: 2<br />
Argument 2 is: 3<br />
0Number of arguments: 3<br />
0Second argument is: 2<br />
0Argument 0 is: 1<br />
0Argument 1 is: 2<br />
0Argument 2 is: 3<br />
1Number of arguments: 2<br />
1Second argument is: 2<br />
1Argument 0 is: 1<br />
1Argument 1 is: 2<br />
1Number of arguments: 4<br />
1Second argument is: 89<br />
1Argument 0 is: 88<br />
1Argument 1 is: 89<br />
1Argument 2 is: 90<br />
1Argument 3 is: 91<br />
2Number of arguments: 2<br />
2Second argument is: 2<br />
2Argument 0 is: 1<br />
2Argument 1 is: 2<br />
2Number of arguments: 4<br />
2Second argument is: 89<br />
2Argument 0 is: 88<br />
2Argument 1 is: 89<br />
2Argument 2 is: 90<br />
2Argument 3 is: 91<br />
 

