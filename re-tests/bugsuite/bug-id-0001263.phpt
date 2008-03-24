--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001263.php (converted from Roadsend suite)
--FILE--
When an object is copied, you need to copy the properties, 
not just the hashtable that holds them.  Tarnation.

<?

class template {
    var $myVal = array("foo" => array());
    
    function add($k) {
      $this->myVal["foo"][$k] = "foo";//& new tag($k);
    }
}


$foo = new template();
//the copy
$bar = $foo;
//adds 'asdf' to both objects because they share the myVal array
$bar->add('asdf');

var_dump($foo);
var_dump($bar);

//this problem exists for hashes, too

echo "hashes\n";
$zip['bar'] = array();
$ping = $zip;
$ping['ping'][] = 2;

var_dump($zip);
var_dump($ping);


?>
--EXPECTF--
When an object is copied, you need to copy the properties, 
not just the hashtable that holds them.  Tarnation.

object(template)#1 (1) {
  ["myVal"]=>
  array(1) {
    ["foo"]=>
    array(1) {
      ["asdf"]=>
      string(3) "foo"
    }
  }
}
object(template)#1 (1) {
  ["myVal"]=>
  array(1) {
    ["foo"]=>
    array(1) {
      ["asdf"]=>
      string(3) "foo"
    }
  }
}
hashes
array(1) {
  ["bar"]=>
  array(0) {
  }
}
array(2) {
  ["bar"]=>
  array(0) {
  }
  ["ping"]=>
  array(1) {
    [0]=>
    int(2)
  }
}
