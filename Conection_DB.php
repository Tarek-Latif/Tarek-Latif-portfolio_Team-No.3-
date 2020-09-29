<?php 
// Connect to an ODBC DataBase 
$dsn = 'mysql:host=localhost;dbname=db_cv'; // dsn (Data Source Nane) first Step By Conection DataBase
$user= 'root'; // Conection myphp Admin Uaer Name
$pass= '';   // Conection myphp Admin   PassWord
$option = array (
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {

    $DBConect = new PDO($dsn, $user, $pass, $option); // $DBConect (valibal Conection ( Name any Name)+valibal dsn +User Name +PassWord
    $DBConec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIOM);
    echo 'You Are Connected ... OK ' ; // Conection DataBase Print ... OK
}

catch(PDOException $e) { // Erorr Conection DataBase Print Faild
    echo 'Faild To Connect' . $e->getMessage();
}