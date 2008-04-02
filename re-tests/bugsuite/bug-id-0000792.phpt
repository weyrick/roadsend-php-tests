--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000792.php (converted from Roadsend suite)
--FILE--
0000792 parse error using class property name 'class'

<?

class t {
  var $class = '';
  function t () {
    $this->class = 'woops';
  }
}


?>
--EXPECT--
0000792 parse error using class property name 'class'

