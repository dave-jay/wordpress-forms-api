<?php

/**
 * Admin side Login file
 * 
 * 
 
 * @version 1.0
 * @package Namit Holdings
 * 
 */
$login_error = '';
if ($_REQUEST['submit']) {
    if (($_REQUEST['email']) || $_REQUEST['email'] != '') {
        $user_name = _escape($_REQUEST['email']);
        $password = _escape($_REQUEST['password']);

        if (User::doLogin($user_name, $password)) {
            User::setSession($user_name);		
        } else {
            //$error = "Invalid Login";
            $login_error = 1;
        }
    } else {
        //$error = "Invalid Login";
        $login_error = 1;
    }
}


if (isset($_SESSION['user'])) {
    _R(lr('api_settings'));
}

$login_action_url = "?q=login_new";
$no_visible_elements = true;
$jsInclude = "login_new.js.php";

_cg("page_title", "Login");
?>