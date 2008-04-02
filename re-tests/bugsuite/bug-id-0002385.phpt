--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0002385.php (converted from Roadsend suite)
--FILE--
continue with parens

<?

for ($a=0; $a<5; $a++) {
  echo "a: $a\n";
  for ($b=0;$b<5; $b++) {
    echo "b: $b\n";
    if($b==3) {
      continue(2);
    }
  }
}
?>

and break with parens:

<?
for ($a=0; $a<5; $a++) {
  echo "a: $a\n";
  for ($b=0;$b<5; $b++) {
    echo "b: $b\n";
    if($b==3) {
      break(2);
    }
  }
}
?>


continue with a variable:

<?
$m = 2;
for ($a=0; $a<5; $a++) {
  echo "a: $a\n";
  for ($b=0;$b<5; $b++) {
    echo "b: $b\n";
    if($b==3) {
      continue($m);
    }
  }
}
?>


continue with a function call:

<?
function m() { return 2; }

for ($a=0; $a<5; $a++) {
  echo "a: $a\n";
  for ($b=0;$b<5; $b++) {
    echo "b: $b\n";
    if($b==3) {
      continue m();
    }
  }
}
?>


break with a function call:

<?
function n() { return 2; }

for ($a=0; $a<5; $a++) {
  echo "a: $a\n";
  for ($b=0;$b<5; $b++) {
    echo "b: $b\n";
    if($b==3) {
      break n();
    }
  }
}
?>
--EXPECT--
continue with parens

a: 0
b: 0
b: 1
b: 2
b: 3
a: 1
b: 0
b: 1
b: 2
b: 3
a: 2
b: 0
b: 1
b: 2
b: 3
a: 3
b: 0
b: 1
b: 2
b: 3
a: 4
b: 0
b: 1
b: 2
b: 3

and break with parens:

a: 0
b: 0
b: 1
b: 2
b: 3


continue with a variable:

a: 0
b: 0
b: 1
b: 2
b: 3
a: 1
b: 0
b: 1
b: 2
b: 3
a: 2
b: 0
b: 1
b: 2
b: 3
a: 3
b: 0
b: 1
b: 2
b: 3
a: 4
b: 0
b: 1
b: 2
b: 3


continue with a function call:

a: 0
b: 0
b: 1
b: 2
b: 3
a: 1
b: 0
b: 1
b: 2
b: 3
a: 2
b: 0
b: 1
b: 2
b: 3
a: 3
b: 0
b: 1
b: 2
b: 3
a: 4
b: 0
b: 1
b: 2
b: 3


break with a function call:

a: 0
b: 0
b: 1
b: 2
b: 3
