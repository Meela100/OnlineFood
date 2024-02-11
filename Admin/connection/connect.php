<?php

//main connection file for both admin & front end
$servername= "localhost"; //server
$username = "aleem";//username
$password = "@aleem1234$"; //password
$dbname = "OnlineFood"; //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);// connecting
// Check connection
if (!$db) {    //checking connection to DB
die("Connection failed: " );
}


?>