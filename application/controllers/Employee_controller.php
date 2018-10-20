<?php 
   class Employee_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("employee"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('Employee_view',$data); 
      } 
  
  
      public function update_employee_view() { 
         $this->load->helper('form'); 
         $Employee_id = $this->uri->segment('3'); 
         $query = $this->db->get_where("employee",array("Employee_id"=>$Employee_id));
         $data['records'] = $query->result(); 
         $data['old_Employee_id'] = $Employee_id; 
         $this->load->view('Employee_edit',$data); 
      } 
  
      public function update_employee(){ 
         $this->load->model('Employee_Model');
			
         $data = array( 
            'Employee_id' => $this->input->post('Employee_id'), 
            'Category' => $this->input->post('Category'), 
            'county' => $this->input->post('county'),
            'constituency' => $this->input->post('constituency'),
            'municipality' => $this->input->post('municipality')
                
         ); 
			
         $old_Employee_id = $this->input->post('old_Employee_id'); 
         $this->Employee_Model->update($data,$old_Employee_id); 
			
         $query = $this->db->get("employee"); 
         $data['records'] = $query->result(); 
         $this->load->view('Employee_view',$data); 
      } 
  
      public function delete_employee() { 
         $this->load->model('Employee_Model'); 
         $Employee_id = $this->uri->segment('3'); 
         $this->Employee_Model->delete($Employee_id); 
   
         $query = $this->db->get("employee"); 
         $data['records'] = $query->result(); 
         $this->load->view('Employee_view',$data); 
      } 
   } 
?>