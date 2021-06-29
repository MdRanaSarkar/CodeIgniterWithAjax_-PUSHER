<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function create($array_data)
	{
		$this->db->insert('crud',$array_data);
	}
	public function showdata()
	{
		return $users=$this->db->get('crud')->result_array();
	}
	public function loaddata($userid)
	{   $this->db->where('id',$userid);
		return $users=$this->db->get('crud')->row_array();
	}
	public function Updatedate($userid,$formdata)

	{
		$this->db->where('id',$userid);
		$this->db->update('crud',$formdata);
	}

	public function delete($userid)
	{
		$this->db->where('id',$userid);
		$this->db->delete('crud');
		
	}
}

