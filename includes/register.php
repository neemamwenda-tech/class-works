<?php
require('sql.php');

if(isset($_POST['submit_student'])){

    $fname = trim($_POST['firstName']);
    $lname = trim($_POST['lastName']);
    $dob = trim($_POST['dob']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $grade = trim($_POST['grade']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $adm = trim($_POST['studentId']);

    //VALIDATION RULDES

$query = "SELECT email FROM tbl_students where email = ? LIMIT 1";

$stquery = $conn->prepare($query);

$stquery->bind_param("s",$email);
$stquery->execute();
$stquery->store_result();

if($stquery->num_rows>0){
  echo "<script>alert('The user already exists')</script>";
    echo "<script>window.location.href='../student_registration.php'</script>";   
}else{

$sql = "INSERT INTO tbl_students(fname,lname,dob,gender,email,phone,grade,adm, address) VALUES (?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);

if($stmt){
$stmt->bind_param("sssssssss",$fname, $lname, $dob, $gender, $email, $phone, $grade,$adm, $address);

if($stmt->execute()){
      echo "<script>alert('Registration successful')</script>";
    echo "<script>window.location.href='../student_registration.php'</script>";
}else{
       echo "<script>alert('Registration failed')</script>";
 
}

}else{
         echo "<script>alert('Preparation was not successful')</script>";
  
}
  
}



}else{
  echo "<script>alert('No request has been received')</script>";
}




  