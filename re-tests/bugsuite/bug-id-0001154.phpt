--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001154.php (converted from Roadsend suite)
--FILE--
 <?php
 class Test {
     function Test() {
         ob_start(
             array(
                 $this, 'transform'
                 )
             );
     }
     
     function transform($buffer) {
         return 'success';
     }
 }

$t = new Test;


?>
--EXPECT--
 success