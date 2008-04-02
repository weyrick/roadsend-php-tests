--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000882.php (converted from Roadsend suite)
--FILE--
 problem with using @ to disable errors
<?php
/* Intentional file error */
$my_file = @file ('non_existent_file') or
    die ("Failed opening file: error was '$php_errormsg'");

// this works for any expression, not just functions:
$value = @$cache[$key]; 
// will not issue a notice if the index $key doesn't exist.

?>
--EXPECT--
 problem with using @ to disable errors
Failed opening file: error was ''