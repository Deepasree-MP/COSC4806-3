<?php

class Login extends Controller {

    public function index() {		
	    $this->view('login/index');
    }
    
    /*public function verify(){
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
		
			$user = $this->model('User');
			$user->authenticate($username, $password); 
    }*/

		public function verify() {
				$username = $_POST['username'];
				$password = $_POST['password'];

				$user = $this->model('User');
				$authUser = $user->authenticate($username, $password);

				if ($authUser) {
						$_SESSION['auth'] = 1;
						$_SESSION['username'] = ucwords($username);
						unset($_SESSION['failedAuth']);
						header('Location: /home');
						die;
				} else {
						if (!isset($_SESSION['failedAuth'])) {
								$_SESSION['failedAuth'] = 1;
						} else {
								$_SESSION['failedAuth']++;
						}
						header('Location: /login');
						die;
				}
		}


}
