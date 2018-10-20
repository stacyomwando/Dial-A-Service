<?php 
   class Employee_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
    
   
      public function delete($Employee_id) { 
         if ($this->db->delete("employee", "Employee_id = ".$Employee_id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$old_Employee_id) { 
         $this->db->set($data); 
         $this->db->where("Employee_id", $old_Employee_id); 
         $this->db->update("employee", $data); 
      } 
   } 
?> 