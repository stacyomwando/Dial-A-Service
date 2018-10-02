<?php 
   Class UserModel extends CI_Model {
	
      public function __construct() { 
         parent::__construct(); 
      } 

function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('customer', $data);
}
		
   } 
?>