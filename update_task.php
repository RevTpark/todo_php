<?php
include 'config.php';

$id = $_POST["id"];
$taskName = $_POST["taskName"];
$status = $_POST['status'] == "true"?1:0;

$query = "UPDATE task SET title='$taskName', done=$status WHERE id=$id";

$data = mysqli_query($conn, $query);
if($data){
    echo 1;
}
else{
    echo 0;
}

?>