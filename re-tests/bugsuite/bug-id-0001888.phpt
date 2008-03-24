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
--EXPECTF--

Warning: Missing argument 3 for aclass::afunc(), called in /home/weyrick/workspace/pcc/bugs/tests/bug-id-0001888.php on line 14 and defined in /home/weyrick/workspace/pcc/bugs/tests/bug-id-0001888.php on line 5
string(4) "meep"
string(5) "hello"
NULL
string(4) "meep"
string(5) "hello"
bool(true)
