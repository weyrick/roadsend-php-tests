--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001113.php (converted from Roadsend suite)
--FILE--
<?php
var_dump(
    array_map(
        NULL,
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
        )
    );
?>
--EXPECT--
array(3) {
  [0]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(4)
    [2]=>
    int(7)
  }
  [1]=>
  array(3) {
    [0]=>
    int(2)
    [1]=>
    int(5)
    [2]=>
    int(8)
  }
  [2]=>
  array(3) {
    [0]=>
    int(3)
    [1]=>
    int(6)
    [2]=>
    int(9)
  }
}
