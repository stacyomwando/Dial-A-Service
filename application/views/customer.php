<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>customers</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }
    body{
    background-image: url("shat.jpg");
    border-image-width: 100%;
}a.button{
            background-color: lightyellow;
            padding: 12px 36px;
            margin-left: 550px;
            color: #0000cd;
    border-color: #00fa9a;
    display: inline-block;
    margin-bottom: 0;
    font-size: 25px;
    font-weight: 600;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border:2px solid transparent;
    border-radius: 3px;
    text-decoration: none;
        }.topnav {
  overflow: hidden;
  background-color: slategray;;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:salmon;
  color: lightblue;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


</style>

<body>
    <div class="topnav">
  <a class="active" href="#users">CUSTOMERS</a>
  <a href="booking.php">BOOKINGS</a>
  <a href="employee.php">EMPLOYEES</a>
  
 
</div>

<div class="table-scrol">
    <h1 align="center">CUSTOMERS</h1>

<div class="table-responsive">


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>customer_id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>ID Number</th>
            <th>DOB</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Password</th>
            <th>Category</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from customer";
        $run=mysqli_query($dbcon,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $customer_id=$row[0];
            $Firstname=$row[1];
            $Lastname=$row[2];
            $idno=$row[3];
            $DOB=$row[4];
            $phone=$row[5];
            $Email=$row[6];
            $password=$row[7];
            $category=$row[8];
           



        ?>

        <tr>

            <td><?php echo $customer_id;  ?></td>
            <td><?php echo  $Firstname;  ?></td>
            <td><?php echo $Lastname;  ?></td>
            <td><?php echo  $idno; ?></td>
            <td><?php echo  $DOB; ?></td>
            <td><?php echo  $phone; ?></td>
            <td><?php echo $Email; ?></td>
            <td><?php echo  $password; ?></td>
            <td><?php echo $category; ?></td>
           
            <td><a href="userdelete.php?del=<?php echo $username ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
