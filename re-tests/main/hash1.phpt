--TEST--
/home/weyrick/pcc/tests/hash1.php (converted from Roadsend suite)
--FILE--
<?php

$ahash["1"] = "foo";

echo $ahash[1] . "\n";

echo $ahash["1"] . "\n";

echo "$ahash[1]\n";



?>
--EXPECT--
foo
foo
foo
