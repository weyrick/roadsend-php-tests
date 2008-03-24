--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001940.php (converted from Roadsend suite)
--FILE--
define() inside of an ugly-then produces a parse error


<?php

(!defined("DEF")) ? define("DEF",'worked ok') : NULL;

echo DEF."\n";

?>

this is because define() is actually an rval (I think it's even 
a normal function in php):

<?php


echo define("FOO", 2);
echo define("FOO", 3);
echo ", " . FOO . "\n";

?>
--EXPECTF--
define() inside of an ugly-then produces a parse error


worked ok

this is because define() is actually an rval (I think it's even 
a normal function in php):

1, 2
