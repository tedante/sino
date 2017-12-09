<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index() {
		$view_data = array(
	        	'page_title' => 'Login'
        	);
		$this->theme->display('welcome', $view_data);
	}

	
}

/* End of file LoginController.php */
/* Location: ./application/controllers/LoginController.php */