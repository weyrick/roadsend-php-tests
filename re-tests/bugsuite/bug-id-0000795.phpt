--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000795.php (converted from Roadsend suite)
--FILE--
0000795 parse error on default function argument as a negative number

<?php

function functest($a,$b = -1) {
return $b;
}

echo functest('1');


?>

--EXPECTF--
0000795 parse error on default function argument as a negative number

-1