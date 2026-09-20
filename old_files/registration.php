<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="registration_distribution.php" method="post">

        <h2>Student Registration</h2>

        <label>Full Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone Number:</label>
        <input type="tel" name="phone" required>

        <label>Registration Number:</label>
        <input type="text" name="regno" required>

        <label>Gender:</label>
        <div class="radio">
            <input type="radio" name="gender" value="Female" required> Female
            <input type="radio" name="gender" value="Male"> Male
        </div>

        <label>Course:</label>
        <select name="course" required>
            <option value="">Select a course</option>
            <option value="BBIT">BBIT</option>
            <option value="IT">Information Technology</option>
            <option value="CS">Computer Science</option>
            <option value="SE">Software Engineering</option>
        </select>

        <label>Location:</label>
        <select name="location" required>
            <option value="">Select your location</option>
            <option value="Nairobi">Nairobi</option>
            <option value="Mombasa">Mombasa</option>
            <option value="Kisumu">Kisumu</option>
            <option value="Nakuru">Nakuru</option>
        </select>

        <label>Password:</label>
        <input type="password" name="password" required>

        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" required>

        <button type="submit">Register</button>

    </form>

</body>

</html>