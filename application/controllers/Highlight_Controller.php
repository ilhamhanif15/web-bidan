<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Highlight_Controller extends CI_Controller {

	public function index()
	{
		$data['page'] = 'highlight';
		$this->load->view('layout-admin/master',$data);
	}
}
