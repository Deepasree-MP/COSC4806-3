<?php

class Home extends Controller {

    public function index() {
      $user = $this->model('User');
      $data = $user->get_all_users();
			
	    $this->view('home/index');
	    die;
    }

}
