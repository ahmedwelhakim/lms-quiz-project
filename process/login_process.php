<?php
session_start();
if(isset($_POST['username']))
{
    //Getting the data from the form  
    $username= $_POST['username'];
    $password = $_POST['password'];

   
    //connect the server to the database
    include("../db/dbConnection.php");
    
    //Prevent sql injection
    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username=mysqli_real_escape_string($conn,$username);
    $password=mysqli_real_escape_string($conn,$password);



    //Query the database
    $result=mysqli_query($conn,"select * From quizregistration where user ='$username' ") or die("failed to quert db".mysqli_error($conn));

    $row = mysqli_fetch_array($result);


    if($row!= null && $row['user'] == $username && crypt($password, $row['pass']) == $row['pass'])
    {
        $_SESSION['username']=$username;
       echo"success";
       
    }else
    {
        echo("<b>Login Failed!</b> <br>please enter correct username and password");
      
    }
};
?>