<!-- 
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Live Data Search in Codeigniter using Ajax JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />


 </head>
 <body>
  <div class="container">
   <br />
   <br />
   <br />
   <h2 align="center">Searching for an Employee</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search Employee" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result">
     
   </div>
  </div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />
 </body>
</html>


<script>
$(document).ready(function(){ 

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php //echo base_url(); ?>Posts/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

/* $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });*/
});
</script>
 -->
 <h1>Customers</h1>
 <?php foreach($posts as $post) : ?>
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>First Name</th>
       <th>Last Name</th>
       <th>ID No</th>
       <th>Phone</th>
       <th>Address</th>
       <th>Date</th>
       <th>Status</th>
       <th>Action</th>
      </tr>
    <tr>
     
      <td><?php echo $post['Firstname']?> </td>
      <td><?php echo $post['Lastname']?> </td>
      <td><?php echo $post['idno']?> </td>
      <td><?php echo $post['phone']?> </td>
      <td><?php echo $post['address']?> </td>
      <td><?php echo $post['date']?> </td>
      <td><?php echo $post['Status']?> </td>
      <td><a class="btn btn-primary" href="<?php echo site_url('/posts/'. $post['booking_id']);?>">Approve</a></td>
    </tr>
  <?php endforeach?>