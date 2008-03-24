--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001092.php (converted from Roadsend suite)
--FILE--
0001092 able to override builtin function 'error'

Note: This test only produces a warning, and then only when compiled.
<?

function error($msg) {
	echo "error, your keyboard is one firE!!!!!!!\n";
}

error('meep');

?>

--EXPECTF--
0001092 able to override builtin function 'error'

Note: This test only produces a warning, and then only when compiled.
error, your keyboard is one firE!!!!!!!
