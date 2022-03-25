<?php include('func.php'); ?>
<div class="p-3 bg-slate-200" style="display:flex; justify-content:space-between">
    <h4 class="">COURSES PANEL</h4>
    <a href="dashboard.php?page=addcourse" class="p-3 font-small text-white rounded btn bg-green-800">Add New Course</a>
</div>
<hr class="my-1" />
<div style="height:29.7rem; overflow:auto">
    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">


<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
<tr>
<th scope="col" class="px-6 py-3">
Course ID
</th>
<th scope="col" class="px-6 py-3">
Course Name
</th>
<th scope="col" class="px-6 py-3">
Course Category
</th>

<th scope="col" class="px-6 py-3">
Course University
</th>

<th scope="col" class="px-6 py-3">
<span class="sr-only"></span>
</th>
</tr>
</thead>




<tbody>

<?php 
$course = getcourse();
foreach ($course as $key => $cval) {
    ?>
    
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
<?php echo $cval['course_id'] ?>
</th>
<td class="px-6 py-4">
<?php echo $cval['course_title'] ?>
</td>
<td class="px-6 py-4">
   <?php echo $cval['course_category']       ?>

</td>

<td class="px-6 py-4">
   <?php echo $cval['course_university']       ?>

</td>
<td class="px-6 py-4 text-right">
<p><a href="#" class="font-xs rounded font-bold p-2 text-white btn bg-blue-600">Edit</a> <a href="dashboard.php?page=deleteco&courseID=<?php echo $cval['course_id'] ?>" class="font-small p-2 text-white btn bg-red-600 rounded">Delate</a></p>
</td>
</tr>
    
    
    
    
    
    
    
    
    
    <?php
}

?>
</tbody>
</table>
</div>

</div>