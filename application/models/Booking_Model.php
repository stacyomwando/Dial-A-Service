<?php 
   class Booking_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 

   
      public function delete($booking_id) { 
         if ($this->db->delete("booking", "booking_id = ".$booking_id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$old_booking_id) { 
         $this->db->set($data); 
         $this->db->where("booking_id", $old_booking_id); 
         $this->db->update("booking", $data); 
      } 
   } 
?> 