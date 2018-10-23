<!--  -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript">
  $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dial a Service</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style(2).css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Compiled and minified JavaScript -->
  
    <style>
      #content{
        margin-top: 80px;
      }
    </style>
      <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body cz-shortcut-listen="true">
  
            

<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Dial a Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>posts/login_user">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?php echo base_url();?>posts/user_logout">Logout</a>
            </li>
          </ul>
         <!--  <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Dropdown
            <div class="dropdown-menu show" aria-labelledby="dropdown03">
              
              <a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            
        </div></a>
 -->
        
      </nav>
      <div class="container">
        
    
      

<hr>
<div>
<div class="container bootstrap snippet">
    <div class="row">
      <div class="col-sm-10"><h1><?php echo $post['Firstname']?></h1></div>
      <!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="<?php //echo site_url();?>assets/images/posts/<?php //echo $post['post_image']?>"></a></div> -->
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['pic']?>" class="avatar img-rounded img-thumbnail" alt="avatar">
      </div></hr><br>

          
        </div><!--/col-3-->
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">View</a></li>
                <li><a data-toggle="tab" href="#messages">Edit</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <div class="tab-pane active" id="homee">
                              
                    <div class="col-md-6">
                      <h4><strong>First Name:</strong> <?php echo $post['Firstname']?></h4><br> 
                    </div>
                    <div class ="col-md-6">
                      <h4><strong>Last Name:</strong>  <?php echo $post['Lastname'];?></h4><br>
                    </div>
                    <div class="col-md-6">
                      <h4> <strong>ID No:</strong> <?php echo $post['idno']?>
                    </h4><br>
                    </div>
                    <div class="col-md-6">
                      <h4><strong>Phone Number:</strong> <?php echo $post['Phone']?></h4><br>
                    </div>
                    <div class="col-md-6">
                      <h4><strong>Email:</strong> <?php echo $post['Email']?></h4><br>
                    </div> 
                    <div class ="col-md-6">
                      <h4><strong>Date of Birth:</strong> <?php echo $post['DOB']?></h4><br>
                    </div>  
                    <hr>
                            
                  </div><!--/tab-pane-->


              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <?php echo form_open_multipart('posts/update_profile'); ?>
                      <div class="form-group">
                        <input type="hidden" name="customer_id" value="<?php echo $post['customer_id']; ?>"> 
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" value="<?php echo $post['Firstname']; ?>"  title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" value="<?php echo $post['Lastname']; ?>" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" value="<?php echo $post['Phone']; ?>" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Date of Birth</h4></label>
                              <input type="text" class="form-control" name="DOB" id="DOB" placeholder="enter your National Id number" value="<?php echo $post['DOB']; ?>" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" value="<?php echo $post['Email']; ?>" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                     <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>ID Number</h4></label>
                              <input type="text" name="IDNO" value="<?php echo $post['idno']; ?>" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div> 
                      <!-- <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Date of Birth</h4></label>
                              <input type="text" value="<?php //echo $post[0]['date']; ?>" class="form-control" name="dob" id="dob" placeholder="Enter your Date of Birth" title="enter your date of Birth.">
                          </div>
                      </div> -->
                          <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="image"><h4>Upload Image</h4></label>
                              <input type="file" name="userfile" class="file-upload">
                          </div>
                      </div>

                       
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Update</button>
                            </div>
                      </div>
                </form>
               
             </div><!--/tab-pane-->
             
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
  
</div>

                                                      