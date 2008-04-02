--TEST--
/home/weyrick/pcc/tests/globals.php (converted from Roadsend suite)
--FILE--
<?php

$foo = "this is variable 'foo'";

$bar = 12;

echo "foo: $foo\n";
echo "bar: $bar\n";

funofoneglobal();

echo "foo: $foo\n";
echo "bar: $bar\n";

funoftwoglobals();

echo "foo: $foo\n";
echo "bar: $bar\n";


function funofoneglobal()
{
  global $foo;

  echo "in funofoneglobal, foo is $foo\n";
}

function funoftwoglobals()
{
  global $foo, $bar;

  echo "in funoftwoglobals, foo is $foo\n";
  echo "in funoftwoglobals, bar is $bar\n";

  $foo = 8;
  $bar = $foo + $bar; 

  echo "in funoftwoglobals, foo becomes $foo\n";
  echo "in funoftwoglobals, bar becomes $bar\n";
}

?>
--EXPECT--
foo: this is variable 'foo'
bar: 12
in funofoneglobal, foo is this is variable 'foo'
foo: this is variable 'foo'
bar: 12
in funoftwoglobals, foo is this is variable 'foo'
in funoftwoglobals, bar is 12
in funoftwoglobals, foo becomes 8
in funoftwoglobals, bar becomes 20
foo: 8
bar: 20
