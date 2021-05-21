<?php
session_start();
if(isset($_POST['username']))
{
    //Getting the data from the form  
    $username= $_POST['username'];
    $password = $_POST['password'];

   
    //connect the server to the database
    include("../db/dbConnection.php");
    require_once '../db/dbFunctions.inc.php';
    
    //Prevent sql injection
    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username=mysqli_real_escape_string($conn,$username);
    $password=mysqli_real_escape_string($conn,$password);



    //Query the database

    loginUser($conn, $username, $password);

};
?>