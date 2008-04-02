--TEST--
/home/weyrick/pcc/tests/prepostcrement.php (converted from Roadsend suite)
--FILE--
<?php
echo "<h3&gt;Postincrement</h3&gt;";
$a = 5;
echo "Should be 5: " . $a++ . "<br>\n";
echo "Should be 6: " . $a . "<br>\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br>\n";
echo "Should be 6: " . $a . "<br>\n";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5: " . $a-- . "<br>\n";
echo "Should be 4: " . $a . "<br>\n";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4: " . --$a . "<br>\n";
echo "Should be 4: " . $a . "<br>\n";
?>
--EXPECT--
<h3&gt;Postincrement</h3&gt;Should be 5: 5<br>
Should be 6: 6<br>
<h3>Preincrement</h3>Should be 6: 6<br>
Should be 6: 6<br>
<h3>Postdecrement</h3>Should be 5: 5<br>
Should be 4: 4<br>
<h3>Predecrement</h3>Should be 4: 4<br>
Should be 4: 4<br>
