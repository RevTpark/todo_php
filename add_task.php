<?php
include 'config.php';

$taskName = $_POST["taskName"];

$query = "INSERT INTO task (title, done) VALUES ('$taskName', 0)";

$data = mysqli_query($conn, $query);
if($data){
    echo 1;
}
else{
    echo 0;
}

?>