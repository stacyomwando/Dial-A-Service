<?php 
   class Customer_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("customer"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('Customer_view',$data); 
      } 
  
  
      public function update_customer_view() { 
         $this->load->helper('form'); 
         $customer_id = $this->uri->segment('3'); 
         $query = $this->db->get_where("customer",array("customer_id"=>$customer_id));
         $data['records'] = $query->result(); 
         $data['old_customer_id'] = $customer_id; 
         $this->load->view('Customer_edit',$data); 
      } 
  
      public function update_customer(){ 
         $this->load->model('Customer_Model');
			
         $data = array( 
            'customer_id' => $this->input->post('customer_id'), 
            'Firstname' => $this->input->post('Firstname'), 
            'Lastname' => $this->input->post('Lastname'),
            'idno' => $this->input->post('idno'),
            'DOB' => $this->input->post('DOB'),
            'Phone' => $this->input->post('Phone'),
            'Email' => $this->input->post('Email'),
            'password' => $this->input->post('password'),
            'category' => $this->input->post('category')       
         ); 
			
         $old_customer_id = $this->input->post('old_customer_id'); 
         $this->Customer_Model->update($data,$old_customer_id); 
			
         $query = $this->db->get("customer"); 
         $data['records'] = $query->result(); 
         $this->load->view('Customer_view',$data); 
      } 
  
      public function delete_customer() { 
         $this->load->model('Customer_Model'); 
         $customer_id = $this->uri->segment('3'); 
         $this->Customer_Model->delete($customer_id); 
   
         $query = $this->db->get("customer"); 
         $data['records'] = $query->result(); 
         $this->load->view('Customer_view',$data); 
      } 
   } 
?>