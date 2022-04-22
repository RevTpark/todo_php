<?php
include 'config.php';

$query = "SELECT * FROM task";
$data = mysqli_query($conn, $query);

if(mysqli_num_rows($data) > 0){
    while($row = mysqli_fetch_assoc($data)){
?>

<li>
    <?php echo $row['title']; ?>
    <button id="updateTask" data-id="<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></button>
    <button id="deleteTask" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
    
</li>

<?php
    }
}
else{
    echo "No Record Exists";
}

?>