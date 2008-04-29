--TEST--
errmsg: cannot redeclare (method)
--FILE--
<?php

class test {

	function foo() {}
	function foo() {}

}

echo "Done\n";
?>
--EXPECTF--	
Fatal error: Cannot redeclare test::foo() in %s on line %d
--COMPILER:BUILDFAILEXPECTF--
Error: Compilation failed -- Error: Cannot redeclare test::foo() in %s on line %d
%a
