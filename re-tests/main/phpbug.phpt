--TEST--
/home/weyrick/pcc/tests/phpbug.php (converted from Roadsend suite)
--FILE--
<?php 
function zammo($foo) {
  echo(($foo . 2) + 3);


}


zammo("bar");



?>




--EXPECT--
3



