--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001407.php (converted from Roadsend suite)
--FILE--
<?php

$a =  array(
        'af-utf-8'     => array('af|afrikaans', 'afrikaans-utf-8', 'af'),
        'af-iso-8859-1'=> array('af|afrikaans', 'afrikaans-iso-8859-1', 'af'),
        'bg-win1251'   => array('bg|bulgarian', 'bulgarian-windows-1251', 'bg'));

$b = $a;
$a = array();

while (list($p, $s) = each($b)) {
    var_dump($p);
    var_dump($s);
    $a[$p] = $s;
}

var_dump($a);

?>
--EXPECTF--
string(8) "af-utf-8"
array(3) {
  [0]=>
  string(12) "af|afrikaans"
  [1]=>
  string(15) "afrikaans-utf-8"
  [2]=>
  string(2) "af"
}
string(13) "af-iso-8859-1"
array(3) {
  [0]=>
  string(12) "af|afrikaans"
  [1]=>
  string(20) "afrikaans-iso-8859-1"
  [2]=>
  string(2) "af"
}
string(10) "bg-win1251"
array(3) {
  [0]=>
  string(12) "bg|bulgarian"
  [1]=>
  string(22) "bulgarian-windows-1251"
  [2]=>
  string(2) "bg"
}
array(3) {
  ["af-utf-8"]=>
  array(3) {
    [0]=>
    string(12) "af|afrikaans"
    [1]=>
    string(15) "afrikaans-utf-8"
    [2]=>
    string(2) "af"
  }
  ["af-iso-8859-1"]=>
  array(3) {
    [0]=>
    string(12) "af|afrikaans"
    [1]=>
    string(20) "afrikaans-iso-8859-1"
    [2]=>
    string(2) "af"
  }
  ["bg-win1251"]=>
  array(3) {
    [0]=>
    string(12) "bg|bulgarian"
    [1]=>
    string(22) "bulgarian-windows-1251"
    [2]=>
    string(2) "bg"
  }
}
