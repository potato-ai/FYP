<?php

$servername = "localhost";
$username = "YongXian";
$password = "1234";
$database = "ylp fyp";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "Database is not connected ". "<br>";
}


?>