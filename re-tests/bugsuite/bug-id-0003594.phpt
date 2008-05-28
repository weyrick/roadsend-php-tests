--TEST--
bug-id-0003594.php: test unset on references
--FILE--
<?php

	$a='A';						
	$b=&$a;
	unset($a);
	var_dump($a);			// Should 'A', is NULL
	var_dump($b);			// Should 'A', is NULL
	
?>
--EXPECT--
NULL
string(1) "A"
