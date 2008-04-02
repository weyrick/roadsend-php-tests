--TEST--
/home/weyrick/pcc/tests/hash.php (converted from Roadsend suite)
--FILE--
<?php
$n = ($argc == 2) ? $argv[1] : 100;
//print "$n\n";
for ($i = 1; $i <= $n; $i++) {
    $X[dechex($i)] = $i;
}
//print "$n\n";
//print "$i\n";
//print "$X\n";
for ($i = $n; $i > 0; $i--) {
  //  print "wibble $i";
  //  print "$X[$i]\n";
  if ($X[$i]) { /* print "wobble"; */ $c++; }
}

print "$c\n";
var_dump($X);

?>


TEST things that can't be in hashes

<?php

class aclass {}
$anobj = new aclass();
@$ahash[$anobj] = 12;
var_dump($ahash);

@$ahash[$ahash] = 42;
var_dump($ahash);

//NULL becomes the empty string 
$ahash[NULL] = 19;
var_dump($ahash);

?>

--EXPECT--
64
array(100) {
  [1]=>
  int(1)
  [2]=>
  int(2)
  [3]=>
  int(3)
  [4]=>
  int(4)
  [5]=>
  int(5)
  [6]=>
  int(6)
  [7]=>
  int(7)
  [8]=>
  int(8)
  [9]=>
  int(9)
  ["a"]=>
  int(10)
  ["b"]=>
  int(11)
  ["c"]=>
  int(12)
  ["d"]=>
  int(13)
  ["e"]=>
  int(14)
  ["f"]=>
  int(15)
  [10]=>
  int(16)
  [11]=>
  int(17)
  [12]=>
  int(18)
  [13]=>
  int(19)
  [14]=>
  int(20)
  [15]=>
  int(21)
  [16]=>
  int(22)
  [17]=>
  int(23)
  [18]=>
  int(24)
  [19]=>
  int(25)
  ["1a"]=>
  int(26)
  ["1b"]=>
  int(27)
  ["1c"]=>
  int(28)
  ["1d"]=>
  int(29)
  ["1e"]=>
  int(30)
  ["1f"]=>
  int(31)
  [20]=>
  int(32)
  [21]=>
  int(33)
  [22]=>
  int(34)
  [23]=>
  int(35)
  [24]=>
  int(36)
  [25]=>
  int(37)
  [26]=>
  int(38)
  [27]=>
  int(39)
  [28]=>
  int(40)
  [29]=>
  int(41)
  ["2a"]=>
  int(42)
  ["2b"]=>
  int(43)
  ["2c"]=>
  int(44)
  ["2d"]=>
  int(45)
  ["2e"]=>
  int(46)
  ["2f"]=>
  int(47)
  [30]=>
  int(48)
  [31]=>
  int(49)
  [32]=>
  int(50)
  [33]=>
  int(51)
  [34]=>
  int(52)
  [35]=>
  int(53)
  [36]=>
  int(54)
  [37]=>
  int(55)
  [38]=>
  int(56)
  [39]=>
  int(57)
  ["3a"]=>
  int(58)
  ["3b"]=>
  int(59)
  ["3c"]=>
  int(60)
  ["3d"]=>
  int(61)
  ["3e"]=>
  int(62)
  ["3f"]=>
  int(63)
  [40]=>
  int(64)
  [41]=>
  int(65)
  [42]=>
  int(66)
  [43]=>
  int(67)
  [44]=>
  int(68)
  [45]=>
  int(69)
  [46]=>
  int(70)
  [47]=>
  int(71)
  [48]=>
  int(72)
  [49]=>
  int(73)
  ["4a"]=>
  int(74)
  ["4b"]=>
  int(75)
  ["4c"]=>
  int(76)
  ["4d"]=>
  int(77)
  ["4e"]=>
  int(78)
  ["4f"]=>
  int(79)
  [50]=>
  int(80)
  [51]=>
  int(81)
  [52]=>
  int(82)
  [53]=>
  int(83)
  [54]=>
  int(84)
  [55]=>
  int(85)
  [56]=>
  int(86)
  [57]=>
  int(87)
  [58]=>
  int(88)
  [59]=>
  int(89)
  ["5a"]=>
  int(90)
  ["5b"]=>
  int(91)
  ["5c"]=>
  int(92)
  ["5d"]=>
  int(93)
  ["5e"]=>
  int(94)
  ["5f"]=>
  int(95)
  [60]=>
  int(96)
  [61]=>
  int(97)
  [62]=>
  int(98)
  [63]=>
  int(99)
  [64]=>
  int(100)
}


TEST things that can't be in hashes

array(0) {
}
array(0) {
}
array(1) {
  [""]=>
  int(19)
}

