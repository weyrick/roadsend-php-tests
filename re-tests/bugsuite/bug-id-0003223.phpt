--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003223.php (converted from Roadsend suite)
--FILE--
<?php
sizeof("Asdf"); //XXX force php-std to load
function afun() {
    $str .= 'zoot';
    eval('$lastiteration = sizeof(' . $str . ') - 1;');
    echo "lastiteration is $lastiteration\n";
}
afun();

?>
--EXPECTF--
lastiteration is 0
