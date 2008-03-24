--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001142.php (converted from Roadsend suite)
--FILE--
<?php
/* Do not change this test it is a README.TESTING example. */
$s = "alabala nica".chr(0)."turska panica";
var_dump(strstr($s, "nic"));
var_dump(strrchr($s," "));
?>

--EXPECTF--
string(18) "nica