
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_model extends CI_Model {


	public function data_add($data)
	{
		$res=$this->db->insert('ajax_crud',$data);
		return $res;
	}
}
