--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001166.php (converted from Roadsend suite)
--FILE--
0001166 nested foreach problem

Additional Information i'm sure this has to do with the internal array
index. not sure how php handles it but it works ok in php, ie it
iterates through all items for each nest level.

<?php


$a = array('1','2','3','4');

foreach ($a as $v) {
  foreach ($a as $k) {
    print "a1 is $v while a2 is $k\n";
  }
}


?>

--EXPECT--
0001166 nested foreach problem

Additional Information i'm sure this has to do with the internal array
index. not sure how php handles it but it works ok in php, ie it
iterates through all items for each nest level.

a1 is 1 while a2 is 1
a1 is 1 while a2 is 2
a1 is 1 while a2 is 3
a1 is 1 while a2 is 4
a1 is 2 while a2 is 1
a1 is 2 while a2 is 2
a1 is 2 while a2 is 3
a1 is 2 while a2 is 4
a1 is 3 while a2 is 1
a1 is 3 while a2 is 2
a1 is 3 while a2 is 3
a1 is 3 while a2 is 4
a1 is 4 while a2 is 1
a1 is 4 while a2 is 2
a1 is 4 while a2 is 3
a1 is 4 while a2 is 4

