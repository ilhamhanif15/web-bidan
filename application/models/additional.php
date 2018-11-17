<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class additional extends CI_Model {

	public function cekInputPost($arrCek){
		$status = TRUE;
		$numFalse = NULL;
		$postFalse = NULL;
		for ($i=0; $i < sizeof($arrCek); $i++) { 
			if($this->input->post($arrCek[$i]) == NULL){
				$status = FALSE;
				$numFalse = $i;
				$postFalse = $arrCek[$i];
				$i = sizeof($arrCek);
			}
		}
		$dataReturn = [
			'status' => $status,
			'numFalse' => $numFalse,
			'postFalse' => $postFalse
		];
		return $dataReturn;
	}
}