--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001149.php (converted from Roadsend suite)
--FILE--
<?php

if (!ini_get('register_globals')) {
    $argc = $_SERVER['argc'];
    $argv = $_SERVER['argv'];
}

for ($i=1; $i<$argc; $i++) {
    echo ($i-1).": ".$argv[$i]."\n";
}

?>

--EXPECTF--
