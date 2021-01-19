<?php

$serverName= "localhost";
$dbEmail= "root";
$dbPassword= "";
$dbName= "signinsystemm";

$conn = mysqli_connect($serverName, $dbEmail, $dbName);

if(!$conn){
    die("Connection failed: ", mysqli_connect_error());
}