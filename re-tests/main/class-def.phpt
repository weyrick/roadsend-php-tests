--TEST--
test declaration of classes when the base class is in an include file
--FILE--
<?php

require("class-def.inc");

class subclass extends included_base_class {
    function go() {
        echo "$this->foo\n";
    }
}

$a = new subclass();
$a->go();

?>
--EXPECT--
a-ok
