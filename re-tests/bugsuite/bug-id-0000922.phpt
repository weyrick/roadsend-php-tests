--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000922.php (converted from Roadsend suite)
--FILE--
<?php


class NumberIterator
{
    function next() 
    {
      print "I'm your wurst nightmare\n";
    }

}

NumberIterator::next();

?>

--EXPECTF--
I'm your wurst nightmare
