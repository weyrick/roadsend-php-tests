--TEST--
/home/weyrick/pcc/tests/escapingtest.php (converted from Roadsend suite)
--FILE--
<?php

if ($expression) { 
    ?>
    <strong>This is true.</strong>
    <?php 
} else { 
    ?>
    <strong>This is \false.</strong>
    <?php 
}

$expression = 1;

if ($expression) { 
    ?>
    <strong>This is 'true'.</strong>
    <?php 
} else { 
    ?>
    <strong>This is false.</strong>
    <?php 
}
?>

--EXPECTF--
    <strong>This is \false.</strong>
        <strong>This is 'true'.</strong>
    