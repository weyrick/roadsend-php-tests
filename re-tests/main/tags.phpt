--TEST--
/home/weyrick/pcc/tests/tags.php (converted from Roadsend suite)
--FILE--
<? echo ("this is the simplest, an SGML processing instruction\n"); ?>
<?= expression ?> This is a shortcut for "<? echo expression ?>"
    
<?php echo("if you want to serve XHTML or XML documents, do like this\n"); ?>

<script language="php">
   echo ("some editors (like FrontPage) don't like processing instructions");
</script>

<% echo ("You may optionally use ASP-style tags"); %>

<%= $variable; # This is a shortcut for "<% echo . . ." %>

--EXPECTF--
this is the simplest, an SGML processing instruction
expression This is a shortcut for "expression"
    
if you want to serve XHTML or XML documents, do like this

some editors (like FrontPage) don't like processing instructions
<% echo ("You may optionally use ASP-style tags"); %>

<%= $variable; # This is a shortcut for "<% echo . . ." %>
