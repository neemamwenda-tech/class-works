<?php
require('sql.php');

if(isset($_POST['login'])){

    $adm = trim($_POST['adm']);
    $pass = trim($_POST['pwd']);

    // Server-side validation: both fields must be filled
    if($adm === "" || $pass === ""){
        echo "<script>alert('Please fill in all fields');</script>";
        echo "<script>window.location.href='../login.php';</script>";
        exit;
    }

    // Find the student by admission number
    $query = "SELECT password FROM tbl_students WHERE adm = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $adm);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
    $stmt->close();

    // Compare the typed password with the stored hash
    if($student && password_verify($pass, $student['password'])){
        echo "<script>alert('Login successful');</script>";
        echo "<script>window.location.href='../student_view.php';</script>";
    }else{
        echo "<script>alert('Invalid admission number or password');</script>";
        echo "<script>window.location.href='../login.php';</script>";
    }

    $conn->close();
}