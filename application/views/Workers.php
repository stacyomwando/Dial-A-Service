<!DOCTYPE html>
<html>

<head>
    <title>PHOTOGRAPHERS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">

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
    top: 65%;
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


/************** Header Section End **********/


/*********** About Me Section Start ********/

#about {
    padding-top: 40px;
    padding-bottom: 40px;
    color: #5a5a5a;
    background-image: linear-gradient( to left top, rgba(63, 10, 161, 0.8), rgba(139, 0, 0, 0.8)), url(https://images.unsplash.com/photo-1467703834117-04386e3dadd8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2de85761d45711c4109ba4f215b6e21e&auto=format&fit=crop&w=1350&q=80);
    background-size: cover;
    background-position: center;
    color: #fff;
}

.featurette-heading {
    font-weight: 300;
    line-height: 1;
    letter-spacing: -1px;
}
.lead li{
color: blue;
}

@media (min-width: 768px) {
    .featurette-heading {
        font-size: 30px;
    }
}

@media (min-width: 992px) {
    .featurette-heading {
        margin-top: 120px;
    }
}

.img-responsive {
    border-radius: 100px;
    max-width: 100%;
    height: auto;
    display: block;
}


/*********** About Me Section End **********/


/******** My Portfolio Section Start *******/

#portfolio {
    background-image: linear-gradient( to left bottom, rgba(54, 10, 136, 0.8), rgba(139, 0, 0, 0.8)), url(https://images.unsplash.com/photo-1497892597262-2983614aa886?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2051e3b8338218a0f163b9a6ab48bb84&auto=format&fit=crop&w=1350&q=80);
    background-size: cover;
    background-position: top;
    color: #fff;
    padding-top: 150px;
    padding-bottom: 100px;
    position: relative;
}

.project {
    transition: transform .3s;
}
#portfolio p{
    font-family: sans-serif;
    font-size: 30px;

    /*text-align: center;*/
}


.project:hover {
    transform: scale(1.1);
}


/********* My Portfolio Section End ********/


/********* Footer Section Start ************/

footer #footer-above {
    background-image: linear-gradient( to left top, rgba(63, 10, 161, 0.8), rgba(139, 0, 0, 0.8)), url(https://images.unsplash.com/photo-1495277493816-4c359911b7f1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cea505d70dc1770c4dd470ff9715ac36&auto=format&fit=crop&w=1346&q=80);
    background-size: cover;
    background-position: center;
    color: #fff;
    position: relative;
    display: -webkit-box;
    display: -moz-flexbox;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    flex-flow: row wrap;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    margin: 0 auto;
    width: 100%;
}

footer h3 {
    margin-bottom: 30px;
    color: #000;
    font-size: 2em;
}

#footer-above {
    padding-top: 50px;
    width: 80%;
}

#footer-above div {
    margin-bottom: 50px;
    width: 250px;
    text-align: center;
}

#footer-above ul {
    padding: 0;
}

#footer-above li {
    display: inline;
}

#footer-below {
    color: #fff;
    font-size: 1.0em;
    padding: 25px 0;
    background-color: #000;
    background-position: center;
    text-align: center;
}

.button {
    color: #fff;
    border: solid 2px #000;
    border-radius: 70%;
    display: inline-block;
    width: 50px;
    height: 50px;
    text-align: center;
    font-size: 20px;
    line-height: 48px;
    -webkit-transitional: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.button:hover {
    border: solid 2px rgb(21, 102, 214);
    color: #2998E4;
}

.col-sm-6,
.col-xs-12 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-xs-12 {
    float: left;
    width: 100%;
}

@media (min-width: 768px) {
    .col-sm-6 {
        float: left;
    }
}


/********* Footer Section End **************/
    </style>
    <link rel="stylesheet" type="text/css" href="p.css">

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

    <!-- Header Section End -->
    <!-- About Me Section Start -->

    <!-- About Me Section End -->
    <!-- My Portfolio Section Start -->
    <div id="portfolio">
        <div class="container">
            <div class="row">
                <p class="artistic">Electricians</p>
                <div class="col-lg-4 col-sm-6">
                    <div class="project thumbnail">

                        <a href="photographer1.html" target="_blank" title="Tribute page">
                            <img src="images/photographer1.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project thumbnail ">
                        <a href="photographer2.html">
                            <img src="images/photographer2.jpeg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project thumbnail ">
                        <a href="photographer3.html">
                            <img src="images/photographer3.jpeg">
                        </a>
                    </div>
                </div>
                <p class="artistic">Plumbers</p>
                <br>
                <div class="col-lg-4 col-sm-6">
                    <div class="project thumbnail">
                        <a href="photographer5.html" target="_blank" title="Website Template">
                            <img src="images/photographer5.jpeg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project thumbnail">
                        <a href="photographer6.html">
                            <img src="images/photographer6.jpeg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project thumbnail ">
                        <a href="phtographer2.html">
                            <img src="images/photographer8.jpeg">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- My Portfolio Section End -->

    <!-- Footer Section Start -->
    <footer>
        <div id="footer-above">
            <div>
                <h3>find us on:</h3>
                <ul id="contact">

                    <li><a class="button social" href="https://twitter.com/ch3ll0h" target="_blank"><i class="fa fa-fw fa-twitter"></i></a></li>
                    <li><a class="button social" href="https://www.facebook.com/pageofphotography/" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                </ul>
            </div>
        </div>
        <div id="footer-below">Copyright &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> John.Wick.
        </div>
    </footer>
    <!-- Footer Section End -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.7-dist"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
