--TEST--
/home/weyrick/pcc/tests/remarkably_broken.php (converted from Roadsend suite)
--FILE--
<?php

$foo = "zippo";
$foo['zot'] = "bar";

echo("$foo\n");
echo("$foo[zot]\n");

$foo = "foo";
$foo++;

print "$foo\n";

function zammo($foo) {
  echo($foo . 2 + 3);
}

zammo("bar");

print "\n";

for ($i = 1; $i <= 10;  print $i, $i++);

print "\n";


print $foo;

print "\n";
?>
--EXPECT--
bippo
b
fop
3
12345678910
fop
