--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000693.php (converted from Roadsend suite)
--FILE--
0000693 foreach and others with no braces cause parse error

<?php

# 	the following causes a parse error

$arr = array("ASdf", "asdf");

foreach ($arr as $key => $val)
     echo "$key, $val\n";


for($i=0; $i<10; $i++)
     echo "$i\n";


function cnt() {
  static $i = 0;

  $i++;
  return $i;
}

while (cnt() < 10) 
     echo "counted\n";



?>
--EXPECT--
0000693 foreach and others with no braces cause parse error

0, ASdf
1, asdf
0
1
2
3
4
5
6
7
8
9
counted
counted
counted
counted
counted
counted
counted
counted
counted
