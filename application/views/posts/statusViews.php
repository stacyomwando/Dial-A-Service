 
 <div class="text-center">
        <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['pic']?>" class="avatar img-rounded img-thumbnail" alt="avatar">
      </div></hr><br>

 <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <?php echo form_open_multipart('posts/status'); ?>
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
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Approve</button>
                            </div>
                      </div>
                </form>
               
             </div><!--/tab-pane-->