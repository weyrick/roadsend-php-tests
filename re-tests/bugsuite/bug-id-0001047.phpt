--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001047.php (converted from Roadsend suite)
--FILE--
<?php


$a[] = array(''=>1);
$a[] = array(''=>2);
$a[] = array(''=>3);
$a[] = array(''=>4);
$a[] = array(''=>5);

var_dump($a);


?>
--EXPECTF--
array(5) {
  [0]=>
  array(1) {
    [""]=>
    int(1)
  }
  [1]=>
  array(1) {
    [""]=>
    int(2)
  }
  [2]=>
  array(1) {
    [""]=>
    int(3)
  }
  [3]=>
  array(1) {
    [""]=>
    int(4)
  }
  [4]=>
  array(1) {
    [""]=>
    int(5)
  }
}
