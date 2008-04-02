--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000952.php (converted from Roadsend suite)
--FILE--
0000952 here tis. whoever wrote this should be shot. oh wait..
<?php

echo "version incompatibility with config file $(I'm version ".SMCONFIG_VERSION."it's version {$attrs[ 'VERSION']})";

?>
--EXPECT--
0000952 here tis. whoever wrote this should be shot. oh wait..
version incompatibility with config file $(I'm version SMCONFIG_VERSIONit's version )