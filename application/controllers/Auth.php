<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		$this->load->model("User","user");
	}

	public function index()
	{

		$this->load->view('auth/login');
	}

	public function login()
	{
		$result = $this->user->login($_POST['email'],$_POST['password']);
		if (!isset($result->id)) {
			return json_encode(["status"=>false,"result"=>null,"message"=>"Unauthenticated"]);
		}else{
			$this->session->set_userdata([
				"user"=>$result
			]);
			return json_encode(["status"=>false,"result"=>["name"=>$result->name,"email"=>$result->email],"message"=>"Success"]);
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */