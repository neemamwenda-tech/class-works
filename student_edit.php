<?php

include "includes/sql.php";

if (isset($_GET['sid'])) {
  $id = $_GET['sid'];

  $sql = "SELECT * FROM tbl_students WHERE id = ?";
  $stmt = $conn->prepare($sql);

  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if($result->num_rows < 1){
    echo "<script>alert('There is no student with id $id available')</script>";
    echo "<script>window.location.href='student_view.php'</script>";
  }else{

  while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $dob = $row['dob'];
    $gender = $row['gender'];
    $email = $row['email'];
    $grade = $row['grade'];
    $phone = $row['phone'];
    $address = $row['address'];
    $adm = $row['adm'];
  }
}
}else{
  echo "<script>alert('No student selected')</script>";
  echo "<script>window.location.href='student_view.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Edit</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <div class="form-container">
    <h2>Edit student record for <?php echo" $fname $lname" ?></h2>
    
    <form action="includes/edit.php" method="POST">
      <input type="number" name="id" value = "<?php echo $id ?>" hidden>
      <!-- Row 1: Names -->
      <div class="form-row">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" name="firstName" value="<?php echo $fname ?>" required>
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" name="lastName" value ="<?php echo $lname ?>" required>
        </div>
      </div>

      
      <div class="form-row">
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob" value = "<?php echo $dob ?>" required>
        </div>
        <div class="form-group">
          <label>Gender</label>
          <div class="radio-group">
            <label class="radio-label">
              <input type="radio" name="gender" value="male" <?php if($gender==='male'){ echo "checked";}else{ echo "";} ?> required> Male
            </label>
            <label class="radio-label">
              <input type="radio" name="gender" value="female" <?php if($gender==='female'){ echo "checked";}else{ echo "";} ?>> Female
            </label>
          </div>
        </div>
      </div>

      <!-- Row 3: Electronic Contacts -->
      <div class="form-row">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" value = "<?php echo $email ?>" required disabled>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" value = "<?php echo $phone ?>" required>
        </div>
      </div>

      <!-- Row 4: Institutional Categorization -->
      <div class="form-row">
        <div class="form-group">
          <label for="grade-level">Grade/Class Level</label>
          <select id="grade-level" name="grade" required>
            <option value="<?php echo $grade ?>" disabled selected>Leave this the same if you don't want to change</option>
            <option value="grade-9">Grade 9</option>
            <option value="grade-10">Grade 10</option>
            <option value="grade-11">Grade 11</option>
            <option value="grade-12">Grade 12</option>
          </select>
        </div>
        <div class="form-group">
          <label for="student-id">Student ID / Roll Number</label>
          <input type="text" id="student-id" name="studentId" value = "<?php echo $adm ?>" required disabled>
        </div>
      </div>

      <!-- Row 5: Local Address -->
      <div class="form-row">
        <div class="form-group full-width">
          <label for="address">Residential Address</label>
          <textarea id="address" name="address" placeholder="Street name, City, Postal Code" required><?php echo $address ?></textarea>
        </div>
      </div>

      <!-- Action Footer -->
      <div class="form-actions">
        <button type="reset">Clear Form</button>
        <button type="submit" name="student_edit">Update Profile</button>
      </div>

    </form>
  </div>

</body>
</html>
