<?php
include('db/connect_db.php');
$catID = $_GET['courseID'];
$delete = "DELETE FROM courses WHERE       course_id='$catID'";
if(mysqli_query($conn, $delete)){
           header('location:dashboard.php?page=course');
}else{

    ?>
    <center><p class="p-3 rounded bg-red-400 text-center">Ops!! Can not Delete Category</p></center>
    <?php
}
