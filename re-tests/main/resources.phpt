--TEST--
/home/weyrick/pcc/tests/resources.php (converted from Roadsend suite)
--FILE--
<?php

$foo = opendir("./");
echo $foo . "\n";
var_dump($foo);
echo "\n\nas an array key:\n";
$bar[$foo] = true;
var_dump($bar);
echo "\n" . get_resource_type($foo) . "\n";

echo "and reading: " . $bar[$foo] . "\n"; 


?>
--EXPECT--
Resource id #4
resource(4) of type (stream)


as an array key:
array(1) {
  [4]=>
  bool(true)
}

stream
and reading: 1
