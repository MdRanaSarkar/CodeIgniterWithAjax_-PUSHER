<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_Mail extends CI_Controller {

	public function gmailbox()
	{
	  $this->load->view('gmailform');
	}

	public function sendfunc()
	{
		$to=$this->input->post('username_my');
		$from="ranasarkar1503031@gmail.com";
		$subject="Testing to send gmail using codeigniter";
		$email_content=$this->input->post('mymsg');

		$config['protocol']='smtp';
		$config['smtp_host']='ssl://smtp.gmail.com';
		$config['smtp_port']='465';
		$config['smtp_timeout']='30';
		$config['smtp_user']='ranasarkar1503031@gmail.com';
		$config['smtp_pass']='wnbvegzevtqejwel';
		$config['charset']='utf-8';
		$config['newline']="\r\n";
		$config['mailtype'] = 'html';
		$config['wordwrap'] = TRUE;
		$this->email->initialize($config);
		$this->email->set_mailtype('html');
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($email_content);
		$this->email->send();
		
		$this->session->set_flashdata('msg',"Successfully send the messages");
		$this->session->set_flashdata('msg_class','alert-success');
		redirect(base_url('mailbox'));
	}
}
