--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001102.php (converted from Roadsend suite)
--FILE--
<?php
$data = '(#11/19/2002#)';
var_dump(preg_split('/\b/', $data));
var_dump(preg_split('/,/', "one,two,,three,,"));
var_dump(preg_split('/\b/', $data, PREG_SPLIT_OFFSET_CAPTURE));
?>
--EXPECT--
array(7) {
  [0]=>
  string(2) "(#"
  [1]=>
  string(2) "11"
  [2]=>
  string(1) "/"
  [3]=>
  string(2) "19"
  [4]=>
  string(1) "/"
  [5]=>
  string(4) "2002"
  [6]=>
  string(2) "#)"
}
array(6) {
  [0]=>
  string(3) "one"
  [1]=>
  string(3) "two"
  [2]=>
  string(0) ""
  [3]=>
  string(5) "three"
  [4]=>
  string(0) ""
  [5]=>
  string(0) ""
}
array(4) {
  [0]=>
  string(2) "(#"
  [1]=>
  string(2) "11"
  [2]=>
  string(1) "/"
  [3]=>
  string(9) "19/2002#)"
}
