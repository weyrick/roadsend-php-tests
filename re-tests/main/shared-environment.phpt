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
--EXPECT--
 my root dir is /home/pornmonger/
