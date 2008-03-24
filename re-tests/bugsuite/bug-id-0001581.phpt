--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001581.php (converted from Roadsend suite)
--FILE--
 up here
<?

class aclass {

   var $exit=1;

   function hi() {
     if ($this->exit) {
       exit;
     } else
       print "sucked";
   }

}

$a = new aclass();
$a->hi();

?>
down here

--EXPECTF--
 up here
