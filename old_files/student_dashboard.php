<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = trim ($_POST['fname']);
    $lname = trim ($_POST['lname']);
    $reg = trim ($_POST['regno']);
    $gender = trim ($_POST['gender']);
    $course = trim ($_POST['course']);
    $marks = trim ($_POST['marks']);

    if($fname===""|| $lname==="" ||$reg ===""||$gender===""||$course===""||$marks===""){
        echo "<p style='color:red;'>All fields are required.</p>";
    }else{

   if($marks>=70){
    $grade = "A";
    $status = "Pass";
   }elseif ($marks>=60){
    $grade = "B";
    $status = "Pass";
   }elseif ($marks>=50){
    $grade = "C";
    $status = "Pass";
   }elseif ($marks>=40){
    $grade = "D";
    $status = "Pass";
   }else{
    $grade ="F";
    $status = "Failed";
   }

?>
<!DOCTYPE html>
 <html lang ="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport"
   content="width=device-width, intial-scale=1.0">
       <title>Student system</title>
       <style> 
       body{
        font-family: Arial;
        background-color: #f2f2f2;
       }
       .details{
        width: 350px;
        margin: 50px auto;
        padding: 25px;
        background-color: white;
       }
       h2{
        text-align: center;
       }
       p{
        padding: 8px;
        border-bottom: 1px solid #ddd;
       }
       .text {
        color: red;
       }
       </style> 
</head>

 <body>
    <div class="details">
        <p>First Name: <span class="text"><?php echo $fname;?></span> </p>
        <p>Last Name: <span class="text"><?php echo $lname;?></span></p>
        <p>Registration Number: <span class="text"><?php echo $reg;?></span> </p>
        <p>Course: <span class="text"><?php echo $course;?></span> </p>
        <p>Gender: <span class="text"><?php echo $gender;?></span> </p>
        <p>Marks:  <span class="text"><?php echo $marks;?></span></p>
        <p>Grade: <span class="text"><?php echo $grade;?></span> </p>
        <p>Status:<span class="text"><?php echo $status;?></span> </p> </p>
        
    <div>
</body>
</html>

<?php
}}
?>


create a simple calculator where the user enters two values, chooses the operator then calculate the results. Make sure the user fills all fields(using html required and server validation).