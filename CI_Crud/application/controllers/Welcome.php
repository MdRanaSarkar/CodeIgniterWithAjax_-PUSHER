<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	$this->load->model('user_model');
		$users=$this->user_model->showdata();
		$data=array();
		$data['users']=$users;
		$this->load->view('welcome_message',$data);
	}
	public function Create()

	{
		$this->load->view('vendor/autoload');
		$options = array(
			'cluster' => 'ap2',
			'useTLS' => true
		  );
		  $pusher = new Pusher\Pusher(
			'dafd7b56816a9c95f6e2',
			'd64ab2399a649c0d3120',
			'1176840',
			$options
		  );
		$this->load->model('user_model');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('create');
		}
		else
		{
			$array_data=array();
			$array_data['Name']=$this->input->post('name');
			$array_data['Gmail']=$this->input->post('email');
			$array_data['id']=$this->input->post('id');
			$this->user_model->create($array_data);
  			$pusher->trigger('my-channel', 'my-event', $array_data);
			$this->session->set_flashdata('success','record addedd successfully');
			redirect(base_url());

		}

	}
	public function Update($userid)
	{   
		$this->load->model('user_model');
		$users=$this->user_model->loaddata($userid);
		$data=array();
		$data['users']=$users;
		
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('update',$data);
		}
		else
		{
			$formdata=array();
			$formdata['Name']=$this->input->post('name');
			$formdata['Gmail']=$this->input->post('email');
			$this->user_model->Updatedate($userid,$formdata);
			$this->session->set_flashdata('success','record updated successfully');
			redirect(base_url());

		}

		

	}
	public function Delete($userid)
	{
		$this->load->model('user_model');
		$user=$this->user_model->loaddata($userid);
		if(empty($user)){
			$this->session->set_flashdata('failure','record not found in database');
			redirect(base_url());
		}
	
		$this->user_model->delete($userid);
		$this->session->set_flashdata('success','record has been deleted successfully');
		redirect(base_url());

	}

}

?>
