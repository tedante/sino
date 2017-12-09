<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('LoginModel');
	}

	public function index() {
		$view_data = array(
	        	'page_title' => 'Login'
        	);
		$this->theme->display('welcome', $view_data);
	}

	public function loginProccess() {
		$this->form_validation->set_rules('ni', 'Nomor Induk', 'required');
		$this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$ni = $this->input->post('ni');
			$password = $this->input->post('password');

			$status = $this->LoginModel->check_user($ni, $password);

			if ($status == 'Admin') {
				$data = array(
					'status' => 'Admin',
					'ni' => $ni,
					'login' => TRUE 
				);
				$this->session->set_userdata($data);
				redirect('AdminController','refresh');
			} 
			// else if($status == 'Guru') {
				
			// } else if($status == 'Siswa') {

			// } 
			else {
				redirect('LoginController','refresh');
			}
		} else {
			# code...
		}
	}
}

/* End of file LoginController.php */
/* Location: ./application/controllers/LoginController.php */