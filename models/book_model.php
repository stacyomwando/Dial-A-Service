<?php
class book_model extends CI_Model{


public function book($data){
// Inserting in Table(booking) of Database(Dial A Service )
$this->db->insert('booking', $data);
}
public function getPosts(){

  $this->db->select("firstname,lastname,email,phone,image,constituency,ward,description,type,empid"); 
  $this->db->from('employee');
  $query = $this->db->get();
  return $query->result();
}
}
?>