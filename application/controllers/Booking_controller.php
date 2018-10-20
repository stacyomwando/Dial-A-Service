<?php 
   class Booking_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("booking"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('Booking_view',$data); 
      } 
  
  
      public function update_booking_view() { 
         $this->load->helper('form'); 
         $booking_id = $this->uri->segment('3'); 
         $query = $this->db->get_where("booking",array("booking_id"=>$customer_id));
         $data['records'] = $query->result(); 
         $data['old_booking_id'] = $booking_id; 
         $this->load->view('Booking_edit',$data); 
      } 
  
      public function update_booking(){ 
         $this->load->model('Customer_Model');
			
         $data = array( 
            'booking_id' => $this->input->post('booking_id'), 
            'Firstname' => $this->input->post('Firstname'), 
            'Lastname' => $this->input->post('Lastname'),
            'idno' => $this->input->post('idno'),
            'Phone' => $this->input->post('Phone'),
            'address' => $this->input->post('address'),
            'date' => $this->input->post('date')       
         ); 
			
         $old_booking_id = $this->input->post('old_booking_id'); 
         $this->Booking_Model->update($data,$old_booking_id); 
			
         $query = $this->db->get("customer"); 
         $data['records'] = $query->result(); 
         $this->load->view('Customer_view',$data); 
      } 
  
      public function delete_booking() { 
         $this->load->model('Booking_Model'); 
         $booking_id = $this->uri->segment('3'); 
         $this->Booking_Model->delete($booking_id); 
   
         $query = $this->db->get("booking"); 
         $data['records'] = $query->result(); 
         $this->load->view('Booking_view',$data); 
      } 
   } 
?>