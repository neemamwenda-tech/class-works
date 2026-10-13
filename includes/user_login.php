<?php
require_once 'sql.php';
if(isset($_POST['login'])){
 $uname = $_POST['uname'];
 $pwd = $_POST['pwd'];
 
 
    $sql = "SELECT * FROM tbl_users WHERE uname = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1){
        $row = $result->fetch_assoc();

        if(password_verify($pwd, $row['pass'])){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['full_name'] = $row['full_name'];

            if($row['role'] == 'admin'){
          echo "<script>alert('Login successful!');</script>";
          echo "<script>window.location.href='../admin/admin_dashboard.php';</script>";
        }elseif($row['role'] == 'teacher'){
          echo "<script>alert('Login successful!');</script>";
          echo "<script>window.location.href='../teachers/teacher_dashboard.php';</script>";
        }elseif($row['role'] == 'student'){
          echo "<script>alert('Login successful!');</script>";
          echo "<script>window.location.href='../students/student_dashboard.php';</script>";
        }
  }else{
    echo "<script>alert('Username or Password is incorrect');</script>";
    echo "<script>window.location.href='../login.php';</script>";
  }
 
  }else{
    echo "<script>alert('Username or Password is incorrect');</script>";
    echo "<script>window.location.href='../login.php';</script>";
  }
 
 
}