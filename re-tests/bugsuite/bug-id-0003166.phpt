--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0003166.php (converted from Roadsend suite)
--FILE--
foreach an object like an array
<?

class foo {
    var $a=1;
    var $b=2;
    var $c=3;
}

$f = new foo();

foreach ($f as $k => $v) {
    echo "$k => $v\n";
}

?>
--EXPECTF--
foreach an object like an array
a => 1
b => 2
c => 3
