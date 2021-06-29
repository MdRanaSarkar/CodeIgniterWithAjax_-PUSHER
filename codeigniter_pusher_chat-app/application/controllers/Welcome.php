<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}
	public function register()
	{ 

		if($this->input->post('save')){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$passw1=$this->input->post('psw');
		$query=$this->input->post("select * from user_register where email=$email");
		$nr=$query->num_rows();
		$data=array();
		if(count($nr)>0){
			$data['error']="<h3 style='color:red'>Email id already exists</h3>";
		}
		else{
			$query=$this->db->query("insert into user_register values('','$name','$email','$passw1')");
			$data['success']="<h3 style='color:blue'>Registered successfully</h3>";

			}



		}
		$this->load->view('register_d',@$data);
	}
}
