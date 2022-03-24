<?php include('func.php'); ?>
<div class="p-3 bg-slate-200" style="display:flex; justify-content:space-between">
    <h4 class="">UNIVERSITY PANEL</h4>
    <a href="dashboard.php?page=adduni" class="p-3 font-small text-white rounded btn bg-green-800">Add University</a>
</div>
<hr class="my-1" />
<div style="height:29.7rem; overflow:auto">
    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">


<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
<tr>
<th scope="col" class="px-6 py-3">
University ID
</th>
<th scope="col" class="px-6 py-3">
University Name
</th>
<th scope="col" class="px-6 py-3">
University Link
</th>

<th scope="col" class="px-6 py-3">
<span class="sr-only"></span>
</th>
</tr>
</thead>




<tbody>

<?php 
$universities = getUniversity();
foreach ($universities as $key => $uni) {
    ?>
    
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
<?php echo $uni['university_id'] ?>
</th>
<td class="px-6 py-4">
<?php echo $uni['university_name'] ?>
</td>
<td class="px-6 py-4">
    <a href="https://<?php echo $uni['university_link']?>" class="hover:underline text-blue-600"><?php echo $uni['university_link']?></a>

</td>
<td class="px-6 py-4 text-right">
<p><a href="#" class="font-small rounded font-bold p-2 text-white btn bg-blue-600">Edit</a>| <a href="dashboard.php?page=deleteuni&uniID=<?php echo $uni['university_id'] ?>" class="font-small p-2 text-white btn bg-red-600 rounded">Delate</a></p>
</td>
</tr>
    
    
    
    
    
    
    
    
    
    <?php
}

?>
</tbody>
</table>
</div>

</div>