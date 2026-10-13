<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login </title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
 
  <div class="form-container">
<h2>Log into the Account</h2>

<form action="includes/user_login.php" method="POST">
<!-- Row 1: Names -->
<div class="form-row">
<div class="form-group">
<label for="user-name">User Name</label>
<input type="text" id="user-name" name="uname"  required>
</div>
</div>
 
           <!-- Row 5: Password and Confirm -->
<div class="form-row">
<div class="form-group">
<label for="pwd">Password</label>
<input type="password" id="pwd" name="pwd" required>
</div>
</div>
 
      <!-- Action Footer -->
<div class="form-actions">
        Dont have an account? Click <a href="user_registration.php">here </a> to register
<button type="submit" name="login">Login</button>
</div>
 
    </form>
</div>
 
</body>
</html>