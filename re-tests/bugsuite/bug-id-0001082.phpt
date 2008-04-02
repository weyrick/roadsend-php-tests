--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001082.php (converted from Roadsend suite)
--FILE--
<?

$test = 'some string';

$test['user'] = 'bleh';
$test['db'] = 'blah';

var_dump($test);

$test = '';

$test['user'] = 'bleh';
$test['db'] = 'blah';

var_dump($test);

$test = 'some string';

$test[0] = 'blah';
$test[1] = 'c';

var_dump($test);

$test = 'some string';

$test[0] = 'blah';
$test[1] = 'c';

var_dump($test);

$test = '';

$test[0] = 'blah';
$test[1] = 'c';

var_dump($test);



?>
--EXPECT--
string(11) "bome string"
array(2) {
  ["user"]=>
  string(4) "bleh"
  ["db"]=>
  string(4) "blah"
}
string(11) "bcme string"
string(11) "bcme string"
array(2) {
  [0]=>
  string(4) "blah"
  [1]=>
  string(1) "c"
}
