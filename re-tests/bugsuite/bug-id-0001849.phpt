--TEST--
/home/weyrick/pcc/bugs/tests/bug-id-0001849.php (converted from Roadsend suite)
--FILE--
<?

//include('constant_inc.php');

function lang_load( $p_lang ) {
    global $g_lang_strings, $g_lang_current;
		
//     if ( $g_lang_current == $p_lang ) {
// 	return;
//     }
		
    // define current language here so that when custom_strings_inc is
    // included it knows the current language
    $g_lang_current = $p_lang;

    //$t_lang_dir = dirname ( dirname ( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR;
    $t_lang_dir = './';
    require_once( $t_lang_dir . 'strings_'.$p_lang.'.inc' );		
		
    $t_vars = get_defined_vars();
    //    print(sizeof($t_vars) . "\n");
    //    print_r(array_keys($t_vars));
    foreach ( array_keys( $t_vars ) as $t_var ) {
	$t_lang_var = ereg_replace( '^s_', '', $t_var );
	if ( $t_lang_var != $t_var || 'MANTIS_ERROR' == $t_var ) {
	    $g_lang_strings[$t_lang_var] = $$t_var;
	}
    }

}

lang_load('english');

print_r($g_lang_strings);
//print_r(array_keys(get_defined_vars()));
?>

--EXPECTF--

Warning: require_once(./strings_english.inc): failed to open stream: No such file or directory in /home/weyrick/workspace/pcc/bugs/tests/bug-id-0001849.php on line 18

Fatal error: require_once(): Failed opening required './strings_english.inc' (include_path='.:/usr/share/php5:/usr/share/php:/home/weyrick/workspace/siteManager4:/var/www/producersweb.com/admin') in /home/weyrick/workspace/pcc/bugs/tests/bug-id-0001849.php on line 18
