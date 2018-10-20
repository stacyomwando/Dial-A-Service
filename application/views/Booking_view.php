<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>booking</title> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 22px; margin-left: 380px;">Bookings</h2>
        </div>
    </div>
</div>
<style type="text/css">
  body{
    background-color: aquamarine;
  }
  table{
    background-color: azure;
  }
  a{
   text-decoration: none;
   padding: 12px;
  }
</style>

   </style>
	</head>
   <body> 
      <div class="container">
		<table class="table table-bordered">

         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>No</td>"; 
             echo "<td>Booking Id</td>";
            echo "<td>First Name</td>"; 
            echo "<td>Last Name</td>";
            echo "<td>ID Number</td>";  
            echo "<td>Phone Number</td>";
            echo "<td>Address</td>"; 
            echo "<td>Date</td>";   
            echo "<td>Update</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
               echo "<td>".$r->booking_id."</td>"; 
               echo "<td>".$r->Firstname."</td>"; 
               echo "<td>".$r->Lastname."</td>";
               echo "<td>".$r->idno."</td>";
               echo "<td>".$r->phone."</td>";
               echo "<td>".$r->address."</td>";
               echo "<td>".$r->date."</td>";
    
               echo "<td><a href = '".base_url()."index.php/booking/edit/"
                  .$r->booking_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/booking/delete/"
                  .$r->booking_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
   </body>
	
</html>