<?php
 
require_once 'sql.php';
 
if(isset($_POST['submit_user'])){
 
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $role = $_POST['role'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
 
    if($pwd != $cpwd){
        echo "<script>alert('Password does not match!');</script>";
        echo "<script>window.location.href='../user_registration.php';</script>";
        exit();
    }else{
         $sql = "SELECT uname FROM tbl_users WHERE uname = ?";
         $stmt = $conn->prepare($sql);
         $stmt->bind_param("s", $userName);
         $stmt->execute();
         $result = $stmt->get_result();
 
         if($result->num_rows > 0){
            echo "<script>alert('Username already exists, choose another name!');</script>";
            echo "<script>window.location.href='../user_registration.php';</script>";
            exit();
         }else{
 
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "INSERT INTO tbl_users (full_name, uname, role, pass) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $fullName, $userName, $role, $pwd);
            $stmt->execute();
           
            if($stmt){
                echo "<script>alert('User registered successfully!');</script>";
                echo "<script>window.location.href='../login.php';</script>";
            }else{
                echo "<script>alert('User registration failed!');</script>";
                echo "<script>window.location.href='../user_registration.php';</script>";
            }
         }
    }
}
