<?php
require 'dbcon.php';
session_start();

if(isset($_POST['save_student'])){

    $name =mysqli_real_escape_string($con,$_POST['name']);


    $email=mysqli_real_escape_string($con,$_POST['email']);
    

    $phone =mysqli_real_escape_string($con,$_POST['phone']);
    

    $course =mysqli_real_escape_string($con,$_POST['course']);
    

     $query ="INSERT INTO  students(name,email,course,phone)  VALUES('$name','$email','$phone','$course')";


    $query_run= mysqli_query($con,$query);
    if($query_run){
       $_SESSION ['message'] = "Student created successfully";
        header("Location: student_create.php");
        exit(0);
    }
    else{
        $_SESSION ['message'] = "Student  not created";
        header("Location: student_create.php");
        exit(0);
    }
}

?>
