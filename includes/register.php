<?php
require('sql.php');

if (isset($_POST['submit_student'])) {
    $fname = trim($_POST['firstName']);
    $lname = trim($_POST['lastName']);
    $dob = trim($_POST['dob']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $gradeLevel = trim($_POST['gradeLevel']);
    $address = trim($_POST['address']);

    $query = mysqli_query($conn, "INSERT INTO students (first_name, last_name, dob, gender, email, phone, grade_level, address) VALUES ('$fname', '$lname', '$dob', '$gender', '$email', '$phone', '$gradeLevel', '$address')");
}

    if($query) {
    echo "<script>alert('Registration successful.');</script>";
    echo "<script>window.location.href='../student_registration.php';</script>";
} else {
    echo "<script>alert('Registration failed. Please try again.');</script>";
}
