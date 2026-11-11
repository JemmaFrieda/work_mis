<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "mis";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

else{
    echo "Connected successfully to database '$database'";
}


?>