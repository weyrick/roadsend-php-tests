--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001939.php (converted from Roadsend suite)
--FILE--
 When trying to compile:

<?
$blah = array('a'=>'b','c'=>'d','e'=>'f','g'=>'h','i'=>'j');

foreach($blah as $key => $value) {
  $$key =& $blah[$key];
}

echo "$a\n";

?>

I get an error



<?php

$a = 3;
$foo = "bar";
$$foo =& $a;
$bar = 4;
echo "$a\n";
echo "$bar\n";


$b = 3;
$foo = "zot";
$$foo =& $b;
$$foo = 4;
echo "$b\n";
echo $$foo . "\n";

echo "-----\n";

function foo() {
$a = 3;
$foo = "bar";
$$foo =& $a;
$bar = 4;
echo "$a\n";
echo "$bar\n";


$b = 3;
$foo = "zot";
$$foo =& $b;
$$foo = 4;
echo "$b\n";
echo $$foo . "\n";
}
foo();
?>
--EXPECTF--
 When trying to compile:

b

I get an error



4
4
4
4
-----
4
4
4
4
