<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model 
{
	private $created_at; 
	private $updated_at;
	private $table;

	function __construct()
    {
		parent::__construct();
        $this->created_at = date("Y-m-d H:i:s");
		$this->updated_at = $this->created_at;
		$this->table = 'user';
    }

	public function insert($data)
	{
		if ($this->db->insert($this->table, $data))
		{
			$insert_id = $this->db->insert_id();
		}
		else
		{
			$insert_id = NULL;
		}
		return $insert_id;
	}

	public function get($dataCondition = NULL,$limit = NULL,$offset = NULL,$status = 1)
	{
		if($offset != NULL && $limit != NULL){
			$this->db->limit($limit,$offset);
		}
		else if($limit != NULL){
			$this->db->limit($limit);
		}

		if($dataCondition != NULL){
			$this->db->where($dataCondition);
		}
		$this->db->order_by('id', 'ASC');
		$this->db->where('status',$status);
		$res = $this->db->get($this->table);
		return $res;
	}

	public function coba()
	{
		return $this->created_at;
	}
}