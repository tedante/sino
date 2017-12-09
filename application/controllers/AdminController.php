<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('status') != 'Admin') {
			redirect('LoginController','refresh');
		}
	}

	public function index() {
		echo "string";
	}

}

/* End of file AdminController.php */
/* Location: ./application/controllers/AdminController.php */