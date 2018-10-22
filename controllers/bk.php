<?php

class bk extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('book_model');
  	 		$this->load->library('session');

        

}

	public function index(){
		$this->load->view('dashboard.php');

	}

	public function booking_view()
	{
		$id=$_GET["id"];
		$this->load->view('booking.php');
		
	}
	
	public function book(){
		
		$data = array(
			'firstname'=>$this->input->post('firstname'),
			'idno'=>$this->input->post('idno'),
			'phone'=>$this->input->post('firstname'),
			'address'=>$this->input->post('address'),
			'date'=>$this->input->post('date'),
		);
		
	// print_r($data);
	$this->book_model->book($data);
	$this->load->view('dashboard.php');

	}

	public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}
}
?>
