--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001051.php (converted from Roadsend suite)
--FILE--
0001051:  parse error on parent:: as rval
<?


class aclass {
  function afunc() {
    return 'super!!!!!!!!!';
  }
}

class bclass extends aclass {
  function afunc() {
    //return parent::afunc();
    $a = parent::afunc();
    return $a;
  }
}

$a = new bclass();
echo $a->afunc();


?>
--EXPECTF--
0001051:  parse error on parent:: as rval
super!!!!!!!!!