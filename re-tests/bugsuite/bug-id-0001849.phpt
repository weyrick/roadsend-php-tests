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
--EXPECT--
Array
(
    [charset] => iso-8859-1
    [actiongroup_menu_move] => Move
    [actiongroup_menu_assign] => Assign
    [actiongroup_menu_close] => Close
    [actiongroup_menu_delete] => Delete
    [actiongroup_menu_resolve] => Resolve
    [actiongroup_menu_update_priority] => Update Priority
    [actiongroup_menu_update_status] => Update Status
    [all_projects] => All Projects
    [move_bugs] => Move Bugs
    [operation_successful] => Operation successful.
    [date_order] => Date Order
    [print_all_bug_page_link] => Print Reports
    [csv_export] => CSV Export
    [login_anonymously] => Login Anonymously
    [jump_to_bugnotes] => Jump to Bugnotes
    [public_project_msg] => This project is PUBLIC.  All users have access.
    [private_project_msg] => This project is PRIVATE.  Only administrators and manually added users have access.
    [access_level_project] => Project Access Level
    [view_submitted_bug_link] => View Submitted Bug
    [assigned_projects] => Assigned Projects
    [unassigned_projects] => Unassigned Projects
    [print] => Print
    [jump] => Jump
    [copy_users] => Copy Users
    [copy_categories_from] => Copy Categories From
    [copy_categories_to] => Copy Categories To
    [bug_history] => Bug History
    [hide_button] => Display selected only
    [printing_preferences_title] => Choose fields to print
    [printing_options_link] => Printing Options
    [bugnote_title] => Bugnote handler
    [bugnote_date] => Date of bugnote
    [bugnote_description] => Bugnote description
    [error_no_proceed] => Please use the "Back" button in your web browser to return to the previous page.  There you can correct whatever problems were identified in this error or select another action.  You can also click an option from the menu bar to go directly to a new section.
    [MANTIS_ERROR] => Array
        (
            [ERROR_GENERIC] => An error occurred during this action.  You may wish to report this error to your local administrator.
            [ERROR_SQL] => SQL error detected.  Please report this to
            [ERROR_REPORT] => There was an error in your report.
            [ERROR_NO_FILE_SPECIFIED] => No file specified
            [ERROR_FILE_DISALLOWED] => The file type is disallowed
            [ERROR_NO_DIRECTORY] => The directory does not exist. Please check the project settings.
            [ERROR_DUPLICATE_FILE] => This is a duplicate file.  Please delete the file first.
            [ERROR_DUPLICATE_PROJECT] => A project with that name already exists.
            [ERROR_EMPTY_FIELD] => A necessary field was empty.  Please recheck your inputs.
            [ERROR_PROTECTED_ACCOUNT] => This account is protected.  You are not allowed to access this until the account protection is lifted.
            [ERROR_ACCESS_DENIED] => Access Denied.
            [ERROR_UPLOAD_FAILURE] => File upload failed.  PHP file uploads may be disabled.  Please ask your admin to run the admin_check script to debug this problem.
            [ERROR_FILE_TOO_BIG] => File upload failed.  This is likely because the filesize was larger than is currently allowed by this PHP installation.
            [ERROR_GPC_VAR_NOT_FOUND] => A required parameter to this page was not found.
            [ERROR_USER_NAME_NOT_UNIQUE] => That username is already being used.  Please go back and select another one.
            [ERROR_CONFIG_OPT_NOT_FOUND] => Configuration option '%s' not found.
            [ERROR_LANG_STRING_NOT_FOUND] => String not found.
            [ERROR_BUGNOTE_NOT_FOUND] => Bugnote not found.
        )

    [login_error] => ERROR: your account may be disabled or the username/password you entered is incorrect.
    [login_cookies_disabled] => ERROR: Your browser either doesn't know how to handle cookies, or refuses to handle them.
)
