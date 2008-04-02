--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001843.php (converted from Roadsend suite)
--FILE--
 print_r doesn't print the fields in objects, it just prints
"Object":

<?php

class foo {
var $zork = "Asdf";
var $bar = "wing";
}

$a = array(new foo(), new foo(), "asdf" => new foo());

print_r($a);

?>
--EXPECT--
 print_r doesn't print the fields in objects, it just prints
"Object":

Array
(
    [0] => foo Object
        (
            [zork] => Asdf
            [bar] => wing
        )

    [1] => foo Object
        (
            [zork] => Asdf
            [bar] => wing
        )

    [asdf] => foo Object
        (
            [zork] => Asdf
            [bar] => wing
        )

)
