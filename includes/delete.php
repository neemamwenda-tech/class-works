<?php

include 'sql.php';

if(isset($_GET['sid'])){
    $id = $_GET['sid'];

    $sql = "DELETE FROM tbl_students WHERE id = ?";

    $statement = $conn->prepare($sql);
    $statement->bind_param('i', $id);
    $statement->execute();

    if($statement){}
    echo "<script>alert('Student with ID $id has been deleted successfully!');</script>";
    echo "<script>window.location.href='../student_view.php';</script>";
}else{
    echo "<script>alert('No student ID found');</script>";
    echo "<script>window.location.href='../student_view.php';</script>";
}