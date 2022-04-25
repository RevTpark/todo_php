<?php
include 'config.php';

$username = $_POST["username"];

$_SESSION['username'] = $username;

echo "$username's To Do List";

?>