--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001133.php (converted from Roadsend suite)
--FILE--
<?php
$test = "
<table>
<tr><td>first cell before < first cell after</td></tr>
<tr><td>second cell before < second cell after</td></tr>
</table>";

echo strip_tags($test);
?>

--EXPECTF--


first cell before < first cell after
second cell before < second cell after
