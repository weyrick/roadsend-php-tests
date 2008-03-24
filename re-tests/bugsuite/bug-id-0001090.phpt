--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001090.php (converted from Roadsend suite)
--FILE--
precedence problem with ugly if operator

<?

$m = true;
$t = '';
$g = 'something';
echo 'answer is '.($t != '' && $m ? 'yes' : 'no').' <-- yeah';


?>

/*
this line:
($t != '' && $m ? 'yes' : 'no')
is currently parsed like this:
(($t != '') && ($m ? 'yes' : 'no'))
needs to be like this:
((($t != '') && $m) ? 'yes' : 'no')
*/
--EXPECTF--
precedence problem with ugly if operator

answer is no <-- yeah
/*
this line:
($t != '' && $m ? 'yes' : 'no')
is currently parsed like this:
(($t != '') && ($m ? 'yes' : 'no'))
needs to be like this:
((($t != '') && $m) ? 'yes' : 'no')
*/