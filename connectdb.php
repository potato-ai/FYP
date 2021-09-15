<?php

<<<<<<< HEAD
$servername = "localhost";
$username = "YongXian";
$password = "1234";
=======
$servername="localhost";
$username="admin";
$password="admin";
>>>>>>> b3218fa60639266605e386cc76cdb31c4b24c037
$database = "ylp fyp";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "Database is not connected ". "<br>";
}
else{
    echo "Database is connected";
}

?>