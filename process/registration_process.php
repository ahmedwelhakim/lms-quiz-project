<?php
if (isset($_POST['username'])) {
    //Getting the data from the form  
    $username = $_POST['username'];
    $type = $_POST['type'];

    $blowfish_salt = bin2hex(openssl_random_pseudo_bytes(22));
    $hash = crypt($_POST['password'], "$2a$12$" . $blowfish_salt);



    //connect the server to the database
    include("../db/dbConnection.php");



    //Prevent sql injection
    $username = stripcslashes($username);
    $password = stripcslashes($hash);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    //db sql
    $sql = "INSERT INTO user (username, password,type) VALUES ('$username','$password' ,'$type')";
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "<p> Registeration Failed!</p> <br>";
    }
}
