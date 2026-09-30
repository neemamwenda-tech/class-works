<?php
require 'includes/sql.php';

//$conn->query()
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Student Directory</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #333333;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e0e0e0;
        }

        .page-header h2 {
            color: #2c3e50;
            font-size: 24px;
        }

        .btn-add {
            background-color: #27ae60;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            font-size: 14px;
        }

        .btn-add:hover {
            background-color: #219150;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
        }

        th, td {
            padding: 12px 10px;
            text-align: left;
            border: 1px solid #dddddd;
        }

        th {
            background-color: #34495e;
            color: #ffffff;
            font-weight: bold;
        }

        /* Zebra striping for table rows */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f5f9;
        }

        .btn-action {
            padding: 6px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
            margin-right: 4px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-view {
            background-color: #3498db;
            color: white;
        }

        .btn-view:hover {
            background-color: #2980b9;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        .badge-gender {
            text-transform: capitalize;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }

        .male {
            background-color: #e3f2fd;
            color: #1976d2;
        }

        .female {
            background-color: #fce4ec;
            color: #c2185b;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="page-header">
            <div>
                <h2>Registered Student Directory</h2>
            </div>
            <a href="student_registration.php" class="btn-add">+ Register New Student</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Student ID (Adm)</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Grade Level</th>
                        <th>Residential Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM tbl_students";
                        $result = $conn->query($sql);
                        if($result->num_rows < 1){
                           echo "No data found"; 
                        }else{
                            while($student = $result->fetch_assoc()){
                           
                    ?>
                    <tr>
                        <td><strong><?php echo $student['adm']; ?></strong></td>
                        <td><?php echo $student['fname']; ?></td>
                        <td><?php echo $student['lname']; ?></td>
                        <td><?php echo $student['dob']; ?></td>
                        <td><span class="badge-gender male"><?php echo $student['gender']; ?></span></td>
                        <td><?php echo $student['email']; ?></td>
                        <td><?php echo $student['phone']; ?></td>
                        <td><?php echo $student['grade']; ?></td>
                        <td><?php echo $student['address']; ?></td>
                        <td>
                            <a href="student_edit.php?sid=<?php echo $student['id']; ?>" class="btn-action btn-view">Edit</a>
                            <a href="includes/delete.php?sid=<?php echo $student['id']; ?>" class="btn-action btn-delete">Delete</a>
                        </td>
                    </tr>

                    <?php }} ?>
                    
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>