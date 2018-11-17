<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	public function index(){
		$this->load->view('content-admin/login');
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->additional->cekInputPost(['username','password']);

		if ($cek['status']){
			$data = [
				'username' => $username,
				'password' => $password,
				'created_at'=> date('Y-m-d H:i:s'),
				'updated_at'=> date('Y-m-d H:i:s')
			];
			$id = $this->model_login->insert($data);
			echo $id;
		}else{
			echo 'Error : '.$cek['postFalse'].' does not exist.';
		}
	}
}