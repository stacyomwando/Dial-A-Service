<?php

class Posts extends CI_Controller {
	public function __construct(){

        parent::__construct();
  		$this->load->helper('url');
  	 	$this->load->model('post_model');
        $this->load->library('session');

}

	/*public function view($booking_id=NULL)
	{
		$data['post'] = $this->post_model->get_posts($booking_id);

		if (empty($data['post'])) {
		 	# code...
		 	show_404();
		 } 



		 $data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
        $this->load->view('posts/statusViews', $data);
		$this->load->view('templates/footer');
	}*/
	public function index($page = 'home')
	{
        $data['title'] = 'Latest Posts';

        $data['post'] = $this->post_model->get_posts();
    

		//loading our views

		$this->load->view('templates/header');
        $this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

    public function statusViews($booking_id=NULL)
	{
		
		$data['post'] = $this->post_model->getbooks($booking_id);

		if (empty($data['post'])) {
		 	# code...
		 	show_404();
		 } 



		 //$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
        $this->load->view('posts/statusViews', $data);
		$this->load->view('templates/footer');

	}

	public function bookings()
	{
		$this->load->view('templates/header');
        $this->load->view('posts/bookings');
		$this->load->view('templates/footer');
	}
	public function profile()
	{

        $data['post'] = $this->post_model->getprof();

        if (empty($data['post'])) {
		 	# code...
		 	show_404();
		 }

		 print_r($data['post']);
    

		$this->load->view('templates/header');
        $this->load->view('posts/uprofile', $data);
		$this->load->view('templates/footer');
 
	}
	

 function fetch()
 {
 
    $data['posts'] = $this->post_model->fetch_data();
  
    $this->load->view('templates/header');
	$this->load->view('posts/bookings', $data);
	$this->load->view('templates/footer');
}


	public function update()
	{
		$this->post_model->update_post();
		redirect('posts');
	}

	public function update_profile()
	{

	    	$config['upload_path'] = './assets/images/posts'; 
	    	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	    	$config['max_size'] = '4096'; 
	    	$config['max_width'] = '5000'; 
	    	$config['max_height'] = '5000'; 

	    	$this->load->library('upload', $config);

	    	if (!$this->upload->do_upload()) {
	    		$errors = array('error' => $this->upload->display_errors());
	    		$post_image = 'noimage.png';
	    	} else {
	    		$data = array('upload_data' => $this->upload->data());

	    		$post_image = $_FILES['userfile']['name'];
	    	}
	    	
			$this->post_model->update_profile($post_image);
            redirect('posts/profile');
	    
	    
	}



public function index_home()
{
$this->load->view("posts/home");
}

public function index_user()
{
$this->load->view("posts/register.php");
}
public function index_worker()
{
$this->load->view("posts/registerW.php");
}

public function register_user(){

	        /*$config['upload_path'] = './assets/images/posts'; 
	    	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	    	$config['max_size'] = '4096'; 
	    	$config['max_width'] = '5000'; 
	    	$config['max_height'] = '5000'; 

	    	$this->load->library('upload', $config);

	    	if (!$this->upload->do_upload()) {
	    		$errors = array('error' => $this->upload->display_errors());
	    		$post_image = 'noimage.png';
	    	} else {*/
	    								

      $user=array(
      'Firstname'=>$this->input->post('Firstname'),
      'Lastname'=>$this->input->post('Lastname'),
      'password'=>md5($this->input->post('password')),
      'DOB'=>$this->input->post('DOB'),
      'Phone'=>$this->input->post('Phone'),
      'Email'=>$this->input->post('Email'),
      'idno'=>$this->input->post('idno'),
      //'image'=>$this->input->post('userfile'),
        );

   $email_check=$this->post_model->email_check($user['Email']);

if($email_check){
  $this->post_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('Posts/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('Posts/index_user');


}

}

public function register_worker(){

	        /*$config['upload_path'] = './assets/images/posts'; 
	    	$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
	    	$config['max_size'] = '4096'; 
	    	$config['max_width'] = '5000'; 
	    	$config['max_height'] = '5000'; 

	    	$this->load->library('upload', $config);

	    	if (!$this->upload->do_upload()) {
	    		$errors = array('error' => $this->upload->display_errors());
	    		$post_image = 'noimage.png';
	    	} else {*/
	    								

      $user=array(
      'firstname'=>$this->input->post('firstname'),
      'lastname'=>$this->input->post('lastname'),
      'DOB'=>$this->input->post('DOB'),
      'Phone'=>$this->input->post('Phone'),
      'Email'=>$this->input->post('Email'),
      'idno'=>$this->input->post('idno'),
      'password'=>md5($this->input->post('password')),
      'Type'=>$this->input->post('Type'),
      'constituency'=>$this->input->post('constituency'),
      'ward'=>$this->input->post('ward')
      //'image'=>$this->input->post('userfile'),
        );

   $email_check=$this->post_model->email_check_W($user['Email']);

if($email_check){
  $this->post_model->register_worker($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('Posts/login_view_W');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('Posts/index_worker');


}

}



public function login_view(){

$this->load->view("posts/login.php");

}
public function login_view_W(){

$this->load->view("posts/loginW.php");

}

function login_user(){
  $user_login=array(

  'Email'=>$this->input->post('Email'),
  'password'=>md5($this->input->post('password'))

    );


    $data['post'] = $this->post_model->login_user($user_login['Email'],$user_login['password']);
      if($data['post']=== null)
      {
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("posts/login.php");
      }
      else{
        
        /*$this->session->set_userdata('user_id',$post['user_id']);
        /*$this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);*/

        //$this->load->view('templates/header');
        $this->load->view('posts/uprofile', $data);
        $this->load->view('templates/footer');

      }


}
function login_worker(){
  $user_login=array(

  'Email'=>$this->input->post('Email'),
  'password'=>md5($this->input->post('password'))

    );
  print_r($user_login);


    $data['post'] = $this->post_model->login_worker($user_login['Email'],$user_login['password']);
    print_r($data);
      if($data['post']=== null)
      {
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("posts/loginW.php");
      }
      else{
        
        /*$this->session->set_userdata('user_id',$post['user_id']);
        /*$this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);*/

        $this->load->view('templates/header');
        $this->load->view('posts/uprofile', $data);
        $this->load->view('templates/footer');

      }


}

function user_profile(){

$this->load->view('user_profile.php');

}
public function user_logout(){ 

  $this->session->sess_destroy();
  redirect('Posts/index_home', 'refresh');
}

public function email(){

/*$this->load->library('email'); 
$this->email->from('isaac.kiplel@strathmore.edu', 'Isaac');
$this->email->to('kiplelisaac@gmail.com','kiplel');
$this->email->subject('SMTP Trial');
$this->email->message('This is an smtp trial email'); 
try{
	$this->email->send();
		echo 'Message has been sent.';


}catch(Exception $e){
echo $e->getMessage();
}

*/


//Load email library
$this->load->library('email');

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_crypto' => 'TLS',
    'smtp_user' => 'kiplelisaac@gmail.com',
    'smtp_pass' => 'chepkurui',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<h1>Sending email via SMTP server</h1>';
$htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

$this->email->to('isaac.kiplel@strathmore.edu');
$this->email->from('isaac.kiplel@strathmore.edu','Isaac');
$this->email->subject('How to send email via SMTP server in CodeIgniter');
$this->email->message($htmlContent);

//Send email#
if ($this->email->send()) {
	echo "email sent";

}

}

public function status(){
	$this->post_model->change_status();
	redirect('posts/fetch');
}

}
