--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000727.php (converted from Roadsend suite)
--FILE--

0000727 


instantiate a class based on a classname from an array

<?

class foo {
  var $directive = array('columnClass' => 'bar');

  function makeOne() {
    //create a new tableDefinition object
    $columnDef =& new $this->directive['columnClass']();
    $columnDef->zot();
  }
}

class bar {
  function zot() {
    echo "they've spotted us\n";
  }
}

$afoo = new foo();
$afoo->makeOne();


?>
 	
--EXPECT--

0000727 


instantiate a class based on a classname from an array

they've spotted us
 	
