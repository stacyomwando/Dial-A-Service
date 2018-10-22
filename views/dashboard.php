<?php  
  //Include the connection file
  require_once 'connection.php';

  $sql="SELECT * FROM customer WHERE category='employee'";
$stmt=$mysqli->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Hudumisha| Dashboard</title>
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
	</head>
<body cz-shortcut-listen="true">
	
          	

<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Hudumisha</a>
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
              <a class="nav-link " href="#">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Logout</a>
            </li>
          </ul>
          <!-- <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
         <!--  <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Dropdown
            <div class="dropdown-menu show" aria-labelledby="dropdown03">
              
              <a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            
        </div></a> -->

        
      </nav>

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
  </header>

   
    <div class="row">
      <div class="col-sm-6">
      <h2 class="text-center">Employee profiles</h2>
      <?php while($profile=mysqli_fetch_assoc($stmt)):?>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $profile['image']; ?>" width="200" alt="Card image cap">
            <h4 class ="card-title"><?php echo $profile['firstname, lastname']; ?></h4>
<!--             <div >
              <img src="" width="200" class= "img-thumb">
            </div> -->
              <p class="card-text">Phone number: <s>Ksh <?php echo $profile['phone']; ?></s></p>
              <p class="card-text">Email:  <?php echo $profile['email']; ?></p>
              <button type="button"  class="btn btn-sm btn-success" onclick="modal(<?php echo $profile['customer_id']; ?>)">Details</button>
          </div>
      <?php endwhile; ?>
    </div>
  </div>
   
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>


<!--  <div class ="col-md-8">
  <div class="row">
    <h2 class="text-center">Feature -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>