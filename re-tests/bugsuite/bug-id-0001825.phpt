--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001825.php (converted from Roadsend suite)
--FILE--
If the last semicolon before the '?>' is skipped, there is a comment on the same 
line as the last line of code and the end tag is also on the line, pcc pukes.

<? echo "goodbye, cruel world\n" //some comment ?>

foo
--EXPECT--
If the last semicolon before the '?>' is skipped, there is a comment on the same 
line as the last line of code and the end tag is also on the line, pcc pukes.

goodbye, cruel world

foo
