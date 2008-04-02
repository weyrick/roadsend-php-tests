--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001120.php (converted from Roadsend suite)
--FILE--
 <?php

$filename = dirname(__FILE__)."/test.csv";
#echo "test filename: $filename\n";

if (file_exists($filename))
   unlink($filename);

$fp = fopen($filename, "w");
fwrite($fp, '"One","\"Two\"","Three\"","Four","\\\\",foo,"\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"\\\\,\\\\"'."\n");
fclose($fp);

$fp = fopen($filename, "r");
while (($line = fgetcsv($fp, 1024)))
   var_dump($line);
fclose($fp);

?>
--EXPECT--
 array(7) {
  [0]=>
  string(3) "One"
  [1]=>
  string(7) "\"Two\""
  [2]=>
  string(7) "Three\""
  [3]=>
  string(4) "Four"
  [4]=>
  string(2) "\\"
  [5]=>
  string(3) "foo"
  [6]=>
  string(29) "\\\\\\\\\\\\\\\\\\\\\\\"\\,\\"
}
