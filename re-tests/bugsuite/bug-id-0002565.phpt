--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0002565.php (converted from Roadsend suite)
--FILE--
0002565: fwrite() is not binary safe

it's using stdio's fputs(), so it stops at the first 0 in the string:

<?php

$baz = fopen("/dev/zero", "r");
$foo = fread($baz, 8192);
$bar = fopen("/tmp/woot", "wb");
fwrite($bar, $foo);
fclose($bar);
echo filesize("/tmp/woot") . "\n";

?>
--EXPECT--
0002565: fwrite() is not binary safe

it's using stdio's fputs(), so it stops at the first 0 in the string:

8192
