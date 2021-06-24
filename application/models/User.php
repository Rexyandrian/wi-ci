<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function detail()
	{
		// $query = $this->db->query("SELECT * from users where")
	}

	public function login($email,$password)
	{
		$query = $this->db->query("SELECT * from users where email = ? and password = ?",[$email,md5($password)],true);
		return $query->result();
	}
}

/* End of file User.php */
/* Location: ./application/models/User.php */