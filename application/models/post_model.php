<?php
/**
 * 
 */
class post_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

/*	public function get_posts($slug=FALSE)
	{
		if ($slug === FALSE) {
			//$this->db->order_by('id', 'DESC' );
			$query = $this->db->get('post');
			return $query->result_array();
		}

		$query = $this->db->get_where('booking', array('slug' => $slug));
		return $query->row_array();
	}

	public function create_post($post_image)
	{
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			'post_image' => $post_image
		);

		return $this->db->insert('post', $data);
	}

	public function delete_post($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('post');
		return true;
	}

	public function update_post()
	{
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body')
		);

		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('post', $data);

	}*/

	public function fetch_data()
	{


			//$this->db->order_by('id', 'DESC' );
			$query = $this->db->get('booking');
			return $query->result_array();

	}
	/*function fetch_data($query)
     {

      $this->db->select("*");
      $this->db->from("booking");
      if($query != '')
      {
       $this->db->like('Firstname', $query);
       $this->db->or_like('Lastname', $query);
       $this->db->or_like('idno', $query);
       $this->db->or_like('phone', $query);
       $this->db->or_like('address', $query);
       $this->db->or_like('date', $query);
      }
      $this->db->order_by('booking_id', 'DESC');
      return $this->db->get();
     }*/

     public function getbooks($booking_id=TRUE)
	{
		if ($booking_id === FALSE) {
		$query = $this->db->get('booking');
		return $query->result_array();
		}

		$query = $this->db->get_where('booking', array('booking_id' => $booking_id));
		return $query->row_array();
		
	}
	public function getprof($customer_id=FALSE)
	{ 	
		 if ($customer_id === false) {
		$query = $this->db->get('customer');
		return $query->result_array();
		}

		$query = $this->db->get_where('customer', array('customer_id' => $customer_id));
		print_r($this->input->post('customer_id'));
		return $query->row_array();	
	}

	public function update_profile($post_image)
	{
		

		$data = array(
			'Firstname' => $this->input->post('first_name'),
			'Lastname' => $this->input->post('last_name'),
			'idno' => $this->input->post('IDNO'),
			'DOB' => $this->input->post('DOB'),
			'Phone' => $this->input->post('phone'),
			'Email' => $this->input->post('email'),
			'pic' => $post_image
		);
		$this->db->where('customer_id', $this->input->post('customer_id'));
		return $this->db->update('customer', $data);
		
	}


		public function register_user($user){


		$this->db->insert('customer', $user);

		}
		public function register_worker($user){


		$this->db->insert('employee', $user);

		}

		public function login_user($email,$pass){

		 /* $this->db->select('*');
		  $this->db->from('Users');
		  $this->db->where('user_email',$email);
		  $this->db->where('user_password',$pass);*/

		  $query = $this->db->get_where('customer', array('Email' => $email,'password' => $pass));
		  return $query->row_array();
		  /*if($query=$this->db->get())
		  {
		      return $query->row_array();
		  }
		  else{
		    return false;
		  }*/


		}
		public function login_worker($email,$pass){

		 /* $this->db->select('*');
		  $this->db->from('Users');
		  $this->db->where('user_email',$email);
		  $this->db->where('user_password',$pass);*/

		  $query = $this->db->get_where('employee', array('Email' => $email,'password' => $pass));
		  return $query->row_array();
		  /*if($query=$this->db->get())
		  {
		      return $query->row_array();
		  }
		  else{
		    return false;
		  }*/


		}
		public function email_check($email){

		  $this->db->select('*');
		  $this->db->from('customer');
		  $this->db->where('Email',$email);
		  $query=$this->db->get();

		  if($query->num_rows()>0){
		    return false;
		  }else{
		    return true;
		  }

		}
		public function email_check_W($email){

		  $this->db->select('*');
		  $this->db->from('employee');
		  $this->db->where('Email',$email);
		  $query=$this->db->get();

		  if($query->num_rows()>0){
		    return false;
		  }else{
		    return true;
		  }

		}

		public function change_status(){

			$status = "Accepted";
			$data = array(
			'Firstname' => $this->input->post('first_name'),
			'Lastname' => $this->input->post('last_name'),
			'idno' => $this->input->post('id_no'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('location'),
			'date' => $this->input->post('dob'),
			'pic' => $post_image,
			'Status' => $status
		);
		$this->db->where('booking_id', $this->input->post('booking_id'));
		return $this->db->update('booking', $data);

}
}

?>