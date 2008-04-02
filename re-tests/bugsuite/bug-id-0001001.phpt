--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001001.php (converted from Roadsend suite)
--FILE--
<?

class aclass {
  var $myarray = array();
  function aclass() {
    $this->myarray[] = 'one';
    $this->myarray[] = 'two';
    var_dump($this->myarray);
  }
}

$a =& new aclass();
$b =& new aclass();
$c = new aclass();

?>
--EXPECT--
array(2) {
  [0]=>
  string(3) "one"
  [1]=>
  string(3) "two"
}
array(2) {
  [0]=>
  string(3) "one"
  [1]=>
  string(3) "two"
}
array(2) {
  [0]=>
  string(3) "one"
  [1]=>
  string(3) "two"
}
