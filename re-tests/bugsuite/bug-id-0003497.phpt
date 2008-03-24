--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003497.php (converted from Roadsend suite)
--FILE--
<?

function bwops($a, $b) {
  $r[] = $a ^ $b;
  $r[] = $a xor $b;
  $r[] = $a & b;
  $r[] = $a and $b;
  $r[] = $a | $b;
  $r[] = $a or $b;
  $r[] = ~$a;
  $r[] = $a << $b;
  $r[] = $a >> $b;
  return $r;
}

$r = bwops(8,16);
var_dump($r);

?>
--EXPECTF--
array(9) {
  [0]=>
  int(24)
  [1]=>
  int(8)
  [2]=>
  int(0)
  [3]=>
  int(8)
  [4]=>
  int(24)
  [5]=>
  int(8)
  [6]=>
  int(-9)
  [7]=>
  int(524288)
  [8]=>
  int(0)
}
