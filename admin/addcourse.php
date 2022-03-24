<?php include('func.php'); ?>
<div class="p-3 bg-slate-200" style="display:flex; justify-content:space-between">
<a href="dashboard.php?page=course" class="p-1 rounded btn bg-blue-600">Back</a>    
<h4 class="">ADDING NEW COURSE</h4>
</div>
<hr class="my-1" />
<div class=" p-2">
<?php 
if(isset($_POST['submit'])){
    include('db/connect_db.php');
    $course_title = $_POST['course_title'];
    $course_overview = $_POST['course_overview'];
    $course_university = $_POST['course_university'];
    $course_eligibility = $_POST['course_eligibility'];
    $course_unit = $_POST['course_unit'];
    $course_fees = $_POST['course_fees'];
    $course_registration = $_POST['course_registration'];
    $course_duration = $_POST['course_durration'];
    $course_degree = $_POST['course_degree'];
    $course_site = $_POST['course_site'];
    $course_category = $_POST['course_category'];
    $carrier = $_POST['carrier'];
    $date = date('Y-m-d');
    
$insert = "INSERT INTO courses(course_title,course_overview,course_university,course_eligibility,course_unit,course_registration,course_fee,carrier,course_duration,degree,site,created_date,course_category,postedby)
VALUES('$course_title','$course_overview ','$course_university','$course_eligibility','$course_unit','$course_registration','$course_fees','$carrier','$course_duration',' $course_degree','$course_site','$date','$course_category','ADMIN')";
$run_save = mysqli_query($conn, $insert);
if($run_save){
    ?>
    <p class="text-center p-3 rounded bg-green-400">Course Publish Successfully</p>
    <?php
}else{
    ?>
    <p class="text-center p-3 rounded bg-red-400">Course Can not be Publish</p>
    <?php
}
    
}


?>

</div>
<div class="p-2" style="height:29.7rem; overflow:auto">
<form action="" method="POST">
<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Tittle</h4>
  </div>
  <div class="w-1/2">
      <input type="text" name="course_title"  placeholder="Course title" required class=" p-3 border rounded w-full"/>
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Overview</h4>
  </div>
  <div class="w-1/2">
      <textarea type="text" name="course_overview" style="height:200px;" required  placeholder="Course Overview" class=" border rounded w-full">
      </textarea> 
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course University</h4>
  </div>
  <div class="w-1/2">
      <select name="course_university" class="p-3 rounded w-full" required>
          <?php 
          $university = getUniversity();
          foreach ($university as $unikey => $univalue) {
              # code...
              ?>
              <option value="<?php echo $univalue['university_name'] ?>"><?php echo $univalue['university_name'] ?></option>
              <?php
          }
          ?>
      </select> 
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Eligibility</h4>
  </div>
  <div class="w-1/2">
      <textarea  name="course_eligibility" style="height:200px;" required  placeholder="Course Eligibility" class=" border rounded w-full">
      </textarea> 
  </div>
</div>
<hr class="my-1">


<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Unit</h4>
  </div>
  <div class="w-1/2">
      <input type="text"            name="course_unit"  placeholder="Course Unit" required class=" p-3 border rounded w-full"/>
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Registration</h4>
  </div>
  <div class="w-1/2">
      <textarea  name="course_registration" style="height:200px;" required  placeholder="Course Registration" class=" border rounded w-full">
      </textarea> 
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Fees</h4>
  </div>
  <div class="w-1/2">
      <input type="text"            name="course_fees"  placeholder="Course Fees" required class=" p-3 border rounded w-full"/>
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Duration</h4>
  </div>
  <div class="w-1/2">
      <input type="text"            name="course_durration"  placeholder="Course Duration" required class=" p-3 border rounded w-full"/>
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Degree</h4>
  </div>
  <div class="w-1/2">
      <select name="course_degree" class="p-3 rounded w-full" required>
         <option value="Bachelor">Bachelor</option>
         <option value="Masters">Masters</option>
         <option value="PhD">PhD</option>
         <option value="Undergraduate">Undergraduate</option>
      </select> 
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Degree</h4>
  </div>
  <div class="w-1/2">
      <select name="course_site" class="p-3 rounded w-full" required>
         <option value="Campus based">Campus based</option>
         <option value="Online based">Online based</option>
         <option value="Full time">Full time</option>
         <option value="Part time">Part time</option>
      </select> 
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Category / Department</h4>
  </div>
  <div class="w-1/2">
      <select name="course_category" class="p-3 rounded w-full" required>
          <?php 
          $category = getcategory();
          foreach ($category as $catkey => $catvalue) {
              # code...
              ?>
              <option value="<?php echo $catvalue['category_name'] ?>"><?php echo $catvalue['category_name'] ?></option>
              <?php
          }
          ?>
      </select> 
  </div>
</div>
<hr class="my-1">

<div class="flex ">
  <div class="w-1/2">
      <h4 class="align-item:center">Course Carrier Path</h4>
  </div>
  <div class="w-1/2">
      <textarea  name="carrier" style="height:200px;" required  placeholder="Course Carrier path" class=" border rounded w-full">
      </textarea> 
  </div>
</div>
<hr class="my-1">


<div class="flex ">
  <div class="w-1/2">
      
  </div>
  <div class="w-1/2">
     <button name="submit" class="rounded p-3 bg-green-700 text-white hover:border hover:bg-green-400 w-full">Publish</button>
  </div>
</div>
<hr class="my-1">








        </form>
</div>
