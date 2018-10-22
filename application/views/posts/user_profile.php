
<?php
       $this->session->set_userdata('user_id',$post['user_id']);
        $this->session->set_userdata('user_email',$post['user_email']);
        $this->session->set_userdata('user_name',$post['user_name']);
        $this->session->set_userdata('user_age',$post['user_age']);
        $this->session->set_userdata('user_mobile',$post['user_mobile']);
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('posts/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>

        </tr>
          <tr>
            <td>User Name</td>
            <td><?php echo $post['user_name']?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('user_email');  ?></td>
          </tr>
          <tr>
            <td>User Age</td>
            <td><?php echo $this->session->userdata('user_age');  ?></td>
          </tr>
          <tr>
            <td>User Mobile</td>
            <td><?php echo $this->session->userdata('user_mobile');  ?></td>
          </tr>
      </table>


    </div>
  </div>
<a href="<?php echo base_url('posts/user_logout');?>" >  
<button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>
