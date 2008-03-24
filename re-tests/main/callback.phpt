--TEST--
/home/weyrick/pcc/tests/callback.php (converted from Roadsend suite)
--FILE--
<?php

function callback($buffer) {

  // replace all the apples with oranges
  return (ereg_replace("apples", "oranges", $buffer));

}

ob_start("callback");

?>

<html>
<body>
<p>It's like comparing apples to oranges.
</body>
</html>

<?php

ob_end_flush();

?>

--EXPECTF--

<html>
<body>
<p>It's like comparing oranges to oranges.
</body>
</html>

