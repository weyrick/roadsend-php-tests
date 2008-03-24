--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000731.php (converted from Roadsend suite)
--FILE--
0000731 parse error magically making a number negative

<?
$str=5;
echo -$str . "\n";

echo -($str) . "\n";
echo -($str+1) . "\n";




class foo {
  var $directive = array('vfSeparator' => "asdf");

  function foo() {
    $title = "wibble";
    $cutVal = strlen($this->directive['vfSeparator']);
    $title = substr($title, 0, -$cutVal);
    echo "$cutVal, $title\n";
  }

}


$zot = new foo();

?>



--EXPECTF--
0000731 parse error magically making a number negative

-5
-5
-6
4, wi


