<?php
require('sql.php');
 
if(isset($_POST['submit_student'])){
 
    $fname = trim($_POST['firstName']);
    $lname = trim($_POST['lastName']);
    $dob = trim($_POST['dob']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $grade = trim($_POST['gradeLevel']);
    $adm = trim($_POST['adm']);
    $address = trim($_POST['address']);
 
 
    $query = "SELECT email,adm FROM tbl_students WHERE email = ? OR adm = ?";
 
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss",$email,$adm);
    $stmt->execute();
    $stmt->store_result();
 
    if($stmt->num_rows > 0){
        echo "<script>alert('Email or admission number already exists');</script>";
        echo "<script>window.location.href='../student_registration.php';</script>";
        $stmt->close();
    }
    else{
       
    $stmt->close();
 
    $sql = "INSERT INTO tbl_students(fname,lname,dob,gender,email,phone, grade,adm,address) VALUES(?,?,?,?,?,?,?,?,?)";
    $prep = $conn->prepare($sql);
    $prep->bind_param("sssssssss",$fname,$lname,$dob,$gender,$email,$phone,$grade,$adm,$address);
    $prep->execute();
 
    if($prep->execute()){
        echo "<script>alert('Registration successful');</script>";
        echo "<script>window.location.href='../student_registration.php';</script>";
    }else{
        echo "<script>alert('Registration failed');</script>";
        echo "<script>window.location.href='../student_registration.php';</script>";
    }
 
    }
 
 
}