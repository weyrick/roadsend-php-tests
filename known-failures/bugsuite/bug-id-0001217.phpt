--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001217.php (converted from Roadsend suite)
--FILE--
<?

class m {
    var $a = 1;
    public function __toString() {
      return "[class ".__CLASS__."]";
    }
}

class o {
    var $c = 1;
    public function __toString() {
      return "[class ".__CLASS__."]";
    }
}

$c =& new m();
$d = new o();

echo "grimble: ". ($c == $c) . "\n";
echo "grimble: ". ($d == $d) . "\n";
echo "grumble: ". ($c === $c) . "\n";
echo "grumble: ". ($d === $d) . "\n";


$a = array(1,
           "20",
           100,
           "200",
           array('lo',true, 23, array(1,2), 7=>66),
           true,
           "0f2fj",
           $d,
           array(3),
           "testing",
           NULL,
           array(1,2,3),
           $c,
           1.23,
           "4.31");

$b = array(89,
           "a string",
           "12",
           NULL,
           array(3),
           9321,
           "802",
           $c,
           1.23,
           "00v2nc8",
           array(4,"hi", "blah"=>23, array(1,2)),
           false,
           $d,
           "this is a string",
           "4.31");

foreach ($a as $v1) {
  $i++;
  $j=0;
    foreach ($b as $v2) {
      $j++;
        echo "$i,$j: a is [$v1] and is ".gettype($v1)."\n";
        echo "$i,$j: b is [$v2] and is ".gettype($v2)."\n";
        if (is_string($v1) && is_numeric($v1))
            echo "$i,$j: a is a string and is numeric\n";
        if (is_string($v2) && is_numeric($v2))
            echo "$i,$j: b is a string and is numeric\n";
        echo "$i,$j: a == b: ".($v1 == $v2)."\n";
	print_r($v1);
	print_r($v2);
        echo "$i,$j: a === b: ".($v1 === $v2)."\n";
        echo "$i,$j: a < b: ".($v1 < $v2)."\n";
        echo "$i,$j: a > b: ".($v1 > $v2)."\n";
        echo "$i,$j: a <= b: ".($v1 <= $v2)."\n";
        echo "$i,$j: a >= b: ".($v1 >= $v2)."\n";
    }
}

