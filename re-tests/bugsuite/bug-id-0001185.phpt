--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001185.php (converted from Roadsend suite)
--FILE--
0001185 here doc escaping

php escapes \\ to \ within heredocs

<?php
$test = <<< HERE
this is a test
\\\\ \\\\ \\\\\\ \\
\a\\b\c\d\\e\f\g
last line
HERE;

echo $test;

?>

--EXPECTF--
0001185 here doc escaping

php escapes \\ to \ within heredocs

this is a test
\\ \\ \\\ \
\a\b\c\d\e\g
last line