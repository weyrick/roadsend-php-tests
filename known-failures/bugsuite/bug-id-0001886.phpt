--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001886.php (converted from Roadsend suite)
--KNOWNFAILURE--
reference assignment. see trac #3519
--FILE--
recursive references
<?

class aclass {
  var $hash;

  function &afunc($i) {
    $var =& new bclass($i, $this);
    $this->hash[$i] =& $var;
    return $var;
  }

}

class bclass {
  var $id;
  var $parent;
  function bclass($id, &$parent) {
    $this->id = $id;
    $this->parent =& $parent;
  }
}


$m = new aclass();
$a =& $m->afunc(1);
$b =& $m->afunc(2);
$c =& $m->afunc(3);

$b->id = 10;
$b->parent->hash[] = 'hello';

print_r($m);
print_r($a);
print_r($b);
print_r($c);

echo "\n\n and now, var_dump \n\n";

var_dump($m);
var_dump($a);
var_dump($b);
var_dump($c);

?>
--EXPECT--
recursive references
aclass Object
(
    [hash] => Array
        (
            [1] => bclass Object
                (
                    [id] => 1
                    [parent] => aclass Object
 *RECURSION*
                )

            [2] => bclass Object
                (
                    [id] => 10
                    [parent] => aclass Object
 *RECURSION*
                )

            [3] => bclass Object
                (
                    [id] => 3
                    [parent] => aclass Object
 *RECURSION*
                )

            [4] => hello
        )

)
bclass Object
(
    [id] => 1
    [parent] => aclass Object
        (
            [hash] => Array
                (
                    [1] => bclass Object
 *RECURSION*
                    [2] => bclass Object
                        (
                            [id] => 10
                            [parent] => aclass Object
 *RECURSION*
                        )

                    [3] => bclass Object
                        (
                            [id] => 3
                            [parent] => aclass Object
 *RECURSION*
                        )

                    [4] => hello
                )

        )

)
bclass Object
(
    [id] => 10
    [parent] => aclass Object
        (
            [hash] => Array
                (
                    [1] => bclass Object
                        (
                            [id] => 1
                            [parent] => aclass Object
 *RECURSION*
                        )

                    [2] => bclass Object
 *RECURSION*
                    [3] => bclass Object
                        (
                            [id] => 3
                            [parent] => aclass Object
 *RECURSION*
                        )

                    [4] => hello
                )

        )

)
bclass Object
(
    [id] => 3
    [parent] => aclass Object
        (
            [hash] => Array
                (
                    [1] => bclass Object
                        (
                            [id] => 1
                            [parent] => aclass Object
 *RECURSION*
                        )

                    [2] => bclass Object
                        (
                            [id] => 10
                            [parent] => aclass Object
 *RECURSION*
                        )

                    [3] => bclass Object
 *RECURSION*
                    [4] => hello
                )

        )

)


 and now, var_dump 