?>
--EXPECT--
grimble: 1
grimble: 1
grumble: 1
grumble: 1
1,1: a is [1] and is integer
1,1: b is [89] and is integer
1,1: a == b: 
1891,1: a === b: 
1,1: a < b: 1
1,1: a > b: 
1,1: a <= b: 1
1,1: a >= b: 
1,2: a is [1] and is integer
1,2: b is [a string] and is string
1,2: a == b: 
1a string1,2: a === b: 
1,2: a < b: 
1,2: a > b: 1
1,2: a <= b: 
1,2: a >= b: 1
1,3: a is [1] and is integer
1,3: b is [12] and is string
1,3: b is a string and is numeric
1,3: a == b: 
1121,3: a === b: 
1,3: a < b: 1
1,3: a > b: 
1,3: a <= b: 1
1,3: a >= b: 
1,4: a is [1] and is integer
1,4: b is [] and is NULL
1,4: a == b: 
11,4: a === b: 
1,4: a < b: 
1,4: a > b: 1
1,4: a <= b: 
1,4: a >= b: 1
1,5: a is [1] and is integer
1,5: b is [Array] and is array
1,5: a == b: 
1Array
(
    [0] => 3
)
1,5: a === b: 
1,5: a < b: 1
1,5: a > b: 
1,5: a <= b: 1
1,5: a >= b: 
1,6: a is [1] and is integer
1,6: b is [9321] and is integer
1,6: a == b: 
193211,6: a === b: 
1,6: a < b: 1
1,6: a > b: 
1,6: a <= b: 1
1,6: a >= b: 
1,7: a is [1] and is integer
1,7: b is [802] and is string
1,7: b is a string and is numeric
1,7: a == b: 
18021,7: a === b: 
1,7: a < b: 1
1,7: a > b: 
1,7: a <= b: 1
1,7: a >= b: 
1,8: a is [1] and is integer
1,8: b is [[class m]] and is object
1,8: a == b: 1
1m Object
(
    [a] => 1
)
1,8: a === b: 
1,8: a < b: 
1,8: a > b: 
1,8: a <= b: 1
1,8: a >= b: 1
1,9: a is [1] and is integer
1,9: b is [1.23] and is double
1,9: a == b: 
11.231,9: a === b: 
1,9: a < b: 1
1,9: a > b: 
1,9: a <= b: 1
1,9: a >= b: 
1,10: a is [1] and is integer
1,10: b is [00v2nc8] and is string
1,10: a == b: 
100v2nc81,10: a === b: 
1,10: a < b: 
1,10: a > b: 1
1,10: a <= b: 
1,10: a >= b: 1
1,11: a is [1] and is integer
1,11: b is [Array] and is array
1,11: a == b: 
1Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
1,11: a === b: 
1,11: a < b: 1
1,11: a > b: 
1,11: a <= b: 1
1,11: a >= b: 
1,12: a is [1] and is integer
1,12: b is [] and is boolean
1,12: a == b: 
11,12: a === b: 
1,12: a < b: 
1,12: a > b: 1
1,12: a <= b: 
1,12: a >= b: 1
1,13: a is [1] and is integer
1,13: b is [[class o]] and is object
1,13: a == b: 1
1o Object
(
    [c] => 1
)
1,13: a === b: 
1,13: a < b: 
1,13: a > b: 
1,13: a <= b: 1
1,13: a >= b: 1
1,14: a is [1] and is integer
1,14: b is [this is a string] and is string
1,14: a == b: 
1this is a string1,14: a === b: 
1,14: a < b: 
1,14: a > b: 1
1,14: a <= b: 
1,14: a >= b: 1
1,15: a is [1] and is integer
1,15: b is [4.31] and is string
1,15: b is a string and is numeric
1,15: a == b: 
14.311,15: a === b: 
1,15: a < b: 1
1,15: a > b: 
1,15: a <= b: 1
1,15: a >= b: 
2,1: a is [20] and is string
2,1: b is [89] and is integer
2,1: a is a string and is numeric
2,1: a == b: 
20892,1: a === b: 
2,1: a < b: 1
2,1: a > b: 
2,1: a <= b: 1
2,1: a >= b: 
2,2: a is [20] and is string
2,2: b is [a string] and is string
2,2: a is a string and is numeric
2,2: a == b: 
20a string2,2: a === b: 
2,2: a < b: 1
2,2: a > b: 
2,2: a <= b: 1
2,2: a >= b: 
2,3: a is [20] and is string
2,3: b is [12] and is string
2,3: a is a string and is numeric
2,3: b is a string and is numeric
2,3: a == b: 
20122,3: a === b: 
2,3: a < b: 
2,3: a > b: 1
2,3: a <= b: 
2,3: a >= b: 1
2,4: a is [20] and is string
2,4: b is [] and is NULL
2,4: a is a string and is numeric
2,4: a == b: 
202,4: a === b: 
2,4: a < b: 
2,4: a > b: 1
2,4: a <= b: 
2,4: a >= b: 1
2,5: a is [20] and is string
2,5: b is [Array] and is array
2,5: a is a string and is numeric
2,5: a == b: 
20Array
(
    [0] => 3
)
2,5: a === b: 
2,5: a < b: 1
2,5: a > b: 
2,5: a <= b: 1
2,5: a >= b: 
2,6: a is [20] and is string
2,6: b is [9321] and is integer
2,6: a is a string and is numeric
2,6: a == b: 
2093212,6: a === b: 
2,6: a < b: 1
2,6: a > b: 
2,6: a <= b: 1
2,6: a >= b: 
2,7: a is [20] and is string
2,7: b is [802] and is string
2,7: a is a string and is numeric
2,7: b is a string and is numeric
2,7: a == b: 
208022,7: a === b: 
2,7: a < b: 1
2,7: a > b: 
2,7: a <= b: 1
2,7: a >= b: 
2,8: a is [20] and is string
2,8: b is [[class m]] and is object
2,8: a is a string and is numeric
2,8: a == b: 
20m Object
(
    [a] => 1
)
2,8: a === b: 
2,8: a < b: 1
2,8: a > b: 
2,8: a <= b: 1
2,8: a >= b: 
2,9: a is [20] and is string
2,9: b is [1.23] and is double
2,9: a is a string and is numeric
2,9: a == b: 
201.232,9: a === b: 
2,9: a < b: 
2,9: a > b: 1
2,9: a <= b: 
2,9: a >= b: 1
2,10: a is [20] and is string
2,10: b is [00v2nc8] and is string
2,10: a is a string and is numeric
2,10: a == b: 
2000v2nc82,10: a === b: 
2,10: a < b: 
2,10: a > b: 1
2,10: a <= b: 
2,10: a >= b: 1
2,11: a is [20] and is string
2,11: b is [Array] and is array
2,11: a is a string and is numeric
2,11: a == b: 
20Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
2,11: a === b: 
2,11: a < b: 1
2,11: a > b: 
2,11: a <= b: 1
2,11: a >= b: 
2,12: a is [20] and is string
2,12: b is [] and is boolean
2,12: a is a string and is numeric
2,12: a == b: 
202,12: a === b: 
2,12: a < b: 
2,12: a > b: 1
2,12: a <= b: 
2,12: a >= b: 1
2,13: a is [20] and is string
2,13: b is [[class o]] and is object
2,13: a is a string and is numeric
2,13: a == b: 
20o Object
(
    [c] => 1
)
2,13: a === b: 
2,13: a < b: 1
2,13: a > b: 
2,13: a <= b: 1
2,13: a >= b: 
2,14: a is [20] and is string
2,14: b is [this is a string] and is string
2,14: a is a string and is numeric
2,14: a == b: 
20this is a string2,14: a === b: 
2,14: a < b: 1
2,14: a > b: 
2,14: a <= b: 1
2,14: a >= b: 
2,15: a is [20] and is string
2,15: b is [4.31] and is string
2,15: a is a string and is numeric
2,15: b is a string and is numeric
2,15: a == b: 
204.312,15: a === b: 
2,15: a < b: 
2,15: a > b: 1
2,15: a <= b: 
2,15: a >= b: 1
3,1: a is [100] and is integer
3,1: b is [89] and is integer
3,1: a == b: 
100893,1: a === b: 
3,1: a < b: 
3,1: a > b: 1
3,1: a <= b: 
3,1: a >= b: 1
3,2: a is [100] and is integer
3,2: b is [a string] and is string
3,2: a == b: 
100a string3,2: a === b: 
3,2: a < b: 
3,2: a > b: 1
3,2: a <= b: 
3,2: a >= b: 1
3,3: a is [100] and is integer
3,3: b is [12] and is string
3,3: b is a string and is numeric
3,3: a == b: 
100123,3: a === b: 
3,3: a < b: 
3,3: a > b: 1
3,3: a <= b: 
3,3: a >= b: 1
3,4: a is [100] and is integer
3,4: b is [] and is NULL
3,4: a == b: 
1003,4: a === b: 
3,4: a < b: 
3,4: a > b: 1
3,4: a <= b: 
3,4: a >= b: 1
3,5: a is [100] and is integer
3,5: b is [Array] and is array
3,5: a == b: 
100Array
(
    [0] => 3
)
3,5: a === b: 
3,5: a < b: 1
3,5: a > b: 
3,5: a <= b: 1
3,5: a >= b: 
3,6: a is [100] and is integer
3,6: b is [9321] and is integer
3,6: a == b: 
10093213,6: a === b: 
3,6: a < b: 1
3,6: a > b: 
3,6: a <= b: 1
3,6: a >= b: 
3,7: a is [100] and is integer
3,7: b is [802] and is string
3,7: b is a string and is numeric
3,7: a == b: 
1008023,7: a === b: 
3,7: a < b: 1
3,7: a > b: 
3,7: a <= b: 1
3,7: a >= b: 
3,8: a is [100] and is integer
3,8: b is [[class m]] and is object
3,8: a == b: 
100m Object
(
    [a] => 1
)
3,8: a === b: 
3,8: a < b: 
3,8: a > b: 1
3,8: a <= b: 
3,8: a >= b: 1
3,9: a is [100] and is integer
3,9: b is [1.23] and is double
3,9: a == b: 
1001.233,9: a === b: 
3,9: a < b: 
3,9: a > b: 1
3,9: a <= b: 
3,9: a >= b: 1
3,10: a is [100] and is integer
3,10: b is [00v2nc8] and is string
3,10: a == b: 
10000v2nc83,10: a === b: 
3,10: a < b: 
3,10: a > b: 1
3,10: a <= b: 
3,10: a >= b: 1
3,11: a is [100] and is integer
3,11: b is [Array] and is array
3,11: a == b: 
100Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
3,11: a === b: 
3,11: a < b: 1
3,11: a > b: 
3,11: a <= b: 1
3,11: a >= b: 
3,12: a is [100] and is integer
3,12: b is [] and is boolean
3,12: a == b: 
1003,12: a === b: 
3,12: a < b: 
3,12: a > b: 1
3,12: a <= b: 
3,12: a >= b: 1
3,13: a is [100] and is integer
3,13: b is [[class o]] and is object
3,13: a == b: 
100o Object
(
    [c] => 1
)
3,13: a === b: 
3,13: a < b: 
3,13: a > b: 1
3,13: a <= b: 
3,13: a >= b: 1
3,14: a is [100] and is integer
3,14: b is [this is a string] and is string
3,14: a == b: 
100this is a string3,14: a === b: 
3,14: a < b: 
3,14: a > b: 1
3,14: a <= b: 
3,14: a >= b: 1
3,15: a is [100] and is integer
3,15: b is [4.31] and is string
3,15: b is a string and is numeric
3,15: a == b: 
1004.313,15: a === b: 
3,15: a < b: 
3,15: a > b: 1
3,15: a <= b: 
3,15: a >= b: 1
4,1: a is [200] and is string
4,1: b is [89] and is integer
4,1: a is a string and is numeric
4,1: a == b: 
200894,1: a === b: 
4,1: a < b: 
4,1: a > b: 1
4,1: a <= b: 
4,1: a >= b: 1
4,2: a is [200] and is string
4,2: b is [a string] and is string
4,2: a is a string and is numeric
4,2: a == b: 
200a string4,2: a === b: 
4,2: a < b: 1
4,2: a > b: 
4,2: a <= b: 1
4,2: a >= b: 
4,3: a is [200] and is string
4,3: b is [12] and is string
4,3: a is a string and is numeric
4,3: b is a string and is numeric
4,3: a == b: 
200124,3: a === b: 
4,3: a < b: 
4,3: a > b: 1
4,3: a <= b: 
4,3: a >= b: 1
4,4: a is [200] and is string
4,4: b is [] and is NULL
4,4: a is a string and is numeric
4,4: a == b: 
2004,4: a === b: 
4,4: a < b: 
4,4: a > b: 1
4,4: a <= b: 
4,4: a >= b: 1
4,5: a is [200] and is string
4,5: b is [Array] and is array
4,5: a is a string and is numeric
4,5: a == b: 
200Array
(
    [0] => 3
)
4,5: a === b: 
4,5: a < b: 1
4,5: a > b: 
4,5: a <= b: 1
4,5: a >= b: 
4,6: a is [200] and is string
4,6: b is [9321] and is integer
4,6: a is a string and is numeric
4,6: a == b: 
20093214,6: a === b: 
4,6: a < b: 1
4,6: a > b: 
4,6: a <= b: 1
4,6: a >= b: 
4,7: a is [200] and is string
4,7: b is [802] and is string
4,7: a is a string and is numeric
4,7: b is a string and is numeric
4,7: a == b: 
2008024,7: a === b: 
4,7: a < b: 1
4,7: a > b: 
4,7: a <= b: 1
4,7: a >= b: 
4,8: a is [200] and is string
4,8: b is [[class m]] and is object
4,8: a is a string and is numeric
4,8: a == b: 
200m Object
(
    [a] => 1
)
4,8: a === b: 
4,8: a < b: 1
4,8: a > b: 
4,8: a <= b: 1
4,8: a >= b: 
4,9: a is [200] and is string
4,9: b is [1.23] and is double
4,9: a is a string and is numeric
4,9: a == b: 
2001.234,9: a === b: 
4,9: a < b: 
4,9: a > b: 1
4,9: a <= b: 
4,9: a >= b: 1
4,10: a is [200] and is string
4,10: b is [00v2nc8] and is string
4,10: a is a string and is numeric
4,10: a == b: 
20000v2nc84,10: a === b: 
4,10: a < b: 
4,10: a > b: 1
4,10: a <= b: 
4,10: a >= b: 1
4,11: a is [200] and is string
4,11: b is [Array] and is array
4,11: a is a string and is numeric
4,11: a == b: 
200Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
4,11: a === b: 
4,11: a < b: 1
4,11: a > b: 
4,11: a <= b: 1
4,11: a >= b: 
4,12: a is [200] and is string
4,12: b is [] and is boolean
4,12: a is a string and is numeric
4,12: a == b: 
2004,12: a === b: 
4,12: a < b: 
4,12: a > b: 1
4,12: a <= b: 
4,12: a >= b: 1
4,13: a is [200] and is string
4,13: b is [[class o]] and is object
4,13: a is a string and is numeric
4,13: a == b: 
200o Object
(
    [c] => 1
)
4,13: a === b: 
4,13: a < b: 1
4,13: a > b: 
4,13: a <= b: 1
4,13: a >= b: 
4,14: a is [200] and is string
4,14: b is [this is a string] and is string
4,14: a is a string and is numeric
4,14: a == b: 
200this is a string4,14: a === b: 
4,14: a < b: 1
4,14: a > b: 
4,14: a <= b: 1
4,14: a >= b: 
4,15: a is [200] and is string
4,15: b is [4.31] and is string
4,15: a is a string and is numeric
4,15: b is a string and is numeric
4,15: a == b: 
2004.314,15: a === b: 
4,15: a < b: 
4,15: a > b: 1
4,15: a <= b: 
4,15: a >= b: 1
5,1: a is [Array] and is array
5,1: b is [89] and is integer
5,1: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
895,1: a === b: 
5,1: a < b: 
5,1: a > b: 1
5,1: a <= b: 
5,1: a >= b: 1
5,2: a is [Array] and is array
5,2: b is [a string] and is string
5,2: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
a string5,2: a === b: 
5,2: a < b: 
5,2: a > b: 1
5,2: a <= b: 
5,2: a >= b: 1
5,3: a is [Array] and is array
5,3: b is [12] and is string
5,3: b is a string and is numeric
5,3: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
125,3: a === b: 
5,3: a < b: 
5,3: a > b: 1
5,3: a <= b: 
5,3: a >= b: 1
5,4: a is [Array] and is array
5,4: b is [] and is NULL
5,4: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
5,4: a === b: 
5,4: a < b: 
5,4: a > b: 1
5,4: a <= b: 
5,4: a >= b: 1
5,5: a is [Array] and is array
5,5: b is [Array] and is array
5,5: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
Array
(
    [0] => 3
)
5,5: a === b: 
5,5: a < b: 
5,5: a > b: 1
5,5: a <= b: 
5,5: a >= b: 1
5,6: a is [Array] and is array
5,6: b is [9321] and is integer
5,6: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
93215,6: a === b: 
5,6: a < b: 
5,6: a > b: 1
5,6: a <= b: 
5,6: a >= b: 1
5,7: a is [Array] and is array
5,7: b is [802] and is string
5,7: b is a string and is numeric
5,7: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
8025,7: a === b: 
5,7: a < b: 
5,7: a > b: 1
5,7: a <= b: 
5,7: a >= b: 1
5,8: a is [Array] and is array
5,8: b is [[class m]] and is object
5,8: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
m Object
(
    [a] => 1
)
5,8: a === b: 
5,8: a < b: 1
5,8: a > b: 
5,8: a <= b: 1
5,8: a >= b: 
5,9: a is [Array] and is array
5,9: b is [1.23] and is double
5,9: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
1.235,9: a === b: 
5,9: a < b: 
5,9: a > b: 1
5,9: a <= b: 
5,9: a >= b: 1
5,10: a is [Array] and is array
5,10: b is [00v2nc8] and is string
5,10: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
00v2nc85,10: a === b: 
5,10: a < b: 
5,10: a > b: 1
5,10: a <= b: 
5,10: a >= b: 1
5,11: a is [Array] and is array
5,11: b is [Array] and is array
5,11: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
5,11: a === b: 
5,11: a < b: 
5,11: a > b: 1
5,11: a <= b: 
5,11: a >= b: 1
5,12: a is [Array] and is array
5,12: b is [] and is boolean
5,12: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
5,12: a === b: 
5,12: a < b: 
5,12: a > b: 1
5,12: a <= b: 
5,12: a >= b: 1
5,13: a is [Array] and is array
5,13: b is [[class o]] and is object
5,13: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
o Object
(
    [c] => 1
)
5,13: a === b: 
5,13: a < b: 1
5,13: a > b: 
5,13: a <= b: 1
5,13: a >= b: 
5,14: a is [Array] and is array
5,14: b is [this is a string] and is string
5,14: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
this is a string5,14: a === b: 
5,14: a < b: 
5,14: a > b: 1
5,14: a <= b: 
5,14: a >= b: 1
5,15: a is [Array] and is array
5,15: b is [4.31] and is string
5,15: b is a string and is numeric
5,15: a == b: 
Array
(
    [0] => lo
    [1] => 1
    [2] => 23
    [3] => Array
        (
            [0] => 1
            [1] => 2
        )

    [7] => 66
)
4.315,15: a === b: 
5,15: a < b: 
5,15: a > b: 1
5,15: a <= b: 
5,15: a >= b: 1
6,1: a is [1] and is boolean
6,1: b is [89] and is integer
6,1: a == b: 1
1896,1: a === b: 
6,1: a < b: 
6,1: a > b: 
6,1: a <= b: 1
6,1: a >= b: 1
6,2: a is [1] and is boolean
6,2: b is [a string] and is string
6,2: a == b: 1
1a string6,2: a === b: 
6,2: a < b: 
6,2: a > b: 
6,2: a <= b: 1
6,2: a >= b: 1
6,3: a is [1] and is boolean
6,3: b is [12] and is string
6,3: b is a string and is numeric
6,3: a == b: 1
1126,3: a === b: 
6,3: a < b: 
6,3: a > b: 
6,3: a <= b: 1
6,3: a >= b: 1
6,4: a is [1] and is boolean
6,4: b is [] and is NULL
6,4: a == b: 
16,4: a === b: 
6,4: a < b: 
6,4: a > b: 1
6,4: a <= b: 
6,4: a >= b: 1
6,5: a is [1] and is boolean
6,5: b is [Array] and is array
6,5: a == b: 1
1Array
(
    [0] => 3
)
6,5: a === b: 
6,5: a < b: 
6,5: a > b: 
6,5: a <= b: 1
6,5: a >= b: 1
6,6: a is [1] and is boolean
6,6: b is [9321] and is integer
6,6: a == b: 1
193216,6: a === b: 
6,6: a < b: 
6,6: a > b: 
6,6: a <= b: 1
6,6: a >= b: 1
6,7: a is [1] and is boolean
6,7: b is [802] and is string
6,7: b is a string and is numeric
6,7: a == b: 1
18026,7: a === b: 
6,7: a < b: 
6,7: a > b: 
6,7: a <= b: 1
6,7: a >= b: 1
6,8: a is [1] and is boolean
6,8: b is [[class m]] and is object
6,8: a == b: 1
1m Object
(
    [a] => 1
)
6,8: a === b: 
6,8: a < b: 
6,8: a > b: 
6,8: a <= b: 1
6,8: a >= b: 1
6,9: a is [1] and is boolean
6,9: b is [1.23] and is double
6,9: a == b: 1
11.236,9: a === b: 
6,9: a < b: 
6,9: a > b: 
6,9: a <= b: 1
6,9: a >= b: 1
6,10: a is [1] and is boolean
6,10: b is [00v2nc8] and is string
6,10: a == b: 1
100v2nc86,10: a === b: 
6,10: a < b: 
6,10: a > b: 
6,10: a <= b: 1
6,10: a >= b: 1
6,11: a is [1] and is boolean
6,11: b is [Array] and is array
6,11: a == b: 1
1Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
6,11: a === b: 
6,11: a < b: 
6,11: a > b: 
6,11: a <= b: 1
6,11: a >= b: 1
6,12: a is [1] and is boolean
6,12: b is [] and is boolean
6,12: a == b: 
16,12: a === b: 
6,12: a < b: 
6,12: a > b: 1
6,12: a <= b: 
6,12: a >= b: 1
6,13: a is [1] and is boolean
6,13: b is [[class o]] and is object
6,13: a == b: 1
1o Object
(
    [c] => 1
)
6,13: a === b: 
6,13: a < b: 
6,13: a > b: 
6,13: a <= b: 1
6,13: a >= b: 1
6,14: a is [1] and is boolean
6,14: b is [this is a string] and is string
6,14: a == b: 1
1this is a string6,14: a === b: 
6,14: a < b: 
6,14: a > b: 
6,14: a <= b: 1
6,14: a >= b: 1
6,15: a is [1] and is boolean
6,15: b is [4.31] and is string
6,15: b is a string and is numeric
6,15: a == b: 1
14.316,15: a === b: 
6,15: a < b: 
6,15: a > b: 
6,15: a <= b: 1
6,15: a >= b: 1
7,1: a is [0f2fj] and is string
7,1: b is [89] and is integer
7,1: a == b: 
0f2fj897,1: a === b: 
7,1: a < b: 1
7,1: a > b: 
7,1: a <= b: 1
7,1: a >= b: 
7,2: a is [0f2fj] and is string
7,2: b is [a string] and is string
7,2: a == b: 
0f2fja string7,2: a === b: 
7,2: a < b: 1
7,2: a > b: 
7,2: a <= b: 1
7,2: a >= b: 
7,3: a is [0f2fj] and is string
7,3: b is [12] and is string
7,3: b is a string and is numeric
7,3: a == b: 
0f2fj127,3: a === b: 
7,3: a < b: 1
7,3: a > b: 
7,3: a <= b: 1
7,3: a >= b: 
7,4: a is [0f2fj] and is string
7,4: b is [] and is NULL
7,4: a == b: 
0f2fj7,4: a === b: 
7,4: a < b: 
7,4: a > b: 1
7,4: a <= b: 
7,4: a >= b: 1
7,5: a is [0f2fj] and is string
7,5: b is [Array] and is array
7,5: a == b: 
0f2fjArray
(
    [0] => 3
)
7,5: a === b: 
7,5: a < b: 1
7,5: a > b: 
7,5: a <= b: 1
7,5: a >= b: 
7,6: a is [0f2fj] and is string
7,6: b is [9321] and is integer
7,6: a == b: 
0f2fj93217,6: a === b: 
7,6: a < b: 1
7,6: a > b: 
7,6: a <= b: 1
7,6: a >= b: 
7,7: a is [0f2fj] and is string
7,7: b is [802] and is string
7,7: b is a string and is numeric
7,7: a == b: 
0f2fj8027,7: a === b: 
7,7: a < b: 1
7,7: a > b: 
7,7: a <= b: 1
7,7: a >= b: 
7,8: a is [0f2fj] and is string
7,8: b is [[class m]] and is object
7,8: a == b: 
0f2fjm Object
(
    [a] => 1
)
7,8: a === b: 
7,8: a < b: 1
7,8: a > b: 
7,8: a <= b: 1
7,8: a >= b: 
7,9: a is [0f2fj] and is string
7,9: b is [1.23] and is double
7,9: a == b: 
0f2fj1.237,9: a === b: 
7,9: a < b: 1
7,9: a > b: 
7,9: a <= b: 1
7,9: a >= b: 
7,10: a is [0f2fj] and is string
7,10: b is [00v2nc8] and is string
7,10: a == b: 
0f2fj00v2nc87,10: a === b: 
7,10: a < b: 
7,10: a > b: 1
7,10: a <= b: 
7,10: a >= b: 1
7,11: a is [0f2fj] and is string
7,11: b is [Array] and is array
7,11: a == b: 
0f2fjArray
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
7,11: a === b: 
7,11: a < b: 1
7,11: a > b: 
7,11: a <= b: 1
7,11: a >= b: 
7,12: a is [0f2fj] and is string
7,12: b is [] and is boolean
7,12: a == b: 
0f2fj7,12: a === b: 
7,12: a < b: 
7,12: a > b: 1
7,12: a <= b: 
7,12: a >= b: 1
7,13: a is [0f2fj] and is string
7,13: b is [[class o]] and is object
7,13: a == b: 
0f2fjo Object
(
    [c] => 1
)
7,13: a === b: 
7,13: a < b: 1
7,13: a > b: 
7,13: a <= b: 1
7,13: a >= b: 
7,14: a is [0f2fj] and is string
7,14: b is [this is a string] and is string
7,14: a == b: 
0f2fjthis is a string7,14: a === b: 
7,14: a < b: 1
7,14: a > b: 
7,14: a <= b: 1
7,14: a >= b: 
7,15: a is [0f2fj] and is string
7,15: b is [4.31] and is string
7,15: b is a string and is numeric
7,15: a == b: 
0f2fj4.317,15: a === b: 
7,15: a < b: 1
7,15: a > b: 
7,15: a <= b: 1
7,15: a >= b: 
8,1: a is [[class o]] and is object
8,1: b is [89] and is integer
8,1: a == b: 
o Object
(
    [c] => 1
)
898,1: a === b: 
8,1: a < b: 1
8,1: a > b: 
8,1: a <= b: 1
8,1: a >= b: 
8,2: a is [[class o]] and is object
8,2: b is [a string] and is string
8,2: a == b: 
o Object
(
    [c] => 1
)
a string8,2: a === b: 
8,2: a < b: 1
8,2: a > b: 
8,2: a <= b: 1
8,2: a >= b: 
8,3: a is [[class o]] and is object
8,3: b is [12] and is string
8,3: b is a string and is numeric
8,3: a == b: 
o Object
(
    [c] => 1
)
128,3: a === b: 
8,3: a < b: 
8,3: a > b: 1
8,3: a <= b: 
8,3: a >= b: 1
8,4: a is [[class o]] and is object
8,4: b is [] and is NULL
8,4: a == b: 
o Object
(
    [c] => 1
)
8,4: a === b: 
8,4: a < b: 
8,4: a > b: 1
8,4: a <= b: 
8,4: a >= b: 1
8,5: a is [[class o]] and is object
8,5: b is [Array] and is array
8,5: a == b: 
o Object
(
    [c] => 1
)
Array
(
    [0] => 3
)
8,5: a === b: 
8,5: a < b: 
8,5: a > b: 1
8,5: a <= b: 
8,5: a >= b: 1
8,6: a is [[class o]] and is object
8,6: b is [9321] and is integer
8,6: a == b: 
o Object
(
    [c] => 1
)
93218,6: a === b: 
8,6: a < b: 1
8,6: a > b: 
8,6: a <= b: 1
8,6: a >= b: 
8,7: a is [[class o]] and is object
8,7: b is [802] and is string
8,7: b is a string and is numeric
8,7: a == b: 
o Object
(
    [c] => 1
)
8028,7: a === b: 
8,7: a < b: 
8,7: a > b: 1
8,7: a <= b: 
8,7: a >= b: 1
8,8: a is [[class o]] and is object
8,8: b is [[class m]] and is object
8,8: a == b: 
o Object
(
    [c] => 1
)
m Object
(
    [a] => 1
)
8,8: a === b: 
8,8: a < b: 
8,8: a > b: 
8,8: a <= b: 
8,8: a >= b: 
8,9: a is [[class o]] and is object
8,9: b is [1.23] and is double
8,9: a == b: 
o Object
(
    [c] => 1
)
1.238,9: a === b: 
8,9: a < b: 1
8,9: a > b: 
8,9: a <= b: 1
8,9: a >= b: 
8,10: a is [[class o]] and is object
8,10: b is [00v2nc8] and is string
8,10: a == b: 
o Object
(
    [c] => 1
)
00v2nc88,10: a === b: 
8,10: a < b: 
8,10: a > b: 1
8,10: a <= b: 
8,10: a >= b: 1
8,11: a is [[class o]] and is object
8,11: b is [Array] and is array
8,11: a == b: 
o Object
(
    [c] => 1
)
Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
8,11: a === b: 
8,11: a < b: 
8,11: a > b: 1
8,11: a <= b: 
8,11: a >= b: 1
8,12: a is [[class o]] and is object
8,12: b is [] and is boolean
8,12: a == b: 
o Object
(
    [c] => 1
)
8,12: a === b: 
8,12: a < b: 
8,12: a > b: 1
8,12: a <= b: 
8,12: a >= b: 1
8,13: a is [[class o]] and is object
8,13: b is [[class o]] and is object
8,13: a == b: 1
o Object
(
    [c] => 1
)
o Object
(
    [c] => 1
)
8,13: a === b: 1
8,13: a < b: 
8,13: a > b: 
8,13: a <= b: 1
8,13: a >= b: 1
8,14: a is [[class o]] and is object
8,14: b is [this is a string] and is string
8,14: a == b: 
o Object
(
    [c] => 1
)
this is a string8,14: a === b: 
8,14: a < b: 1
8,14: a > b: 
8,14: a <= b: 1
8,14: a >= b: 
8,15: a is [[class o]] and is object
8,15: b is [4.31] and is string
8,15: b is a string and is numeric
8,15: a == b: 
o Object
(
    [c] => 1
)
4.318,15: a === b: 
8,15: a < b: 
8,15: a > b: 1
8,15: a <= b: 
8,15: a >= b: 1
9,1: a is [Array] and is array
9,1: b is [89] and is integer
9,1: a == b: 
Array
(
    [0] => 3
)
899,1: a === b: 
9,1: a < b: 
9,1: a > b: 1
9,1: a <= b: 
9,1: a >= b: 1
9,2: a is [Array] and is array
9,2: b is [a string] and is string
9,2: a == b: 
Array
(
    [0] => 3
)
a string9,2: a === b: 
9,2: a < b: 
9,2: a > b: 1
9,2: a <= b: 
9,2: a >= b: 1
9,3: a is [Array] and is array
9,3: b is [12] and is string
9,3: b is a string and is numeric
9,3: a == b: 
Array
(
    [0] => 3
)
129,3: a === b: 
9,3: a < b: 
9,3: a > b: 1
9,3: a <= b: 
9,3: a >= b: 1
9,4: a is [Array] and is array
9,4: b is [] and is NULL
9,4: a == b: 
Array
(
    [0] => 3
)
9,4: a === b: 
9,4: a < b: 
9,4: a > b: 1
9,4: a <= b: 
9,4: a >= b: 1
9,5: a is [Array] and is array
9,5: b is [Array] and is array
9,5: a == b: 1
Array
(
    [0] => 3
)
Array
(
    [0] => 3
)
9,5: a === b: 1
9,5: a < b: 
9,5: a > b: 
9,5: a <= b: 1
9,5: a >= b: 1
9,6: a is [Array] and is array
9,6: b is [9321] and is integer
9,6: a == b: 
Array
(
    [0] => 3
)
93219,6: a === b: 
9,6: a < b: 
9,6: a > b: 1
9,6: a <= b: 
9,6: a >= b: 1
9,7: a is [Array] and is array
9,7: b is [802] and is string
9,7: b is a string and is numeric
9,7: a == b: 
Array
(
    [0] => 3
)
8029,7: a === b: 
9,7: a < b: 
9,7: a > b: 1
9,7: a <= b: 
9,7: a >= b: 1
9,8: a is [Array] and is array
9,8: b is [[class m]] and is object
9,8: a == b: 
Array
(
    [0] => 3
)
m Object
(
    [a] => 1
)
9,8: a === b: 
9,8: a < b: 1
9,8: a > b: 
9,8: a <= b: 1
9,8: a >= b: 
9,9: a is [Array] and is array
9,9: b is [1.23] and is double
9,9: a == b: 
Array
(
    [0] => 3
)
1.239,9: a === b: 
9,9: a < b: 
9,9: a > b: 1
9,9: a <= b: 
9,9: a >= b: 1
9,10: a is [Array] and is array
9,10: b is [00v2nc8] and is string
9,10: a == b: 
Array
(
    [0] => 3
)
00v2nc89,10: a === b: 
9,10: a < b: 
9,10: a > b: 1
9,10: a <= b: 
9,10: a >= b: 1
9,11: a is [Array] and is array
9,11: b is [Array] and is array
9,11: a == b: 
Array
(
    [0] => 3
)
Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
9,11: a === b: 
9,11: a < b: 1
9,11: a > b: 
9,11: a <= b: 1
9,11: a >= b: 
9,12: a is [Array] and is array
9,12: b is [] and is boolean
9,12: a == b: 
Array
(
    [0] => 3
)
9,12: a === b: 
9,12: a < b: 
9,12: a > b: 1
9,12: a <= b: 
9,12: a >= b: 1
9,13: a is [Array] and is array
9,13: b is [[class o]] and is object
9,13: a == b: 
Array
(
    [0] => 3
)
o Object
(
    [c] => 1
)
9,13: a === b: 
9,13: a < b: 1
9,13: a > b: 
9,13: a <= b: 1
9,13: a >= b: 
9,14: a is [Array] and is array
9,14: b is [this is a string] and is string
9,14: a == b: 
Array
(
    [0] => 3
)
this is a string9,14: a === b: 
9,14: a < b: 
9,14: a > b: 1
9,14: a <= b: 
9,14: a >= b: 1
9,15: a is [Array] and is array
9,15: b is [4.31] and is string
9,15: b is a string and is numeric
9,15: a == b: 
Array
(
    [0] => 3
)
4.319,15: a === b: 
9,15: a < b: 
9,15: a > b: 1
9,15: a <= b: 
9,15: a >= b: 1
10,1: a is [testing] and is string
10,1: b is [89] and is integer
10,1: a == b: 
testing8910,1: a === b: 
10,1: a < b: 1
10,1: a > b: 
10,1: a <= b: 1
10,1: a >= b: 
10,2: a is [testing] and is string
10,2: b is [a string] and is string
10,2: a == b: 
testinga string10,2: a === b: 
10,2: a < b: 
10,2: a > b: 1
10,2: a <= b: 
10,2: a >= b: 1
10,3: a is [testing] and is string
10,3: b is [12] and is string
10,3: b is a string and is numeric
10,3: a == b: 
testing1210,3: a === b: 
10,3: a < b: 
10,3: a > b: 1
10,3: a <= b: 
10,3: a >= b: 1
10,4: a is [testing] and is string
10,4: b is [] and is NULL
10,4: a == b: 
testing10,4: a === b: 
10,4: a < b: 
10,4: a > b: 1
10,4: a <= b: 
10,4: a >= b: 1
10,5: a is [testing] and is string
10,5: b is [Array] and is array
10,5: a == b: 
testingArray
(
    [0] => 3
)
10,5: a === b: 
10,5: a < b: 1
10,5: a > b: 
10,5: a <= b: 1
10,5: a >= b: 
10,6: a is [testing] and is string
10,6: b is [9321] and is integer
10,6: a == b: 
testing932110,6: a === b: 
10,6: a < b: 1
10,6: a > b: 
10,6: a <= b: 1
10,6: a >= b: 
10,7: a is [testing] and is string
10,7: b is [802] and is string
10,7: b is a string and is numeric
10,7: a == b: 
testing80210,7: a === b: 
10,7: a < b: 
10,7: a > b: 1
10,7: a <= b: 
10,7: a >= b: 1
10,8: a is [testing] and is string
10,8: b is [[class m]] and is object
10,8: a == b: 
testingm Object
(
    [a] => 1
)
10,8: a === b: 
10,8: a < b: 
10,8: a > b: 1
10,8: a <= b: 
10,8: a >= b: 1
10,9: a is [testing] and is string
10,9: b is [1.23] and is double
10,9: a == b: 
testing1.2310,9: a === b: 
10,9: a < b: 1
10,9: a > b: 
10,9: a <= b: 1
10,9: a >= b: 
10,10: a is [testing] and is string
10,10: b is [00v2nc8] and is string
10,10: a == b: 
testing00v2nc810,10: a === b: 
10,10: a < b: 
10,10: a > b: 1
10,10: a <= b: 
10,10: a >= b: 1
10,11: a is [testing] and is string
10,11: b is [Array] and is array
10,11: a == b: 
testingArray
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
10,11: a === b: 
10,11: a < b: 1
10,11: a > b: 
10,11: a <= b: 1
10,11: a >= b: 
10,12: a is [testing] and is string
10,12: b is [] and is boolean
10,12: a == b: 
testing10,12: a === b: 
10,12: a < b: 
10,12: a > b: 1
10,12: a <= b: 
10,12: a >= b: 1
10,13: a is [testing] and is string
10,13: b is [[class o]] and is object
10,13: a == b: 
testingo Object
(
    [c] => 1
)
10,13: a === b: 
10,13: a < b: 
10,13: a > b: 1
10,13: a <= b: 
10,13: a >= b: 1
10,14: a is [testing] and is string
10,14: b is [this is a string] and is string
10,14: a == b: 
testingthis is a string10,14: a === b: 
10,14: a < b: 1
10,14: a > b: 
10,14: a <= b: 1
10,14: a >= b: 
10,15: a is [testing] and is string
10,15: b is [4.31] and is string
10,15: b is a string and is numeric
10,15: a == b: 
testing4.3110,15: a === b: 
10,15: a < b: 
10,15: a > b: 1
10,15: a <= b: 
10,15: a >= b: 1
11,1: a is [] and is NULL
11,1: b is [89] and is integer
11,1: a == b: 
8911,1: a === b: 
11,1: a < b: 1
11,1: a > b: 
11,1: a <= b: 1
11,1: a >= b: 
11,2: a is [] and is NULL
11,2: b is [a string] and is string
11,2: a == b: 
a string11,2: a === b: 
11,2: a < b: 1
11,2: a > b: 
11,2: a <= b: 1
11,2: a >= b: 
11,3: a is [] and is NULL
11,3: b is [12] and is string
11,3: b is a string and is numeric
11,3: a == b: 
1211,3: a === b: 
11,3: a < b: 1
11,3: a > b: 
11,3: a <= b: 1
11,3: a >= b: 
11,4: a is [] and is NULL
11,4: b is [] and is NULL
11,4: a == b: 1
11,4: a === b: 1
11,4: a < b: 
11,4: a > b: 
11,4: a <= b: 1
11,4: a >= b: 1
11,5: a is [] and is NULL
11,5: b is [Array] and is array
11,5: a == b: 
Array
(
    [0] => 3
)
11,5: a === b: 
11,5: a < b: 1
11,5: a > b: 
11,5: a <= b: 1
11,5: a >= b: 
11,6: a is [] and is NULL
11,6: b is [9321] and is integer
11,6: a == b: 
932111,6: a === b: 
11,6: a < b: 1
11,6: a > b: 
11,6: a <= b: 1
11,6: a >= b: 
11,7: a is [] and is NULL
11,7: b is [802] and is string
11,7: b is a string and is numeric
11,7: a == b: 
80211,7: a === b: 
11,7: a < b: 1
11,7: a > b: 
11,7: a <= b: 1
11,7: a >= b: 
11,8: a is [] and is NULL
11,8: b is [[class m]] and is object
11,8: a == b: 
m Object
(
    [a] => 1
)
11,8: a === b: 
11,8: a < b: 1
11,8: a > b: 
11,8: a <= b: 1
11,8: a >= b: 
11,9: a is [] and is NULL
11,9: b is [1.23] and is double
11,9: a == b: 
1.2311,9: a === b: 
11,9: a < b: 1
11,9: a > b: 
11,9: a <= b: 1
11,9: a >= b: 
11,10: a is [] and is NULL
11,10: b is [00v2nc8] and is string
11,10: a == b: 
00v2nc811,10: a === b: 
11,10: a < b: 1
11,10: a > b: 
11,10: a <= b: 1
11,10: a >= b: 
11,11: a is [] and is NULL
11,11: b is [Array] and is array
11,11: a == b: 
Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
11,11: a === b: 
11,11: a < b: 1
11,11: a > b: 
11,11: a <= b: 1
11,11: a >= b: 
11,12: a is [] and is NULL
11,12: b is [] and is boolean
11,12: a == b: 1
11,12: a === b: 
11,12: a < b: 
11,12: a > b: 
11,12: a <= b: 1
11,12: a >= b: 1
11,13: a is [] and is NULL
11,13: b is [[class o]] and is object
11,13: a == b: 
o Object
(
    [c] => 1
)
11,13: a === b: 
11,13: a < b: 1
11,13: a > b: 
11,13: a <= b: 1
11,13: a >= b: 
11,14: a is [] and is NULL
11,14: b is [this is a string] and is string
11,14: a == b: 
this is a string11,14: a === b: 
11,14: a < b: 1
11,14: a > b: 
11,14: a <= b: 1
11,14: a >= b: 
11,15: a is [] and is NULL
11,15: b is [4.31] and is string
11,15: b is a string and is numeric
11,15: a == b: 
4.3111,15: a === b: 
11,15: a < b: 1
11,15: a > b: 
11,15: a <= b: 1
11,15: a >= b: 
12,1: a is [Array] and is array
12,1: b is [89] and is integer
12,1: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
8912,1: a === b: 
12,1: a < b: 
12,1: a > b: 1
12,1: a <= b: 
12,1: a >= b: 1
12,2: a is [Array] and is array
12,2: b is [a string] and is string
12,2: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
a string12,2: a === b: 
12,2: a < b: 
12,2: a > b: 1
12,2: a <= b: 
12,2: a >= b: 1
12,3: a is [Array] and is array
12,3: b is [12] and is string
12,3: b is a string and is numeric
12,3: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
1212,3: a === b: 
12,3: a < b: 
12,3: a > b: 1
12,3: a <= b: 
12,3: a >= b: 1
12,4: a is [Array] and is array
12,4: b is [] and is NULL
12,4: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
12,4: a === b: 
12,4: a < b: 
12,4: a > b: 1
12,4: a <= b: 
12,4: a >= b: 1
12,5: a is [Array] and is array
12,5: b is [Array] and is array
12,5: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
Array
(
    [0] => 3
)
12,5: a === b: 
12,5: a < b: 
12,5: a > b: 1
12,5: a <= b: 
12,5: a >= b: 1
12,6: a is [Array] and is array
12,6: b is [9321] and is integer
12,6: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
932112,6: a === b: 
12,6: a < b: 
12,6: a > b: 1
12,6: a <= b: 
12,6: a >= b: 1
12,7: a is [Array] and is array
12,7: b is [802] and is string
12,7: b is a string and is numeric
12,7: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
80212,7: a === b: 
12,7: a < b: 
12,7: a > b: 1
12,7: a <= b: 
12,7: a >= b: 1
12,8: a is [Array] and is array
12,8: b is [[class m]] and is object
12,8: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
m Object
(
    [a] => 1
)
12,8: a === b: 
12,8: a < b: 1
12,8: a > b: 
12,8: a <= b: 1
12,8: a >= b: 
12,9: a is [Array] and is array
12,9: b is [1.23] and is double
12,9: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
1.2312,9: a === b: 
12,9: a < b: 
12,9: a > b: 1
12,9: a <= b: 
12,9: a >= b: 1
12,10: a is [Array] and is array
12,10: b is [00v2nc8] and is string
12,10: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
00v2nc812,10: a === b: 
12,10: a < b: 
12,10: a > b: 1
12,10: a <= b: 
12,10: a >= b: 1
12,11: a is [Array] and is array
12,11: b is [Array] and is array
12,11: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
12,11: a === b: 
12,11: a < b: 1
12,11: a > b: 
12,11: a <= b: 1
12,11: a >= b: 
12,12: a is [Array] and is array
12,12: b is [] and is boolean
12,12: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
12,12: a === b: 
12,12: a < b: 
12,12: a > b: 1
12,12: a <= b: 
12,12: a >= b: 1
12,13: a is [Array] and is array
12,13: b is [[class o]] and is object
12,13: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
o Object
(
    [c] => 1
)
12,13: a === b: 
12,13: a < b: 1
12,13: a > b: 
12,13: a <= b: 1
12,13: a >= b: 
12,14: a is [Array] and is array
12,14: b is [this is a string] and is string
12,14: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
this is a string12,14: a === b: 
12,14: a < b: 
12,14: a > b: 1
12,14: a <= b: 
12,14: a >= b: 1
12,15: a is [Array] and is array
12,15: b is [4.31] and is string
12,15: b is a string and is numeric
12,15: a == b: 
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)
4.3112,15: a === b: 
12,15: a < b: 
12,15: a > b: 1
12,15: a <= b: 
12,15: a >= b: 1
13,1: a is [[class m]] and is object
13,1: b is [89] and is integer
13,1: a == b: 
m Object
(
    [a] => 1
)
8913,1: a === b: 
13,1: a < b: 1
13,1: a > b: 
13,1: a <= b: 1
13,1: a >= b: 
13,2: a is [[class m]] and is object
13,2: b is [a string] and is string
13,2: a == b: 
m Object
(
    [a] => 1
)
a string13,2: a === b: 
13,2: a < b: 1
13,2: a > b: 
13,2: a <= b: 1
13,2: a >= b: 
13,3: a is [[class m]] and is object
13,3: b is [12] and is string
13,3: b is a string and is numeric
13,3: a == b: 
m Object
(
    [a] => 1
)
1213,3: a === b: 
13,3: a < b: 
13,3: a > b: 1
13,3: a <= b: 
13,3: a >= b: 1
13,4: a is [[class m]] and is object
13,4: b is [] and is NULL
13,4: a == b: 
m Object
(
    [a] => 1
)
13,4: a === b: 
13,4: a < b: 
13,4: a > b: 1
13,4: a <= b: 
13,4: a >= b: 1
13,5: a is [[class m]] and is object
13,5: b is [Array] and is array
13,5: a == b: 
m Object
(
    [a] => 1
)
Array
(
    [0] => 3
)
13,5: a === b: 
13,5: a < b: 
13,5: a > b: 1
13,5: a <= b: 
13,5: a >= b: 1
13,6: a is [[class m]] and is object
13,6: b is [9321] and is integer
13,6: a == b: 
m Object
(
    [a] => 1
)
932113,6: a === b: 
13,6: a < b: 1
13,6: a > b: 
13,6: a <= b: 1
13,6: a >= b: 
13,7: a is [[class m]] and is object
13,7: b is [802] and is string
13,7: b is a string and is numeric
13,7: a == b: 
m Object
(
    [a] => 1
)
80213,7: a === b: 
13,7: a < b: 
13,7: a > b: 1
13,7: a <= b: 
13,7: a >= b: 1
13,8: a is [[class m]] and is object
13,8: b is [[class m]] and is object
13,8: a == b: 1
m Object
(
    [a] => 1
)
m Object
(
    [a] => 1
)
13,8: a === b: 1
13,8: a < b: 
13,8: a > b: 
13,8: a <= b: 1
13,8: a >= b: 1
13,9: a is [[class m]] and is object
13,9: b is [1.23] and is double
13,9: a == b: 
m Object
(
    [a] => 1
)
1.2313,9: a === b: 
13,9: a < b: 1
13,9: a > b: 
13,9: a <= b: 1
13,9: a >= b: 
13,10: a is [[class m]] and is object
13,10: b is [00v2nc8] and is string
13,10: a == b: 
m Object
(
    [a] => 1
)
00v2nc813,10: a === b: 
13,10: a < b: 
13,10: a > b: 1
13,10: a <= b: 
13,10: a >= b: 1
13,11: a is [[class m]] and is object
13,11: b is [Array] and is array
13,11: a == b: 
m Object
(
    [a] => 1
)
Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
13,11: a === b: 
13,11: a < b: 
13,11: a > b: 1
13,11: a <= b: 
13,11: a >= b: 1
13,12: a is [[class m]] and is object
13,12: b is [] and is boolean
13,12: a == b: 
m Object
(
    [a] => 1
)
13,12: a === b: 
13,12: a < b: 
13,12: a > b: 1
13,12: a <= b: 
13,12: a >= b: 1
13,13: a is [[class m]] and is object
13,13: b is [[class o]] and is object
13,13: a == b: 
m Object
(
    [a] => 1
)
o Object
(
    [c] => 1
)
13,13: a === b: 
13,13: a < b: 
13,13: a > b: 
13,13: a <= b: 
13,13: a >= b: 
13,14: a is [[class m]] and is object
13,14: b is [this is a string] and is string
13,14: a == b: 
m Object
(
    [a] => 1
)
this is a string13,14: a === b: 
13,14: a < b: 1
13,14: a > b: 
13,14: a <= b: 1
13,14: a >= b: 
13,15: a is [[class m]] and is object
13,15: b is [4.31] and is string
13,15: b is a string and is numeric
13,15: a == b: 
m Object
(
    [a] => 1
)
4.3113,15: a === b: 
13,15: a < b: 
13,15: a > b: 1
13,15: a <= b: 
13,15: a >= b: 1
14,1: a is [1.23] and is double
14,1: b is [89] and is integer
14,1: a == b: 
1.238914,1: a === b: 
14,1: a < b: 1
14,1: a > b: 
14,1: a <= b: 1
14,1: a >= b: 
14,2: a is [1.23] and is double
14,2: b is [a string] and is string
14,2: a == b: 
1.23a string14,2: a === b: 
14,2: a < b: 
14,2: a > b: 1
14,2: a <= b: 
14,2: a >= b: 1
14,3: a is [1.23] and is double
14,3: b is [12] and is string
14,3: b is a string and is numeric
14,3: a == b: 
1.231214,3: a === b: 
14,3: a < b: 1
14,3: a > b: 
14,3: a <= b: 1
14,3: a >= b: 
14,4: a is [1.23] and is double
14,4: b is [] and is NULL
14,4: a == b: 
1.2314,4: a === b: 
14,4: a < b: 
14,4: a > b: 1
14,4: a <= b: 
14,4: a >= b: 1
14,5: a is [1.23] and is double
14,5: b is [Array] and is array
14,5: a == b: 
1.23Array
(
    [0] => 3
)
14,5: a === b: 
14,5: a < b: 1
14,5: a > b: 
14,5: a <= b: 1
14,5: a >= b: 
14,6: a is [1.23] and is double
14,6: b is [9321] and is integer
14,6: a == b: 
1.23932114,6: a === b: 
14,6: a < b: 1
14,6: a > b: 
14,6: a <= b: 1
14,6: a >= b: 
14,7: a is [1.23] and is double
14,7: b is [802] and is string
14,7: b is a string and is numeric
14,7: a == b: 
1.2380214,7: a === b: 
14,7: a < b: 1
14,7: a > b: 
14,7: a <= b: 1
14,7: a >= b: 
14,8: a is [1.23] and is double
14,8: b is [[class m]] and is object
14,8: a == b: 
1.23m Object
(
    [a] => 1
)
14,8: a === b: 
14,8: a < b: 
14,8: a > b: 1
14,8: a <= b: 
14,8: a >= b: 1
14,9: a is [1.23] and is double
14,9: b is [1.23] and is double
14,9: a == b: 1
1.231.2314,9: a === b: 1
14,9: a < b: 
14,9: a > b: 
14,9: a <= b: 1
14,9: a >= b: 1
14,10: a is [1.23] and is double
14,10: b is [00v2nc8] and is string
14,10: a == b: 
1.2300v2nc814,10: a === b: 
14,10: a < b: 
14,10: a > b: 1
14,10: a <= b: 
14,10: a >= b: 1
14,11: a is [1.23] and is double
14,11: b is [Array] and is array
14,11: a == b: 
1.23Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
14,11: a === b: 
14,11: a < b: 1
14,11: a > b: 
14,11: a <= b: 1
14,11: a >= b: 
14,12: a is [1.23] and is double
14,12: b is [] and is boolean
14,12: a == b: 
1.2314,12: a === b: 
14,12: a < b: 
14,12: a > b: 1
14,12: a <= b: 
14,12: a >= b: 1
14,13: a is [1.23] and is double
14,13: b is [[class o]] and is object
14,13: a == b: 
1.23o Object
(
    [c] => 1
)
14,13: a === b: 
14,13: a < b: 
14,13: a > b: 1
14,13: a <= b: 
14,13: a >= b: 1
14,14: a is [1.23] and is double
14,14: b is [this is a string] and is string
14,14: a == b: 
1.23this is a string14,14: a === b: 
14,14: a < b: 
14,14: a > b: 1
14,14: a <= b: 
14,14: a >= b: 1
14,15: a is [1.23] and is double
14,15: b is [4.31] and is string
14,15: b is a string and is numeric
14,15: a == b: 
1.234.3114,15: a === b: 
14,15: a < b: 1
14,15: a > b: 
14,15: a <= b: 1
14,15: a >= b: 
15,1: a is [4.31] and is string
15,1: b is [89] and is integer
15,1: a is a string and is numeric
15,1: a == b: 
4.318915,1: a === b: 
15,1: a < b: 1
15,1: a > b: 
15,1: a <= b: 1
15,1: a >= b: 
15,2: a is [4.31] and is string
15,2: b is [a string] and is string
15,2: a is a string and is numeric
15,2: a == b: 
4.31a string15,2: a === b: 
15,2: a < b: 1
15,2: a > b: 
15,2: a <= b: 1
15,2: a >= b: 
15,3: a is [4.31] and is string
15,3: b is [12] and is string
15,3: a is a string and is numeric
15,3: b is a string and is numeric
15,3: a == b: 
4.311215,3: a === b: 
15,3: a < b: 1
15,3: a > b: 
15,3: a <= b: 1
15,3: a >= b: 
15,4: a is [4.31] and is string
15,4: b is [] and is NULL
15,4: a is a string and is numeric
15,4: a == b: 
4.3115,4: a === b: 
15,4: a < b: 
15,4: a > b: 1
15,4: a <= b: 
15,4: a >= b: 1
15,5: a is [4.31] and is string
15,5: b is [Array] and is array
15,5: a is a string and is numeric
15,5: a == b: 
4.31Array
(
    [0] => 3
)
15,5: a === b: 
15,5: a < b: 1
15,5: a > b: 
15,5: a <= b: 1
15,5: a >= b: 
15,6: a is [4.31] and is string
15,6: b is [9321] and is integer
15,6: a is a string and is numeric
15,6: a == b: 
4.31932115,6: a === b: 
15,6: a < b: 1
15,6: a > b: 
15,6: a <= b: 1
15,6: a >= b: 
15,7: a is [4.31] and is string
15,7: b is [802] and is string
15,7: a is a string and is numeric
15,7: b is a string and is numeric
15,7: a == b: 
4.3180215,7: a === b: 
15,7: a < b: 1
15,7: a > b: 
15,7: a <= b: 1
15,7: a >= b: 
15,8: a is [4.31] and is string
15,8: b is [[class m]] and is object
15,8: a is a string and is numeric
15,8: a == b: 
4.31m Object
(
    [a] => 1
)
15,8: a === b: 
15,8: a < b: 1
15,8: a > b: 
15,8: a <= b: 1
15,8: a >= b: 
15,9: a is [4.31] and is string
15,9: b is [1.23] and is double
15,9: a is a string and is numeric
15,9: a == b: 
4.311.2315,9: a === b: 
15,9: a < b: 
15,9: a > b: 1
15,9: a <= b: 
15,9: a >= b: 1
15,10: a is [4.31] and is string
15,10: b is [00v2nc8] and is string
15,10: a is a string and is numeric
15,10: a == b: 
4.3100v2nc815,10: a === b: 
15,10: a < b: 
15,10: a > b: 1
15,10: a <= b: 
15,10: a >= b: 1
15,11: a is [4.31] and is string
15,11: b is [Array] and is array
15,11: a is a string and is numeric
15,11: a == b: 
4.31Array
(
    [0] => 4
    [1] => hi
    [blah] => 23
    [2] => Array
        (
            [0] => 1
            [1] => 2
        )

)
15,11: a === b: 
15,11: a < b: 1
15,11: a > b: 
15,11: a <= b: 1
15,11: a >= b: 
15,12: a is [4.31] and is string
15,12: b is [] and is boolean
15,12: a is a string and is numeric
15,12: a == b: 
4.3115,12: a === b: 
15,12: a < b: 
15,12: a > b: 1
15,12: a <= b: 
15,12: a >= b: 1
15,13: a is [4.31] and is string
15,13: b is [[class o]] and is object
15,13: a is a string and is numeric
15,13: a == b: 
4.31o Object
(
    [c] => 1
)
15,13: a === b: 
15,13: a < b: 1
15,13: a > b: 
15,13: a <= b: 1
15,13: a >= b: 
15,14: a is [4.31] and is string
15,14: b is [this is a string] and is string
15,14: a is a string and is numeric
15,14: a == b: 
4.31this is a string15,14: a === b: 
15,14: a < b: 1
15,14: a > b: 
15,14: a <= b: 1
15,14: a >= b: 
15,15: a is [4.31] and is string
15,15: b is [4.31] and is string
15,15: a is a string and is numeric
15,15: b is a string and is numeric
15,15: a == b: 1
4.314.3115,15: a === b: 1
15,15: a < b: 
15,15: a > b: 
15,15: a <= b: 1
15,15: a >= b: 1
