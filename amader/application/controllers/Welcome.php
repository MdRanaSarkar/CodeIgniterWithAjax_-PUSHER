<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function count_data(){
		$this->load->view('count');
	}
	
	public function test(){
		$this->load->view('vendor/autoload.php');

  

  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '110d0cbea269c523cd61',
    '54d20cd5731bb8edce14',
    '1153564',
    $options
  );
  $this->load->model('ano');
  $data = $this->ano->get_data();
  $data2 = $this->ano->count_data();
  $mina = array_reverse($data);
	

	  
  
  $pusher->trigger('amader', 'activity-updated', $mina);
  $pusher->trigger('amader', 'count-data', $data2);
  $pusher->trigger('amader', 'chart-data', $data2);
 
	}
	
	public function inp(){
		if($this->input->post('jib')==1){
			$data = array(
                    'name' => $this->input->post('categories'),
                    
                    );
		$this->load->model('ano');
        $result = $this->ano->in_data($data);
		if ($result == TRUE) {
			echo 'submitted';
		} else {
			echo 'not submitted';
		}
		}
		
		
	}
	
	public function tanjina(){
		if($this->input->post('jib')==1){
			$data = $this->input->post('categories');
                  
                    
                    
		$this->load->model('ano');
        $result = $this->ano->mishu($data);
		
		
			$mina = array_reverse($result);
			echo json_encode($mina);
		
		
        
		}
	}
	public function chart(){
		$this->load->view('chart');
	}
}
