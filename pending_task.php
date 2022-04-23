<?php
include 'config.php';

$query = "SELECT COUNT(*) FROM task WHERE done=0";
$result = mysqli_query($conn, $query);

$row = $result->fetch_array()[0];

echo "You have $row pending tasks.";

?>