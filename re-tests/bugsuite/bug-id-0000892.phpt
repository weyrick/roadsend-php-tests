--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000892.php (converted from Roadsend suite)
--FILE--
right now the default script root directory is /, it needs to be the 
directory the script lives in for relative includes to work.
<BR>
This script needs to be run through mod_phpoo to matter.
<BR>
<?php

print "current working directory is: " . posix_getcwd() . "\n";

?>
--EXPECT--
right now the default script root directory is /, it needs to be the 
directory the script lives in for relative includes to work.
<BR>
This script needs to be run through mod_phpoo to matter.
<BR>
current working directory is: /home/weyrick/workspace/pcc-testsuite/re-tests/bugsuite
