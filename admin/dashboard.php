<?php 
session_start();
if(!isset($_SESSION['email'])){
header('location:index.php');
}else{
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/1ddede1a2f.js"></script>
    </head>
    <body>
       <header class="header">
           <div>
              
           </div>
           <div>
               
           </div>
       </header>
       <main>
        <div class="flex mb-4">
            <div class="w-1/4   sidemenu">
                <p class="p-3 border"><a class="text-white"href="dashboard.php?page=course"> <i class="fa fa-book" aria-hidden="true"></i> Course</a></p>
                <p class="p-3 border"><a class="text-white" href="dashboard.php?page=category"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> Category</a></p>
                <p class="p-3 border"><a class="text-white" href="dashboard.php?page=university"> <i class="fa fa-university" aria-hidden="true"></i> University</a></p>
                <p class="p-3 border "><a class="text-white" href="dashboard.php?page=frontpage"><i class="fa fa-cogs" aria-hidden="true"></i> Front Page</a></p>
               
                <p class="p-3 border "><a class="text-red-400" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></p>
            </div>
            <div class="w-3/4  mainscreen ">
            <?php 
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                include($page.'.php');
            }else{
               include('course.php'); 
            }
            ?>
            </div>
            
        </div>
       </main>
        
        <script src="" async defer></script>
    </body>
</html>
    
    
<?php
}
?>
