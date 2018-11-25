<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	public function index(){
		$this->output->cache(1);
		$this->load->view('content-admin/login');
	}

	public function auth(){
		$this->output->delete_cache('admin/login');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->additional->cekInputPost(['username','password']);
		
		if (!$cek['status']){
			return redirect('admin/login') or exit();
		}

		$data = [
			'username' => $username,
			'password' => $password,
		];
		$res = $this->model_user->get($data);
		if($res->num_rows() != 0){
			$res = $res->result();
			$data2 = [
				'id' => $res[0]->id,
				'role' => $res[0]->role,
				'name' => $res[0]->name
			];
			$user = array_merge($data,$data2);
			$this->session->set_userdata($user);
			$pass = $this->additional->encryptSess($this->session->userdata('password'),'password');
			$id = $this->additional->encryptSess($this->session->userdata('id'),'id');
			$this->session->set_userdata('password',$pass);
			$this->session->set_userdata('id',$id);
			redirect('admin/home');
		}else{
			$this->session->set_flashdata('username',$username);
			$this->session->set_flashdata('password',$password);
			$this->session->set_flashdata('error_msg_login','Wrong Username or Password');
			return redirect('admin/login') or exit();
		}
	}

	public function logout(){
		session_destroy();
		redirect('admin/login');
	}

}