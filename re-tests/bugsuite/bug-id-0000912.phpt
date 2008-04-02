--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000912.php (converted from Roadsend suite)
--FILE--
parent:: doesn't work inside a switch
<?

class oneclass {
  function a($b) {
    echo "two a $b\n";
  }
}

class twoclass extends oneclass {
  function a($b) {
    echo "one a $b\n";
    switch ($b) {
    case 'meek':
      parent::a($b);
      break;
    case 'blah':
      echo 'hi';
      break;
    }
  }
}

$a = new twoclass();

print "that line\n";

$a->a('meek');

?>
--EXPECT--
parent:: doesn't work inside a switch
that line
one a meek
two a meek
