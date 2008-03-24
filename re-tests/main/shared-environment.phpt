--TEST--
/home/weyrick/pcc/tests/shared-environment.php (converted from Roadsend suite)
--FILE--
<?  
function foo() {  
  include("shared-environment.inc");  
  print("my root dir is $root\n"); 
} 
foo();
?>

--EXPECTF--
 my root dir is /home/pornmonger/
