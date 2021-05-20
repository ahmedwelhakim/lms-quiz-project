<?php
if(isset($_POST['username'])){
//Getting the data from the form  
$username= $_POST['username'];
$userPwd= $_POST['password'];



//connect the server to the database
 include("../db/dbConnection.php");
 include("../db/dbFunctions.inc.php");
  

 createUser($conn, $username, $userPwd, "st");
}
?>