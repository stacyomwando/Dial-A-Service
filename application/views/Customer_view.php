<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>customer</title> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 22px; margin-left: 380px;">Registered Customers</h2>
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
            echo "<td>customer_id</td>"; 
            echo "<td>First Name</td>"; 
            echo "<td>Last Name</td>";
            echo "<td>ID Number</td>"; 
            echo "<td>DOB</td>"; 
            echo "<td>Phone Number</td>";
            echo "<td>Email</td>"; 
            echo "<td>Password</td>";
            echo "<td>category</td>";    
            echo "<td>Update</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
               echo "<td>".$r->customer_id."</td>"; 
               echo "<td>".$r->Firstname."</td>"; 
               echo "<td>".$r->Lastname."</td>";
               echo "<td>".$r->idno."</td>";
               echo "<td>".$r->DOB."</td>";
               echo "<td>".$r->Phone."</td>";
               echo "<td>".$r->Email."</td>";
               echo "<td>".$r->password."</td>";
               echo "<td>".$r->category."</td>";
               echo "<td><a href = '".base_url()."index.php/customer/edit/"
                  .$r->customer_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/customer/delete/"
                  .$r->customer_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
   </body>
	
</html>