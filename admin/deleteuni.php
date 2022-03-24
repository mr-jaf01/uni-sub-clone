<?php
include('db/connect_db.php');
$catID = $_GET['uniID'];
$delete = "DELETE FROM university WHERE university_id='$catID'";
if(mysqli_query($conn, $delete)){
              header('location:dashboard.php?page=university');
}else{

    ?>
    <center><p class="p-3 rounded bg-red-400 text-center">Ops!! Can not Delete University</p></center>
    <?php
}
