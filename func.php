<?php
function pagesetting(){
    include 'db/connect_db.php';
    $query = "SELECT * FROM front";
    $run_query = mysqli_query($conn, $query);
    $pagedetails = array();
    while($row = mysqli_fetch_assoc($run_query)){
        $pagedetails[] = $row;  
    }
    return $pagedetails;
};
function getpages(){
    include 'db/connect_db.php';
    $query = "SELECT * FROM pages";
    $run_query = mysqli_query($conn, $query);
    $pages = array();
    while($row = mysqli_fetch_assoc($run_query)){
        $pages[] = $row;  
    }
    return $pages;
};

function getcourse(){
    include 'db/connect_db.php';
    $query = "SELECT * FROM courses";
    $run_query = mysqli_query($conn, $query);
    $courses = array();
    while($row = mysqli_fetch_assoc($run_query)){
        $courses[] = $row;  
    }
    return $courses;
};

function getcoursebyID($courseID){
    include 'db/connect_db.php';
    $query = "SELECT * FROM courses WHERE course_id='$courseID'";
    $run_query = mysqli_query($conn, $query);
    $course = array();
    while($row = mysqli_fetch_assoc($run_query)){
        $course[] = $row;  
    }
    return $course;

};

function getcoursebycategory($catname){
    include 'db/connect_db.php';
    $query = "SELECT * FROM courses          WHERE course_category ='$catname'";
    $run_query = mysqli_query($conn, $query);
    $course = array();
    while($row = mysqli_fetch_assoc($run_query)){
        $course[] = $row;  
    }
    return $course;

};

function getcategory(){
    include 'db/connect_db.php';
    $query = "SELECT * FROM categories";
    $run_query = mysqli_query($conn, $query);
    $category = array();
    while($row = mysqli_fetch_assoc($run_query)){
        $category[] = $row;  
    }
    return $category;

};

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


?>