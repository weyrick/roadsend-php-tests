--TEST--
/home/weyrick/pcc/tests/eachlist.php (converted from Roadsend suite)
--FILE--
<?php



$foo = array ("bob", "fred", "jussi", "jouni", "egon", "marliese");


print_r($foo);

$bar = each ($foo);
print_r($bar);

$bar = each ($foo);
print_r($bar);

$bar = each ($foo);
print_r($bar);


list($zot, $zing) = each ($foo);
echo "zot $zot zing $zing\n";

print_r(array ("a", "wibble" => "b", 1 => "c"));

list ($a, $b, $c) = array ("a", "wibble" => "b", 1 => "c");
echo "a :$a: b :$b: c :$c:\n"; 

list ($a, $b, $c) = array ("foo" => "a", "bar" => "b", "wibble" => "c");
echo "a :$a: b :$b: c :$c:\n"; 

$foo = list ($a, $b, $c) = array (0 => "a", 2 => "b", 3 => "c");
echo "a :$a: b :$b: c :$c:\n"; 

echo "foo $foo\n";
#yes, folks, it _is_ really that bad.

$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");

$key = 1;
while ($key !== NULL) {
list($key, $val) = each($foo);
echo "$key => $val\n";
next($foo);
echo "current is:\n";
var_dump(current($foo));
}


?>



--EXPECTF--
Array
(
    [0] => bob
    [1] => fred
    [2] => jussi
    [3] => jouni
    [4] => egon
    [5] => marliese
)
Array
(
    [1] => bob
    [value] => bob
    [0] => 0
    [key] => 0
)
Array
(
    [1] => fred
    [value] => fred
    [0] => 1
    [key] => 1
)
Array
(
    [1] => jussi
    [value] => jussi
    [0] => 2
    [key] => 2
)
zot 3 zing jouni
Array
(
    [0] => a
    [wibble] => b
    [1] => c
)
a :a: b :c: c ::
a :: b :: c ::
a :a: b :: c :b:
foo Array
0 => bob
current is:
string(5) "jussi"
2 => jussi
current is:
string(4) "egon"
4 => egon
current is:
bool(false)
 => 
current is:
bool(false)


