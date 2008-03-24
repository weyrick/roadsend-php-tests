--TEST--
/home/weyrick/pcc/tests/stringtest.php (converted from Roadsend suite)
--FILE--
<?php
echo "this $ is a $zap[zowie] dqstring $foo\n\"$";

echo "this is a [test] of brackets";

echo "double \
      quoted \
      with \
      backslash-newlines";

echo 'single \
      quoted \
      with \
      backslash-newlines';

?>
--EXPECTF--
this $ is a  dqstring 
"$this is a [test] of bracketsdouble \
      quoted \
      with \
      backslash-newlinessingle \
      quoted \
      with \
      backslash-newlines