
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class my_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function create()
	{
		$name=$this->input->post('username');
		$message=$this->input->post('messagetext');
		$age=$this->input->post('age');

		$data=array(
			'name'=>$name,
			'message'=>$message,
			'age'=>$age
		);
		$this->load->model('crud_model');
		$result=$this->crud_model->data_add($data);
		echo json_encode($result);
	}
	
}
