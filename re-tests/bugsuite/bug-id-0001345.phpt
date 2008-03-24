--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001345.php (converted from Roadsend suite)
--FILE--
0001345 parse error on class with method 'string'

<?

class aclass {

	function string($string) {
		echo "your silly string was $string\n";
	}

}

$a = new aclass();
$a->string('a phony phalacy');

?>



--EXPECTF--
0001345 parse error on class with method 'string'

your silly string was a phony phalacy


