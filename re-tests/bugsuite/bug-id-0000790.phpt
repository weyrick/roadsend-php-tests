--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000790.php (converted from Roadsend suite)
--FILE--
0000790 support for here docs

<?


// here doc
$pageOutput = <<< END

foohi this is a 'here doc'
can you put all kinds of \n $noise in " it?

END;

echo $pageOutput;


?>



	parse error:
<?php

/* work around IE6's scrollbar bug */
echo <<<ECHO
<style type="text/css">
<!--
/* avoid stupid IE6 bug with frames and scrollbars */
body {
voice-family: "\"}\"";
voice-family: inherit;
width: expression(document.documentElement.clientWidth - 30);
}
-->
</style>

ECHO;

?>

--EXPECTF--
0000790 support for here docs


foohi this is a 'here doc'
can you put all kinds of 
  in " it?



	parse error:
<style type="text/css">
<!--
/* avoid stupid IE6 bug with frames and scrollbars */
body {
voice-family: "\"}\"";
voice-family: inherit;
width: expression(document.documentElement.clientWidth - 30);
}
-->
</style>
