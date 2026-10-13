<?php

include "sql.php";

if(isset($_POST['student_edit'])){

    $id = $_POST['id'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $grade = $_POST['grade'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $adm = $_POST['studentId'];

    $sql = "UPDATE tbl_students SET fname = ?, lname = ?, dob = ?, gender = ?, email = ?, grade = ?, phone = ?, address = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssssssssi", $fname, $lname, $dob, $gender, $email, $grade, $phone, $address, $id);

    if($stmt->execute()){
        echo "<script>alert('Student has been updated')</script>";
        echo "<script>window.location.href='../student_view.php'</script>";
    }else{
        echo "<script>alert('Student has not been updated')</script>";
        echo "<script>window.location.href='../student_view.php'</script>";
    }
}