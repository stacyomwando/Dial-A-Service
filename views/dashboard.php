
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dial A Service| Dashboard</title>
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
      }/*
      .crds{
        margin-left:10px;
        margin-right:10px;
      }*/
      .card-container {
        /*display: grid;
        padding: 1rem;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        grid-gap: 1rem;*/
       /* margin-right:10px;*/
    }
.card {
   /* position:absolute;*/
   margin-top: 250px;
    top:50%;
    left:10%;
    transform:translate(-50%,-50%);
    width:300px;
    min-height:400px;
    background:#fff;
    box-shadow:0 20px 50px rgba(0,0,0,.1);
    border-radius:10px;
    transition:0.5s;
    float:right;
    margin-right:50px;
}
.card:hover {
    box-shadow:0 30px 70px rgba(0,0,0,.2);
}
.card .box {
    position:absolute;
    top:50%;
    left:0;
    transform:translateY(-50%);
    text-align:center;
    padding:20px;
    box-sizing:border-box;
    width:100%;
}
.card .box .img {
    width:120px;
    height:120px;
    margin:0 auto;
    border-radius:50%;
    overflow:hidden;
}
.card .box .img img {
    width:100%;
    height:100%;
}
.card .box h2 {
    font-size:20px;
    color:#262626;
    margin:20px auto;
}
.card .box h2 span {
    font-size:14px;
    background:#e91e63;
    color:#fff;
    display:inline-block;
    padding:4px 10px;
    border-radius:15px;
}
.card .box p {
    color:#262626;
}
.card .box span {
    display:inline-flex;
}
.card .box ul {
    margin:0;
    padding:0;
}
.card .box ul li {
    list-style:none;
    float:left;
}
.card .box ul li a {
    display:block;
    color:#aaa;
    margin:0 10px;
    font-size:20px;
    transition:0.5s;
    text-align:center;
}
.card .box ul li:hover a {
    color:#e91e63;
    transform:rotateY(360deg);
    }
.container
{
    margin-top: -600px;
    margin-left: 250px;
    width: 1000px;
    margin-bottom: 50px;
}
.img-fluid{
        width: 1150px;
        height: 600px;
       /* border: 2px solid black;*/
        border-radius: 5px;
        padding: 8px;
        margin-top: 20px;
      }
  
   </style>
  </head>
<body cz-shortcut-listen="true">
  
            

<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Dial A Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Logout</a>
            </li>
          </ul>n
        </div>
          

        
      </nav>
<div class = "crds">
  <div id="content">
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Category...</option>
    <option value="plumber"><a class="dropdown-item" href="#">Plumber</a></option>
    <option value="electrician"><a class="dropdown-item" href="#">Electrician</a></option>
    <option value="cleaner"><a class="dropdown-item" href="#">Cleaner</a></option>
    
  </select>
  <div class="input-group-append">
    <label class="input-group-text" for="inputGroupSelect02">Options</label>
  </div>
</div>
</div>
</div>



  </header>
  <h2 class="text-center">Employee profiles</h2> 

<?php  
  //Include the connection file
  define("DB_SERVER","localhost");
  define("DB_USERNAME","root");
  define("DB_PASSWORD","");
  define("DB_NAME","hudumisha");

  /*Attempt to connect to MYSQL Database*/
  $mysqli = new mysqli("localhost", "root", "", "hudumisha");

  //Check connection
  if ($mysqli==false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
  }

  // $Category=$_POST['category'];

  $sql="SELECT * FROM employee";
$result=$mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $phone = $row["phone"];
        $image = $row["image"];
        $constituency = $row["constituency"];
        $ward = $row["ward"]; 
        $description = $row["description"];
        $type = $row["type"];
        $id = $row["empid"];
?>


        <section>
<div class="card">
    <div class="box">
        <div class="img">

            <img class="card-img-top img" src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $image ); ; ?>" width="200" height="400" alt="Card image cap">
          </div>
            <hr>
            <h4 class ="card-title"><?php echo $firstname." ". $lastname?></h4>
            <h5><?php echo $type?></h5>
            <div class="contents">
               <p class="card-text">Phone number: 0<?php echo $phone; ?></p>
              <p class="card-text">Email:  <?php echo $email; ?></p>
              <p class="card-text">Location:  <?php echo $constituency.", ".$ward; ?></p>
             
              <button type="button"  class="btn btn-sm btn-success" data-toggle="modal" data-target="<?php echo "#$id";?>"  >Details</button>
            </div>
             
       </div>
     </div> 
  </section>

<div class="modal fade" id="<?php echo "$id";?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="center-block col-sm-12" style = "position:center;.">
              <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $image ); ; ?>" width="200" class= "details img-responsive">
            </div>
            <div class="col-sm-12">
            <h4><?php echo $firstname." ". $lastname?></h4>
             <h5><?php echo $type?></h5>
            <p><?php echo $description; ?></p>
              <hr>
               <p>Phone number: 0<?php echo $phone; ?></p>
              <p>Email:  <?php echo $email; ?></p>
              <p>Location:  <?php echo $constituency.", ".$ward; ?></p>
             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo base_url('bk/booking_view'); ?> ?id=<?php echo $id; ?>" ><button type="button" class="btn btn-primary" >Book</button></a>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php

    }
} else {
    echo "0 results";
}



?>
<!--  -->


</body>
</html>