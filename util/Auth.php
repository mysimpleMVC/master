<?php

/**
 * 
 */
class Auth {

    public static function handleLogin() {
        @session_start();
        @$logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            header('location: '.URL.'login');
            exit;
        } 
    }
    
    public static function handleLoginAndPermissions() {
        @session_start();
        @$logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            header('location: '.URL.'login');
            exit;
        } else {
            self::handlePermission();
        }
    }

    
    public static function handlePermission() {
        
        $role = Session::get('role'); 
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = explode('/', $url);
        
        $method = '';
        if (isset($url[0]) && $url[0] != "") {
            $method = $url[0];
        }
        
        $result = myTools::getRoles($role,$method);
        
        if(empty($result)){
            header('location: '.URL.'dashboard/roleserror');
            exit;
        } 
        
        
    }

}
