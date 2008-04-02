--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001824.php (converted from Roadsend suite)
--FILE--
Alternative syntax for control structures

<?
if ($foo == "no"):
$bar = $foo;
elseif ($foo = "yes"):
//dont do anything
endif;
?>

-- or --

<?
if ($foo == "no"):
//dont do anything
elseif ($foo = "yes"):
$bar = $foo;
endif;
?>
 
--EXPECT--
Alternative syntax for control structures


-- or --

 