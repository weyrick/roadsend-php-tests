--TEST--
/home/weyrick/pcc/tests/retval-funcs.php (converted from Roadsend suite)
--FILE--
<?

// we do some optimizing when return values don't appear to be used
// make sure it's working right!

function f() { return 5; }

function f2() { return false; }

f();
$a = f();
echo "$a\n";
echo f();
var_dump(f());

if (f() == 5) {
    f();
    echo "yes\n";
}
else {
    f();
    echo "no\n";
}

if (f2()) {
    f();
    echo "yes\n";
}
else {
    f();
    echo "no\n";
}

for ($i = f(); $i <= f(); $i++) {
    echo f();
    f();
}

try {
    f();
    echo f();
}
catch (Exception $e) {
    f();
}

switch (f()) {
case 5:
    echo "yes\n";
default:
    f();
    echo f();
}

foreach (array(1,2,3) as $o) {
    f();
}

?>

--EXPECTF--
5
5int(5)
yes
no
55yes
5