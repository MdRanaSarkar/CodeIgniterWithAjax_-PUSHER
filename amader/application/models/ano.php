<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ano extends CI_Model {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
	
	public function get_data() {
		$query = $this->db->query("SELECT * from categories ORDER BY id DESC LIMIT 5");
		
		return $query->result();
	}
	public function mishu($data){
		$query = $this->db->query("SELECT * from categories ORDER BY id DESC LIMIT 5 OFFSET $data");
		return $query->result();
	}
	public function in_data($data){
		$this->db->insert('categories', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function count_data(){
		$query = $this->db->query("SELECT * from categories ORDER BY id ASC");
		return $query->num_rows();
	}
	
}
?>