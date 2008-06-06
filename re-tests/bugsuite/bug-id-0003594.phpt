--TEST--
bug-id-0003594.php: test unset on references
--FILE--
<?php

	$a='A';						
	$b=&$a;
	unset($a);
	var_dump($a);			// Should 'A', is NULL
	var_dump($b);			// Should 'A', is NULL
	  
        class a{
                function a(){
                        $this->y='A';
                        $this->x[1]=&$this->y;
                }
                function sleep(){
                        unset($this->y);
                }
        }

        $a=new a();
        $a->sleep();
        var_dump($a);
	
?>
--EXPECTF--
NULL
string(1) "A"
object(a)#%d (1) {
  ["x"]=>
  array(1) {
    [1]=>
    &string(1) "A"
  }
}
