--TEST--
/home/weyrick/pcc/tests/forlooptest.php (converted from Roadsend suite)
--FILE--
<?php
/* example 1 */

for ($i = 1; $i <= 10; $i++) {
  print "$i";
}

/* example 2 */

for ($i = 1;;$i++) {
  if ($i > 10) {
    break;
  }
  print $i;
}

/* example 3 */

12;

$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    print $i;
    $i++;
}


/* example 4 */

for ($i = 1; $i <= 10;  print $i, $i++);

?>
--EXPECT--
12345678910123456789101234567891012345678910