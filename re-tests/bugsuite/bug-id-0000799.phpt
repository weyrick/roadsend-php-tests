--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000799.php (converted from Roadsend suite)
--FILE--
<?php


while ($i < 2) {
     $i++;
     if ($i == 1)
     continue;
     else
     echo '1';

     if ($i == 0)
     continue;
     else
     echo '2';
}

?>
--EXPECT--
12