<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_Controller extends CI_Controller {

	public function index()
	{
		$data['page'] = 'home';
		$this->load->view('layout/master',$data);
	}

	public function postPage()
	{
		$data['page'] = 'post-page';
		$this->load->view('layout/master',$data);
	}
	
	public function post()
	{
		$data['page'] = 'post';
		$this->load->view('layout/master',$data);
	}
}
