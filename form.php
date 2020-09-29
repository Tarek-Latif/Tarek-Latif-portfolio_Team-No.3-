
<?php
// Link To Conection Page
include "Conection_DB.php";
// Show From DataBase
?>
<?php
$St = $Conection->prepare("SELECT Name, User_Name, Message FROM conect_us");
$St->execute();
$Result = $St->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
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
        
        <link rel="stylesheet" href="files/media.css" type="text/css"/>
        <link rel="stylesheet" href="css/hover-min.css" type="text/css"/>
        <link rel="stylesheet" href="css/animate.css" type="text/css"/>
		<link rel="stylesheet" href="mystyle.css" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap"/>
        <script src="dist/html5shiv.min.js"></script> <!-- prop for ie -->
        <script src="dist/respond.min.js"></script> <!-- media queries for ie -->
    </head>
    <body>
		<div class="col-xs-12">
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
        
        <section class="form">
			
            <div class="head"><h1>Contact Us</h1></div>
            <form action="#link" method="post" enctype="multipart/form-data">
               <label>Name:</label><br> 
                <input type="text" name="name" value="<? echo $row['Name']?>"/><br>
               <label>Username:</label><br> 
                <input type="text" name="username" value="<? echo $row['User_Name']?>"/><br>
               <label>Message:</label><br>
               <input type="text" name="Message" value="<? echo $row['Message']?>"/><br>
                <textarea rows="5" cols="32" style="resize:" maxlength="200"></textarea>
               <input type="hidden"/><br>
               <div class="send"><button class="btn btn-danger">Send</button></div>
        </form> 
			
        </section>
		</div>
        
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="dist/wow.min.js"></script>
        <script>new WOW().init();</script>
        <script src="js/jquery.nicescroll.min.js"></script>
    </body>
</html>