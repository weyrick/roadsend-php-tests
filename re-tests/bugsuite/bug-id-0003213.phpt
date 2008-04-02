--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003213.php (converted from Roadsend suite)
--FILE--
<?php

for ($day_index = 0; $day_index <= 6; $day_index++) :
  echo $day_index;
endfor;

?>
--EXPECT--
0123456