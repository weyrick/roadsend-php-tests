--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0000732.php (converted from Roadsend suite)
--FILE--
0000732 parse error on complicated constant define()

<?php

function afunction_exists($a) {
  return true;
}

function aversion_compare($a, $b, $c) {
  return "mofunctioncall";
}

function azend_version() {
  return 1;
}

define('PEAR_ZE2', (afunction_exists('version_compare') && aversion_compare(azend_version(), "2-dev", "ge")));

echo PEAR_ZE2 . "\n";

?>
--EXPECT--
0000732 parse error on complicated constant define()

1
