<?php include('func.php'); ?>
<div class="p-3 bg-slate-200" style="display:flex; justify-content:space-between">
<a href="dashboard.php?page=category" class="p-1 rounded btn bg-blue-600">Back</a>    
<h4 class="">ADDING CATEGORY</h4>
</div>
<hr class="my-1" />

<form action="" method="POST">
  <div class="p-5">
  <div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ENTER CATEGORY / DEPARTMENT</label>
    <input type="text" name="catname" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Department name" required>
  </div>
  <div class="mb-6">
    <label for="password"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SELECT UNIVERSITY</label>
    <select id="password" name="uni" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
        <?php 
        $universities = getUniversity();
        foreach ($universities as $key => $uni) {
            ?>
                <option value="<?php echo $uni['university_name'] ?>"><?php echo $uni['university_name'] ?></option>

            <?php
        }
        ?>
    </select>
  </div>
  
  <button type="submit" name="submit" class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
</div>
</form>
<div>
    <?php 
    include('db/connect_db.php');
    if(isset($_POST['submit'])){
      $catname = $_POST['catname'];
      $uni = $_POST['uni'];
      $date = date('h:m:s Y-m-d');

      $save = "INSERT INTO categories(category_name,created_date,university)VALUES('$catname', '$date', '$uni')";
      if(mysqli_query($conn, $save)){
        ?>
        <center><p class="p-3 rounded bg-green-400 text-center">Category Added Successfully</p></center>
        <?php
      }else{

        ?>
        <center><p class="p-3 rounded bg-red-400 text-center">Ops!! Can not Add Category</p></center>
        <?php

      }
    }
    
    
    
    ?>
</div>