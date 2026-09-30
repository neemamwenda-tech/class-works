<?php

require('sql.php');

if(isset($_POST['edit_student'])){

    $fname = trim($_POST['firstName']);
    $lname = trim($_POST['lastName']);
    $dob = trim($_POST['dob']);
    $gender = trim($_POST['gender']);
    //$email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $grade = trim($_POST['gradeLevel']);
   // $adm = trim($_POST['adm']);
    $address = trim($_POST['address']);

    $id = $_POST['id'];

    $sql = "UPDATE tbl_students SET fname = ?, lname = ?, dob = ?, gender = ?, phone = ?, grade = ?, address = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssssi", $fname, $lname, $dob, $gender, $phone, $grade, $address, $id);

    if($stmt->execute()){
        echo "<script>alert('Student data updated successfully!');</script>";
        echo "<script>window.location.href='../student_view.php';</script>";
    }
  
    

}