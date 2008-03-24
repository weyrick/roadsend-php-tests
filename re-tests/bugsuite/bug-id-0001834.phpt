--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001834.php (converted from Roadsend suite)
--FILE--
doesn't escape curly bracket right in front of a var inside double quotes

if a literal string contains a curly bracket followed by a variable and
the curly bracket is escaped (so it's not part of the variable) pcc pukes on the next character after the close curly bracket.

<?
$foo = "problem";
echo "this is a \{$foo}\n";
?>

--EXPECTF--
doesn't escape curly bracket right in front of a var inside double quotes

if a literal string contains a curly bracket followed by a variable and
the curly bracket is escaped (so it's not part of the variable) pcc pukes on the next character after the close curly bracket.

this is a \{problem}
