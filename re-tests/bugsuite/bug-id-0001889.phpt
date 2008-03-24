--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001889.php (converted from Roadsend suite)
--FILE--
this is similar to what sitemanager does.  it should help us ferret out 
copying problems.

<?

class tag {
  var $txt;
  function tag($t) {
    $this->txt = $t;
  }
}

class tpt {
  var $tags;
  function tpt() {
    $this->tags[] =& new tag('inited');
  }
  function addmore() {
    $this->tags[] =& new tag('more here');
  }
}

class root {
  var $tlist = array();

  function newtpt($key) {

    if (isset($this->tlist[$key])) {
      echo "found cache for $key\n";
      return $this->tlist[$key];
    }

    echo "no cache for $key\n";
    $newTemplate =& new tpt();

    // cache it
    $this->tlist[$key] =& $newTemplate;

    // return new template
    return $newTemplate;

  }
}


$r =& new root();

$t =& $r->newtpt('thiskey');
var_dump($t);
$t->addmore();
var_dump($t);

$t2 =& $r->newtpt('thiskey');
var_dump($t2);
$t2->addmore();
var_dump($t2);



?>

--EXPECTF--
this is similar to what sitemanager does.  it should help us ferret out 
copying problems.

no cache for thiskey
object(tpt)#2 (1) {
  ["tags"]=>
  array(1) {
    [0]=>
    object(tag)#3 (1) {
      ["txt"]=>
      string(6) "inited"
    }
  }
}
object(tpt)#2 (1) {
  ["tags"]=>
  array(2) {
    [0]=>
    object(tag)#3 (1) {
      ["txt"]=>
      string(6) "inited"
    }
    [1]=>
    object(tag)#4 (1) {
      ["txt"]=>
      string(9) "more here"
    }
  }
}
found cache for thiskey
object(tpt)#2 (1) {
  ["tags"]=>
  array(2) {
    [0]=>
    object(tag)#3 (1) {
      ["txt"]=>
      string(6) "inited"
    }
    [1]=>
    object(tag)#4 (1) {
      ["txt"]=>
      string(9) "more here"
    }
  }
}
object(tpt)#2 (1) {
  ["tags"]=>
  array(3) {
    [0]=>
    object(tag)#3 (1) {
      ["txt"]=>
      string(6) "inited"
    }
    [1]=>
    object(tag)#4 (1) {
      ["txt"]=>
      string(9) "more here"
    }
    [2]=>
    object(tag)#5 (1) {
      ["txt"]=>
      string(9) "more here"
    }
  }
}
