<?php

class Logout extends Controller {

    public function index() {		
	    session_start();
        $_SESSION = array();
        /*echo '<h3>Session contents before clearing:</h3>';
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
        die;*/
        session_destroy();
        header('location:/login');
    }
}