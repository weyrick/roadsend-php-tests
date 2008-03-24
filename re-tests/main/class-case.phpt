--TEST--
/home/weyrick/pcc/tests/class-case.php (converted from Roadsend suite)
--FILE--
<?

class TeSt {
  public $BaZBiP = 'yes';
  function FooBar() {
    echo "-> ".$this->bazbip."\n";
    echo "-> ".$this->BaZBiP."\n";
  }
}

$a = new test;
var_dump($a);
$a->foobar();
$b = get_class_methods($a);
var_dump($b);

?>
--EXPECTF--
object(TeSt)#1 (1) {
  ["BaZBiP"]=>
  string(3) "yes"
}
-> 
-> yes
array(1) {
  [0]=>
  string(6) "FooBar"
}
