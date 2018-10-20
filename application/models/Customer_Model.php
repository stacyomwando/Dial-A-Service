<?php 
   class Customer_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
    
   
      public function delete($customer_id) { 
         if ($this->db->delete("customer", "customer_id = ".$customer_id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$old_customer_id) { 
         $this->db->set($data); 
         $this->db->where("customer_id", $old_customer_id); 
         $this->db->update("customer", $data); 
      } 
   } 
?> 