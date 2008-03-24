--TEST--
/home/weyrick/pcc/tests/smObject.php (converted from Roadsend suite)
--FILE--
<?php


include "smErrors.inc";
include "smObject.inc";

$obj = new sm_Object();
$obj->debugLog("foo");

SM_fatalErrorPage("oops");

?>
--EXPECTF--
<html><body bgcolor=ffffff><br /><b><font color="red">
UNKNOWN SITENAME (UNKNOWN SITEID) :: <br /></font><hr />
 SM_object:: foo<br />
 <font color="red">oops</font><br />
</b><br /></body></html>