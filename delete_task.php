<?php
include 'config.php';

$id = $_POST["id"];

$query = "DELETE FROM task WHERE id=$id";

$data = mysqli_query($conn, $query);

if(!$data){
    echo 0;
}
else{
    echo 1;
}



?>