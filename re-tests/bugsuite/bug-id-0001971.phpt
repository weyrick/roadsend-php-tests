--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001971.php (converted from Roadsend suite)
--FILE--
parser pukes on empty switch statements

<?php

switch(0) {}
print "ping\n";
?>
--EXPECT--
parser pukes on empty switch statements

ping
