<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>employee</title> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 22px; margin-left: 380px;">Employees</h2>
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
    
             echo "<td>Employee Id</td>";
            echo "<td>Category</td>"; 
            echo "<td>County</td>";
            echo "<td>Constituency</td>";  
            echo "<td>Municipality</td>";
           echo "<td>Update</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
               echo "<td>".$r->Employee_id."</td>"; 
               echo "<td>".$r->Category."</td>"; 
               echo "<td>".$r->county."</td>";
               echo "<td>".$r->constituency."</td>";
               echo "<td>".$r->municipality."</td>";
          
    
               echo "<td><a href = '".base_url()."index.php/employee/edit/"
                  .$r->Employee_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/employee/delete/"
                  .$r->Employee_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
   </body>
	
</html>