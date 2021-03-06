--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001127.php (converted from Roadsend suite)
--FILE--
<?php

for ($x = 0, $count= 0; $x < 200; $x++) {
    $x2 = (int) exp(log($x));
    // e ^ log(x) should be close in range to x
    if (($x2 < ($x + 2)) && ($x2 > ($x - 2))) {
        $count++;
    } else {
        print "$x : $x2\n";
    }
}

print $count . "\n";

// Now test the base form of log
for ($base = 2; $base < 11; $base++) {
    for ($x = 0, $count= 0; $x < 50; $x++) {
        $x2 = (int) pow($base, log($x, $base));
        // base ^ log(x) should be close in range to x
        if (($x2 < ($x + 2)) && ($x2 > ($x - 2))) {
            $count++;
        } else {
            print "base $base: $x : $x2\n";
        }
    }
    print $count . "\n";
}

?>
--EXPECT--
200
50
50
50
50
50
50
50
50
50
