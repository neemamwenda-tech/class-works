<!DOCTYPE html>
 <html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
     content="width=device-width, intial-scale=1.0">
    
     <title>Student sign up</title>
     <style>
            body{
        font-family:Arial;
        background-color:#f2f2f2;
    }
    form{
        width: 500px;
        margin:50px auto;
        padding: 25px;
        background-color:white;
        border: 1px solid #ccc;
        border-radius:10px;
    }
    h2{
        text-align: center;
    }
    label{
        display:block;
        margin-top:10px;
    }
    input, select{
        width: 100%;
        padding: 8px;
        margin-top:5px;
        box-sizing:border-box;
    }
.radio input{
    width: auto;
}
button{
    margin-top: 15px;
    padding: 10px;
    width:100%;
}
 
     </style>
 </head>

 <body>
    <form action="student_dashboard.php" method="post">
    <h2>Student Marks</h2>
    <label>First Name:</label>
    <input type="text" name="fname" >
 
    <label>Last Name:</label>
    <input type="text" name="lname">
 
    <label>Registration Number:</label>
    <input type="text" name="regno">
 
    <label>Gender:</label>
<div class="radio">
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Male"> Male
</div>
 
    <label>Course:</label>
    <select name="course">
        <option value="">Select a course</option>
        <option value="IT">Information Technoloy</option>
        <option value="CS">Computer Science</option>
        <option value="SE">Software Engineering</option>
    </select>
 
<label>Marks:</label>
<input type="number" name="marks">
<button type="submit">Send Record</button>
 
   </form>
</body>
</html>
