<?php
// Link To Connection Page
include "Conection_DB.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // To View From DB
  $N = $_POST['Name'];
  $U = $_POST['User_Name'];
  $M = $_POST['Message'];

  $St = $Conection->prepare("INSERT INTO conect_us (Name, User_Name, Message) VALUES (?, ?, ?)");
  $St->execute(array($N, $U, $M));
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <!-- ie meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- first mobile meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"/>
        <link rel="stylesheet" href="mystyle.css" type="text/css"/>
        <link rel="stylesheet" href="files/media.css" type="text/css"/>
        <link rel="stylesheet" href="css/hover-min.css" type="text/css"/>
        <link rel="stylesheet" href="css/animate.css" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap"/>
        <script src="dist/html5shiv.min.js"></script> <!-- prop for ie -->
        <script src="dist/respond.min.js"></script> <!-- media queries for ie -->
    </head>
    <body>
		
        <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand btn btn-danger" href="#">Portfolio</a>
					</div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
			   </div>
        </nav>
		
        
        
        
        <section class="caption">
            <img class="img-responsive"  src="images/image2.jpg" />
        </section>
        
        <section class="about">
            <div class="row">
                <div class="col-xs-6">
                <h2>About Eng/ Tarek</h2>
                <p class="lead">
                    Phone number: <br>
                    Email: <br>
                    Study:<br>
                    Work:<br>
                    Experiences: <br>
                </p>
                </div>
                <div class="col-md-3 col-xs-4">
                    <img class="img-responsive" src="images/male-user.png" alt="model"/> 
                </div>
            </div>
        </section>
        
        <section class="about">
            <div class="row">
                <div class="col-md-3 col-xs-4">
                    <img class="img-responsive" src="images/male-user.png" alt="model"/> 
                </div>
                <div class="col-xs-6">
                <h2>About Eng/ Karem</h2>
                <p class="lead">
                    Phone number: <br>
                    Email: <br>
                    Study:<br>
                    Work:<br>
                    Experiences: <br>
                </p>
                </div>
            </div>
        </section>
        
        <section class="about">
            <div class="row">
                <div class="col-xs-6">
                <h2>About Dr/ Jihad</h2>
                <p class="lead">
                    Phone number: <br>
                    Email: <br>
                    Study:<br>
                    Work:<br>
                    Experiences: <br>
                </p>
                </div>
                <div class="col-md-3 col-xs-4">
                    <img class="img-responsive" src="images/male-user.png" alt="model"/> 
                </div>
            </div>
        </section>
        
        <section class="contactus">
            <div class="row" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
           
				<div class="col-xs-6">
                <div class="col-xs-1"><a href="#"><i class="fa fa-google fa-2x"></i></a></div>
                <div class="col-xs-1"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></div>
                <div class="col-xs-1"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></div>
                <div class="col-xs-1"><a href="#"><i class="fa fa-youtube fa-2x"></i></a></div>
                <div class="col-xs-1"><a href="#"><i class="fa fa-behance fa-2x"></i></a><br>
                </div>   
                <div class="col-xs-2 col-xs-push-10">
                    <a href="form.php"><div class="btn btn-danger">Contact Us</div></a>
                </div>
            </div>
				 </div>
        </section>
        
        <section class="contactus"></section>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="dist/wow.min.js"></script>
        <script>new WOW().init();</script>
        <script src="js/jquery.nicescroll.min.js"></script> 
    </body>
</html>    