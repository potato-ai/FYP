<?php

$servername="localhost";
$username="admin";
$password="admin";
$database = "ylp fyp";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "Database is not connected ". "<br>";
}

?>