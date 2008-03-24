--TEST--
/home/weyrick/pcc/tests/closingtag.php (converted from Roadsend suite)
--FILE--
<?php
    echo "This is a test";
?>

<?php echo "This is a test" ?>

--EXPECTF--
This is a test
This is a test