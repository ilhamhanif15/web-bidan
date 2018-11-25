<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function index()
	{
		$data['page'] = 'home';
		$this->load->view('layout-admin/master',$data);
	}

	public function user()
	{
		$data['page'] = 'user';
		$list = $this->model_user->get();
		$data['list'] = $list;
		$this->load->view('layout-admin/master',$data);
	}

}
