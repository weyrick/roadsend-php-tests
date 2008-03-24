--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000916.php (converted from Roadsend suite)
--FILE--
<?php

if (1)
     @require_once('hi.php');
else
     echo "blah";

?>

--EXPECTF--
