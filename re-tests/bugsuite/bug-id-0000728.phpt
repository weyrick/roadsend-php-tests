--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000728.php (converted from Roadsend suite)
--FILE--
0000728 concat strings including other defines to build a define
<?php

define('SM_TAG_IDENTIFIER', 12);

define('SM_TAG_PREGEXP','/<\s*'.SM_TAG_IDENTIFIER.'\s(.+)\s*>/Ui');

define('TAB_4',' ');

// other defines

define('TAB_8',TAB_4.TAB_4);

echo SM_TAG_IDENTIFIER . ", " . SM_TAG_PREGEXP  . ", " . TAB_4  . ", " . TAB_8 . "\n";

?>
--EXPECT--
0000728 concat strings including other defines to build a define
12, /<\s*12\s(.+)\s*>/Ui,  ,   
