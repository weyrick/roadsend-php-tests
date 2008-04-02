--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001888.php (converted from Roadsend suite)
--FILE--
<?

class aclass {

  function afunc($meep, $blah='', $fnord) {
    var_dump($meep);
    var_dump($blah);
    var_dump($fnord);
  }

}

$a = new aclass();
$a->afunc('meep','hello');
$a->afunc('meep','hello',true);


?>
--EXPECT--
string(4) "meep"
string(5) "hello"
NULL
string(4) "meep"
string(5) "hello"
bool(true)
