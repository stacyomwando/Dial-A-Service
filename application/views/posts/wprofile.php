
<hr>
<div>
<div class="container bootstrap snippet">
    <div class="row">
      <div class="col-sm-10"><h1>User name</h1></div>
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
                      <h4><strong>Phone Number:</strong> <?php echo $post['phone']?></h4><br>
                    </div>
                    <div class="col-md-6">
                      <h4><strong>Address:</strong> <?php echo $post['address']?></h4><br>
                    </div> 
                    <div class ="col-md-6">
                      <h4><strong>Date:</strong> <?php echo $post['date']?></h4><br>
                    </div>
                    <div class ="col-md-6">
                      <h4><?php echo $post['Firstname']?></h4><br>
                    </div> 
                    <div class="col-md-6">
                      <h4><?php echo $post['Firstname']?></h4><br>
                    </div>  
                    <hr>
                            
                  </div><!--/tab-pane-->


              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <?php echo form_open_multipart('posts/update_profile'); ?>
                      <div class="form-group">
                        <input type="hidden" name="booking_id" value="<?php echo $post['booking_id']; ?>">
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
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" value="<?php echo $post['phone']; ?>" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>ID Number</h4></label>
                              <input type="text" class="form-control" name="id_no" id="idno" placeholder="enter your National Id number" value="<?php echo $post['idno']; ?>" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" value="<?php echo $post['Firstname']; ?>" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="text" name="location" value="<?php echo $post['address']; ?>" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Date of Birth</h4></label>
                              <input type="text" value="<?php echo $post['date']; ?>" class="form-control" name="dob" id="dob" placeholder="Enter your Date of Birth" title="enter your date of Birth.">
                          </div>
                      </div>
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

                                                      