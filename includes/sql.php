<?php
// error_reporting(0);

$host = "localhost";
$username = "root";
$password = "";
$dbname = "students_management";

$conn = new mysqli($host, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}