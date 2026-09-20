<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["name"];
    $email = $_POST["email"];
    $reg = $_POST["regno"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];
    $location = $_POST["location"];
    $password = $_POST["password"];
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Dashboard</title>
</head>

<body>

<h2>Student Details</h2>

<p>Full Name: <?php echo $fullname; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Registration Number: <?php echo $reg; ?></p>
<p>Gender: <?php echo $gender; ?></p>
<p>Course: <?php echo $course; ?></p>
<p>Location: <?php echo $location; ?></p>
<p>Password: <?php echo $password; ?></p>

</body>
</html>