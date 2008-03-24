--TEST--
/home/weyrick/pcc/tests/ref.php (converted from Roadsend suite)
--FILE--
<?php

$foo = 5;

echo $foo;

function foocrement(&$foo) {
  echo "foocrement\n";
  $foo = $foo + 1;
  echo "$foo\n";
  echo "endcrement\n";
}

foocrement($foo);

echo "$foo\n";

?>

--EXPECTF--
5foocrement
6
endcrement
6
