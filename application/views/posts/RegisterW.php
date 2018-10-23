



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration-CI Login Registration</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
 
 
  </head>
  <body>
 
<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">
 
                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>
 
                      <form role="form" method="post" action="<?php echo base_url('posts/register_worker'); ?>">
                          <fieldset>
                            <div class="text-center">
                      <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-rounded img-thumbnail" alt="avatar">
                      <h6>Upload a different photo...</h6>
                      <input type="file" class="text-center center-block file-upload" name="image">
                    </div></hr><br>
                              <div class="form-group">
                                  <input class="form-control" placeholder="FirstName" name="firstname" type="text" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="LastName" name="lastname" type="text" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="DOB" name="DOB" type="number" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Phone" name="Phone" type="number" value="">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Email" name="Email" type="email" value="">
                              </div>
                               <div class="form-group">
                                  <input class="form-control" placeholder="ID_No" name="idno" type="number" value="">
                              </div>
                               <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="password" type="password" value="">
                              </div>
                               <div class="form-group">
                                  <input class="form-control" placeholder="Category" name="Type" type="text" value="">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Constituency" name="constituency" type="text" value="">
                              </div>
                               <div class="form-group">
                                  <input class="form-control" placeholder="Ward" name="ward" type="text" value="">
                              </div>                          
                             
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" ">

                          </fieldset>
                      </form>
                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('posts/'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>
 
 
 
 
 
</span>
 
 
 
 
  </body>
</html>