object(aclass)#1 (1) {
  ["hash"]=>
  array(4) {
    [1]=>
    &object(bclass)#2 (2) {
      ["id"]=>
      int(1)
      ["parent"]=>
      object(aclass)#1 (1) {
        ["hash"]=>
        array(4) {
          [1]=>
          &object(bclass)#2 (2) {
            ["id"]=>
            int(1)
            ["parent"]=>
            *RECURSION*
          }
          [2]=>
          &object(bclass)#3 (2) {
            ["id"]=>
            int(10)
            ["parent"]=>
            *RECURSION*
          }
          [3]=>
          &object(bclass)#4 (2) {
            ["id"]=>
            int(3)
            ["parent"]=>
            *RECURSION*
          }
          [4]=>
          string(5) "hello"
        }
      }
    }
    [2]=>
    &object(bclass)#3 (2) {
      ["id"]=>
      int(10)
      ["parent"]=>
      object(aclass)#1 (1) {
        ["hash"]=>
        array(4) {
          [1]=>
          &object(bclass)#2 (2) {
            ["id"]=>
            int(1)
            ["parent"]=>
            *RECURSION*
          }
          [2]=>
          &object(bclass)#3 (2) {
            ["id"]=>
            int(10)
            ["parent"]=>
            *RECURSION*
          }
          [3]=>
          &object(bclass)#4 (2) {
            ["id"]=>
            int(3)
            ["parent"]=>
            *RECURSION*
          }
          [4]=>
          string(5) "hello"
        }
      }
    }
    [3]=>
    &object(bclass)#4 (2) {
      ["id"]=>
      int(3)
      ["parent"]=>
      object(aclass)#1 (1) {
        ["hash"]=>
        array(4) {
          [1]=>
          &object(bclass)#2 (2) {
            ["id"]=>
            int(1)
            ["parent"]=>
            *RECURSION*
          }
          [2]=>
          &object(bclass)#3 (2) {
            ["id"]=>
            int(10)
            ["parent"]=>
            *RECURSION*
          }
          [3]=>
          &object(bclass)#4 (2) {
            ["id"]=>
            int(3)
            ["parent"]=>
            *RECURSION*
          }
          [4]=>
          string(5) "hello"
        }
      }
    }
    [4]=>
    string(5) "hello"
  }
}
object(bclass)#2 (2) {
  ["id"]=>
  int(1)
  ["parent"]=>
  object(aclass)#1 (1) {
    ["hash"]=>
    array(4) {
      [1]=>
      &object(bclass)#2 (2) {
        ["id"]=>
        int(1)
        ["parent"]=>
        object(aclass)#1 (1) {
          ["hash"]=>
          array(4) {
            [1]=>
            *RECURSION*
            [2]=>
            &object(bclass)#3 (2) {
              ["id"]=>
              int(10)
              ["parent"]=>
              *RECURSION*
            }
            [3]=>
            &object(bclass)#4 (2) {
              ["id"]=>
              int(3)
              ["parent"]=>
              *RECURSION*
            }
            [4]=>
            string(5) "hello"
          }
        }
      }
      [2]=>
      &object(bclass)#3 (2) {
        ["id"]=>
        int(10)
        ["parent"]=>
        object(aclass)#1 (1) {
          ["hash"]=>
          array(4) {
            [1]=>
            &object(bclass)#2 (2) {
              ["id"]=>
              int(1)
              ["parent"]=>
              *RECURSION*
            }
            [2]=>
            &object(bclass)#3 (2) {
              ["id"]=>
              int(10)
              ["parent"]=>
              *RECURSION*
            }
            [3]=>
            &object(bclass)#4 (2) {
              ["id"]=>
              int(3)
              ["parent"]=>
              *RECURSION*
            }
            [4]=>
            string(5) "hello"
          }
        }
      }
      [3]=>
      &object(bclass)#4 (2) {
        ["id"]=>
        int(3)
        ["parent"]=>
        object(aclass)#1 (1) {
          ["hash"]=>
          array(4) {
            [1]=>
            &object(bclass)#2 (2) {
              ["id"]=>
              int(1)
              ["parent"]=>
              *RECURSION*
            }
            [2]=>
            &object(bclass)#3 (2) {
              ["id"]=>
              int(10)
              ["parent"]=>
              *RECURSION*
            }
            [3]=>
            &object(bclass)#4 (2) {
              ["id"]=>
              int(3)
              ["parent"]=>
              *RECURSION*
            }
            [4]=>
            string(5) "hello"
          }
        }
      }
      [4]=>
      string(5) "hello"
    }
  }
}
object(bclass)#3 (2) {
  ["id"]=>
  int(10)
  ["parent"]=>
  object(aclass)#1 (1) {
    ["hash"]=>
    array(4) {
      [1]=>
      &object(bclass)#2 (2) {
        ["id"]=>
        int(1)
        ["parent"]=>
        object(aclass)#1 (1) {
          ["hash"]=>
          array(4) {
            [1]=>
            &object(bclass)#2 (2) {
              ["id"]=>
              int(1)
              ["parent"]=>
              *RECURSION*
            }
            [2]=>
            &object(bclass)#3 (2) {
              ["id"]=>
              int(10)
              ["parent"]=>
              *RECURSION*
            }
            [3]=>
            &object(bclass)#4 (2) {
              ["id"]=>
              int(3)
              ["parent"]=>
              *RECURSION*
            }
            [4]=>
            string(5) "hello"
          }
        }
      }
      [2]=>
      &object(bclass)#3 (2) {
        ["id"]=>
        int(10)
        ["parent"]=>
        object(aclass)#1 (1) {
          ["hash"]=>
          array(4) {
            [1]=>
            &object(bclass)#2 (2) {
              ["id"]=>
              int(1)
              ["parent"]=>
              *RECURSION*
            }
            [2]=>
            *RECURSION*
            [3]=>
            &object(bclass)#4 (2) {
              ["id"]=>
              int(3)
              ["parent"]=>
              *RECURSION*
            }
            [4]=>
            string(5) "hello"
          }
        }
      }
      [3]=>
      &object(bclass)#4 (2) {
        ["id"]=>
        int(3)
        ["parent"]=>
        object(aclass)#1 (1) {
          ["hash"]=>
          array(4) {
            [1]=>
            &object(bclass)#2 (2) {
              ["id"]=>
              int(1)
              ["parent"]=>
              *RECURSION*
            }
            [2]=>
            &object(bclass)#3 (2) {
              ["id"]=>
              int(10)
              ["parent"]=>
              *RECURSION*
            }
            [3]=>
            &object(bclass)#4 (2) {
              ["id"]=>
              int(3)
              ["parent"]=>
              *RECURSION*
            }
            [4]=>
            string(5) "hello"
          }
        }
      }
      [4]=>
      string(5) "hello"
    }
  }
}
object(bclass)#4 (2) {
  ["id"]=>
  int(3)
  ["parent"]=>
  object(aclass)#1 (1) {
    ["hash"]=>
    array(4) {
      [1]=>
      &object(bclass)#2 (2) {
        ["id"]=>
        int(1)
        ["parent"]=>
        object(aclass)#1 (1) {
          ["hash"]=>
          array(4) {
            [1]=>
            &object(bclass)#2 (2) {
              ["id"]=>
              int(1)
              ["parent"]=>
              *RECURSION*
            }
            [2]=>
            &object(bclass)#3 (2) {
              ["id"]=>
              int(10)
              ["parent"]=>
              *RECURSION*
            }
            [3]=>
            &object(bclass)#4 (2) {
              ["id"]=>
              int(3)
              ["parent"]=>
              *RECURSION*
            }
            [4]=>
            string(5) "hello"
          }
        }
      }
      [2]=>
      &object(bclass)#3 (2) {
        ["id"]=>
        int(10)
        ["parent"]=>
        object(aclass)#1 (1) {
          ["hash"]=>
          array(4) {
            [1]=>
            &object(bclass)#2 (2) {
              ["id"]=>
              int(1)
              ["parent"]=>
              *RECURSION*
            }
            [2]=>
            &object(bclass)#3 (2) {
              ["id"]=>
              int(10)
              ["parent"]=>
              *RECURSION*
            }
            [3]=>
            &object(bclass)#4 (2) {
              ["id"]=>
              int(3)
              ["parent"]=>
              *RECURSION*
            }
            [4]=>
            string(5) "hello"
          }
        }
      }
      [3]=>
      &object(bclass)#4 (2) {
        ["id"]=>
        int(3)
        ["parent"]=>
        object(aclass)#1 (1) {
          ["hash"]=>
          array(4) {
            [1]=>
            &object(bclass)#2 (2) {
              ["id"]=>
              int(1)
              ["parent"]=>
              *RECURSION*
            }
            [2]=>
            &object(bclass)#3 (2) {
              ["id"]=>
              int(10)
              ["parent"]=>
              *RECURSION*
            }
            [3]=>
            *RECURSION*
            [4]=>
            string(5) "hello"
          }
        }
      }
      [4]=>
      string(5) "hello"
    }
  }
}
