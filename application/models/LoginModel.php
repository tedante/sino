<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function check_user($ni, $password) {
		$query = $this->db->get_where('login_guru', array(
			'nip' => $ni,
			'password' => md5($password)
		), 1, 0);

		if($query->num_rows() > 0) {
			return 'Admin';
		} else {
			return 'Error';
		}
	}

}

/* End of file LoginModel.php */
/* Location: ./application/models/LoginModel.php */