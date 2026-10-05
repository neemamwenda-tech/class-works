<?php 

include "sql.php";

if(isset($_GET['sid'])){
    $id = $_GET['sid'];

    $sql = "DELETE FROM tbl_students WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param('i', $id);
    $stmt->execute();

    if(!$stmt){
        echo "<script>alert('Student has not been deleted')</script>";
        echo "<script>window.location.href='../student_view.php'</script>";
    }else{
        echo "<script>alert('Student has been deleted')</script>";
        echo "<script>window.location.href='../student_view.php'</script>";
    }

    $stmt->close();
}

