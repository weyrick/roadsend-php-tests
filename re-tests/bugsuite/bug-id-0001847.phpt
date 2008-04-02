--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001847.php (converted from Roadsend suite)
--FILE--
bigloo type error from pcc

Description 	pcc gives the following warning:

Type error -- `struct' expected, `nil' provided

when trying to compile the following snipet of code:

<?
function foo() {
$bar[1];
}
?>
--EXPECT--
bigloo type error from pcc

Description 	pcc gives the following warning:

Type error -- `struct' expected, `nil' provided

when trying to compile the following snipet of code:

