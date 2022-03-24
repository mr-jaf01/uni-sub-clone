<?php
$DB_HOST = '127.0.0.1';
$DB_USER = 'root';
$DB_PASS =  '';
$DB_NAME = 'uni_sub_db';
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME) or die('con not connect to database');

//$date = date('h:m:s Y-m-d');
//$insert = "INSERT INTO pages(page_tittle,created_date)VALUES('UNIVERSITIES','$date')";
//if(mysqli_query($conn,$insert)){
 //echo "page save fine";
//}