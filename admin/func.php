<?php

function getUniversity(){
    include 'db/connect_db.php';
    $query = "SELECT * FROM university";
    $run_query = mysqli_query($conn, $query);
    $university = array();
    while($row = mysqli_fetch_assoc($run_query)){
        $university[] = $row;  
    }
    return $university;

};

function getcategory(){
    include 'db/connect_db.php';
    $query = "SELECT * FROM categories";
    $run_query = mysqli_query($conn, $query);
    $categories = array();
    while($row = mysqli_fetch_assoc($run_query)){
        $categories[] = $row;  
    }
    return $categories;

};