--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000794.php (converted from Roadsend suite)
--FILE--
<?php

function functest($a,$b,$c) {
return 'this is craptacular';
}

$languages['one']['XTRA_CODE'] = 'functest';

$filename = $languages['one']['XTRA_CODE']('downloadfilename', '', '');
echo $filename;

?>


--EXPECTF--
this is craptacular
