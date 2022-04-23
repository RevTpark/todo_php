<?php
include 'config.php';

$query = "SELECT * FROM task";
$data = mysqli_query($conn, $query);

if(mysqli_num_rows($data) > 0){
    while($row = mysqli_fetch_assoc($data)){
?>

<li class="task w-50 p-2 mb-3 <?php if($row['done'] == 1){ echo "done-task"; } else{ echo "undone-task"; }?>">
    <span class="task-title"><?php echo $row['title']; ?></span>
    <button class="btn btn-info" id="updateTask" data-id="<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></button>
    <button class="btn btn-danger" id="deleteTask" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
</li>

<?php
    }
}
else{
    echo "No Record Exists";
}

?>