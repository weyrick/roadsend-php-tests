--TEST--
trac bug #3593: bit operators (x86)
--FILE--
<?php

echo -738197504 | 1900544 | 35840 | 217;

?>
--EXPECT--
-736260903
