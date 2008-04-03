--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001052.php (converted from Roadsend suite)
--FILE--
<?php


echo "1 file is ".__FILE__."\n";
include('1052-2.inc');
echo "1 file is ".__FILE__."\n";

sayhi3();

$a = new aclass();
$a->afunc();

?>
--EXPECT--
1 file is /home/weyrick/workspace/pcc/bugs/tests/bug-id-0001052.php
2 file is /home/weyrick/workspace/pcc/bugs/tests/1052-2.inc
3 file is /home/weyrick/workspace/pcc/bugs/tests/1052-3.inc
2 file is /home/weyrick/workspace/pcc/bugs/tests/1052-2.inc
1 file is /home/weyrick/workspace/pcc/bugs/tests/bug-id-0001052.php
3 hi and i'm in /home/weyrick/workspace/pcc/bugs/tests/1052-3.inc
2 and i'm in /home/weyrick/workspace/pcc/bugs/tests/1052-2.inc
