<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model {
	/*const $created_at = date("Y-m-d H:i:s");
	const $updated_at = $created_at;
	$table = 'user';*/

	public function insert($obj){
		if ($this->db->insert($table, $data)){
			$insert_id = $this->db->insert_id();
		}
		else{
			$insert_id = NULL;
		}
		return $insert_id;
	}
}