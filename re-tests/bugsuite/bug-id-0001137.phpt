--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001137.php (converted from Roadsend suite)
--FILE--
<?php
$input = array("foo", "bar", "baz", "grldsajkopallkjasd");
foreach($input AS $i) {
    echo crc32($i)."\n";
    printf("%d - %u\n", crc32($i), crc32($i));
}
?>
--EXPECT:32--
-1938594527
-1938594527 - 2356372769
1996459178
1996459178 - 1996459178
2015626392
2015626392 - 2015626392
824412087
824412087 - 824412087
--EXPECT:64--
2356372769
2356372769 - 2356372769
1996459178
1996459178 - 1996459178
2015626392
2015626392 - 2015626392
824412087
824412087 - 824412087
