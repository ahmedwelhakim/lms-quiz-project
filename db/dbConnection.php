<?php

    $host="localhost";
    $user="root";
    $pass="";
    $database="quizdbase";

    $conn=mysqli_connect($host,$user,$pass, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
  
    

    
?>