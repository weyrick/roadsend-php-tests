--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001762.php (converted from Roadsend suite)
--FILE--
runtime error in compiler on variable method name
<?

class aclass {
  function afunc21() {
    echo "you made it\n";
  }
}

$a = new aclass();
$func = 'afunc21';
$a->$func();

?>
--EXPECTF--
runtime error in compiler on variable method name
you made it
