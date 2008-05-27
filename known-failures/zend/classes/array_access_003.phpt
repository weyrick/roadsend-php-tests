--TEST--
ZE2 ArrayAccess::offsetGet ambiguties
--INI--
error_reporting=4095
--KNOWNFAILURE--
there's probably a good reason Zend doesn't allow the assignment via postcrement
with an overloaded method, but damned if i know what it is. leaving this incompatible
for now, but which functions as one would expect.
--FILE--
<?php
class object implements ArrayAccess {

	public $a = array('1st', 1, 2=>'3rd', '4th'=>4);

	function offsetExists($index) {
		echo __METHOD__ . "($index)\n";
		return array_key_exists($index, $this->a);
	}
	function offsetGet($index) {
		echo __METHOD__ . "($index)\n";
		switch($index) {
		case 1:
			$a = 'foo';
			return $a . 'Bar';
		case 2:
			static $a=1;
			return $a;
		}
		return $this->a[$index];
	}
	function offsetSet($index, $newval) {
		echo __METHOD__ . "($index,$newval)\n";
		if ($index==3) {
			$this->cnt = $newval;
		}
		return $this->a[$index] = $newval;
	}
	function offsetUnset($index) {
		echo __METHOD__ . "($index)\n";
		unset($this->a[$index]);
	}
}

$obj = new Object;

var_dump($obj[1]);
var_dump($obj[2]);
$obj[2]++;
var_dump($obj[2]);

?>
===DONE===
--EXPECTF--
object::offsetGet(1)
string(6) "fooBar"
object::offsetGet(2)
int(1)
object::offsetGet(2)

Notice: Indirect modification of overloaded element of object has no effect in %sarray_access_003.php on line 39
object::offsetGet(2)
int(1)
===DONE===
