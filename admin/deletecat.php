<?php
include('db/connect_db.php');
$catID = $_GET['catid'];
$delete = "DELETE FROM categories WHERE category_id='$catID'";
if(mysqli_query($conn, $delete)){
    header('location:dashboard.php?page=category');
}else{

    ?>
    <center><p class="p-3 rounded bg-red-400 text-center">Ops!! Can not Delete Category</p></center>
    <?php
}
