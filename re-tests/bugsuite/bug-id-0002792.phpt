--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0002792.php (converted from Roadsend suite)
--FILE--
 <?php

// if this is uncommented, results are the same as php
//$foo = 0;

function loop() {

//last time I looked at this, the ++ in the interpreter wasn't
//using eval-assign.  I don't think that zend will assign back
//for -- (though they do for ++), which I consider retarded.  --tpd
        $GLOBALS['foo']++;
        echo $GLOBALS['foo']."\n";
 
}

for ($i = 0; $i < 10; $i++) {
        loop();
}


?>
done
--EXPECT--
 1
2
3
4
5
6
7
8
9
10
done
