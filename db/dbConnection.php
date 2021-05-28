<?php

    $ServerName="localhost";
    $dBusername="root";
    $dBpwd="";
    $dBName="lmsdb";

    $conn=mysqli_connect($ServerName,$dBusername,$dBpwd, $dBName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }