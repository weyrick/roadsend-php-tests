--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001536.php (converted from Roadsend suite)
--FILE--
define() needs to happen like a normal statement, and still work as a
default value.

<?php

echo "hey:".defined('MEME').":yeh\n";
define('MEME',1);
echo "hey:".defined('MEME').":yeh\n";

?>

more

<?php

foo();

function foo($a=ZOT) {
print ("\$a is $a\n");
}

define(ZOT, "wert");

foo();

?>
--EXPECT--
define() needs to happen like a normal statement, and still work as a
default value.

hey::yeh
hey:1:yeh

more

$a is ZOT
$a is wert
