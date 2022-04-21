<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "todophp";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("<script>alert('Connection to database failed!')</script>");
}

?>