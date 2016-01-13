<?php

/**
 * User Class
 * 
 * User login
 * 
 
 * @version 1.0
 * @package Namit Holdings
 * 
 */
class User {
    # constructor

    public static $user_data = array();

    public function __construct() {
        
    }


    /**
     * Checks the login
     * @param String $user_name
     * @param String $password
     * @return boolean
     */
    public static function doLogin($user_name, $password) {
        $password = md5($password);
        self::$user_data = qs("select * from admin_users where user_name = '{$user_name}' and password = '{$password}'");        
        return empty(self::$user_data) ? false : true;
    }

    

    

    /**
     * Checks the email
     * @param String $user_name
     * @return boolean
     */
    public static function ForgotPassword($user_name) {
        return qs(sprintf("select * from admin_users where user_name = '%s'", $user_name));
    }

    /**
     *
     * @param String $user_name
     */
    public static function setSession($user_name) {
        // d(self::$user_data);
        $_SESSION['user'] = self::$user_data;
    }

    /**
     *  Kill the session
     */
    public static function killSession() {
        session_destroy();
        unset($_SESSION);
    }

    function generate_password($length = 12, $special_chars = true) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        if ($special_chars)
            $chars .= '!@#$%^&*()';
        $password = '';
        for ($i = 0; $i < $length; $i++)
            $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        return $password;
    }

    public static function initUserSession($user_name) {
        self::$user_data = qs("select * from admin_users where user_name = '{$user_name}'");
        self::$user_data['user_type'] = 'admin';
        User::setSession($user_name);
        session_regenerate_id();
        $user_activity['session_id'] = session_id();
        $user_activity['user_id'] = $_SESSION['user']['id'];
        $user_activity['user_type'] = $_SESSION['user']['user_type'];
        User_activity::add($user_activity);
    }

    public static function getCurrentUserName() {
        $userName = $_SESSION['user']['user_name'];
        if ($_SESSION['user']['user_name'] == "admin@admin.com") {
            $userName = "Master Admin";
        }
        return $userName;
    }

}

?>