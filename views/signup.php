

<!DOCTYPE html>
<html>

<head>

    <style type="text/css">

    body{
    margin: 0;
    padding: 0;
    /*background: url(tea.jpeg);*/
    background-size: cover;
    background-position: centre;
    font-family: sans-serif;
    
    
} 
        .signupbox{
    width: 260px;
    height: 540px;
    background: black;
    color: black;
    top: 210%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 100px 30px;
    border-radius: 30px;

}
.avatar{
    width:100px; 
    height:100px;
    border-radius: 50%;
    position: absolute;
    top: 5%;
    left: 80px;

}
.signupbox p{
    margin: 0;
    padding: 0;
    font-weight: italic;
}
.signupbox input{
    width: 200px;
    margin-bottom: 10px;
}

.signupbox input[type="text"], input[type="password"]
{
border: transparent;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 20px;
color: #fff;
font-size: 16px;
}
.signupbox input[type="submit"]
{
    top: 150px;
border:none;
outline: none;
height: 40px;
background: red;
color:#fff;
font-size: 18px;
border-radius: 20px;
}
.signupbox input[type="submit"]:hover
{
    cursor:pointer;
    background: #ffc107;
    color: #000;
}
.signupbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;

}


* {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.25;
}


/*********** Navbar Section Start ***********/

.navbar-inverse {
    background-image: linear-gradient( to right top, rgba(119, 21, 116, 0.8), rgba(34, 139, 34, 0.8));
}

.navbar-inverse .navbar-nav>li>a {
    color: white;
    font-size: 15px;
    text-transform: uppercase;
}

.navbar-inverse .navbar-brand {
    color: white;
    font-size: 30px;
}

.navbar-inverse ul li:hover {
    background: rgba(57, 36, 194, 0.8);
    color: white;
}


/************ Navbar Section End *************/


/************ Header Section Start ************/

.header {
    height: 95vh;
    background-image: linear-gradient( to right bottom, rgba(63, 10, 161, 0.8), rgba(139, 0, 0, 0.5)), url(images/cam.jpg);
    background-size: cover;
    background-position: top;
    position: relative;
}

.text-box {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.heading-primary {
    color: #fff;
    text-transform: uppercase;
    backface-visibility: hidden;
    margin-bottom: 60px;
}

.heading-primary-main {
    display: block;
    font-size: 45px;
    font-weight: 400;
    letter-spacing: 8px;
    animation-name: moveInLeft;
    animation-duration: 1s;
    animation-timing-function: ease-out;
}

.heading-primary-sub {
    display: block;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: 1px;
    padding-top: 20px;
    animation: moveInRight 1s ease-out;
}

@keyframes moveInLeft {
    0% {
        opacity: 0;
        transform: translateX(-100px);
    }
    80% {
        transform: translateX(10px);
    }
    100% {
        opacity: 1;
        transform: translate(0);
    }
}

@keyframes moveInRight {
    0% {
        opacity: 0;
        transform: translateX(100px);
    }
    80% {
        transform: translateX(-10px);
    }
    100% {
        opacity: 1;
        transform: translate(0);
    }
}

@keyframes moveInBottom {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translate(0);
    }
}

    </style>


    <title>PHOTOGRAPHERS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="p.css"> -->

</head>

<body>
    <!-- Navbar Section Start-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand active" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.html">Home</a></li>
                   
                    <!-- <li><a href="log_in.php">Log In</a></li>
                    <li><a href="signup.php">Sign Up</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Section End -->
    <!-- Header Section Start -->
    <header class="header">
    	 <div class="text-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main"> SIGN UP</span>
                <span class="heading-primary-sub"></span>
            </h1>
    <div class="signupbox">
	<img src="images/avatar.png" class="avatar">
	<h1> Sign Up</h1>
	<form action="insert.php" method="post">
		<p>First Name</p>
		<input type="text" name="first_name" placeholder="First Name" required=""> 
		<p>Last Name</p>
		<input type="text" name="last_name" placeholder="Last Name" required="">
		<p>Email</p>
		<input type="text" name="email" placeholder="Email" required="">
		<p>Password</p>
		<input type="password" name="password" placeholder=" Password" required="">
		<p>Re-type Password</p>
		<input type="password" name="CPassword" placeholder="Re-type Password" required="">
		<br>
	     <p>User type</p>
		<input type="text" name="user_type" placeholder="User type" required="">
		<br>
		<input type="submit" name="submit" value="SignUp"><br>
		
	</form>

                </div>
                <div class="col-md-5">
                    <img class="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiij7ytwubaAhWBvBQKHXwxBtQQjRx6BAgBEAU&url=https%3A%2F%2Fgithub.com%2FChell0&psig=AOvVaw2GUUY9mxUw0YZqB52ike7W&ust=1525332959428917"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</p>
</div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- About Me Section Start -->
 
    
</body>
</head>
</html>