<div>Front Page Settings</div>
<hr class="my-1">
<form action="" method="POST">
<div>
    <h4>Header</h4>
    <div class="">
            <div class="flex mb-4">
            <div class="w-1/2 mt-5 ">
                <label>Site Name</label><br>
                <input class="p-3 rounded border" type="text" name="sitename" />
            </div>
            <div class="w-1/2"></div>
            
            </div>
    </div>

    <hr class="mt-5">

    Footer
    <div>

    <div class="flex mb-4">
            <div class="w-1/2 mt-5 ">
                <label>Footer Name</label><br>
                <input class="p-3 rounded border" type="text" name="footername" />
            </div>
            <div class="w-1/2"></div>
            
            </div>
    </div>
    <button class="p-4 bg-green-600 rounded justify-center w-full" name="submit">Update Settings</button>
</div>

<div>
</div>
</form>

<div>
<?php 
include('db/connect_db.php');
if(isset($_POST['submit'])){
    $sitename = $_POST['sitename'];
    $footer = $_POST['footername'];
    $date = date('h:m:s Y-m-d');
    $query = "UPDATE front SET site_name='$sitename', footer_name='$footer', created_date='$date' WHERE id=1";
    if(mysqli_query($conn,$query)){
        ?>
        <p class="p-4 rounded bg-green-400">Details Update Successfully</p>
        
        <?php
    }else{
        ?>
        <p class="p-4 rounded bg-red-400">Unable to Update Site Details!!</p>
        <?php
    }
}

    
?>
</div>