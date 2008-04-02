--TEST--
/home/weyrick/pcc/tests/shutdown_function.php (converted from Roadsend suite)
--FILE--
<?php


function shut() {
    echo "shutdown complete\n";
}

function shut2() {
    echo "just kidding! this is really it though\n";
}

register_shutdown_function('shut');
register_shutdown_function('shut2');

echo "still running, last command\n";

?>
--EXPECT--
still running, last command
shutdown complete
just kidding! this is really it though
