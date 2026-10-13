<?php
 
$password1 = "Hello@2026";
$password2 = "Hello@2026";  
 
echo "Password 1 is: " . $password1 . "<br>";
echo "Password 2 is: " . $password2 . "<br>";
 
//hash using md5
$md5_hash1 = md5($password1);
$md5_hash2 = md5($password2);
 
echo "<br>";
 
echo "Hashed  Password 1 using md5 is: " . $md5_hash1 . "<br>";
echo "Hashed Password 2  using md5 is: " . $md5_hash2 . "<br>";
 
//hash using sha1
$sha1_hash1 = sha1($password1);
$sha1_hash2 = sha1($password2);
 
echo "<br>";
 
echo "Hashed  Password 1 using sha1 is: " . $sha1_hash1 . "<br>";
echo "Hashed Password 2  using sha1 is: " . $sha1_hash2 . "<br>";
 
//hash using sha256
$sha256_hash1 = hash('sha256', $password1);
$sha256_hash2 = hash('sha256', $password2);
 
echo "<br>";
 
echo "Hashed  Password 1 using sha256 is: " . $sha256_hash1 . "<br>";
echo "Hashed Password 2  using sha256 is: " . $sha256_hash2 . "<br>";
 
//password_hash
$hash1 = password_hash($password1, PASSWORD_DEFAULT);
$hash2 = password_hash($password2, PASSWORD_DEFAULT);
 
echo "<br>";
 
echo "Hashed  Password 1 using password_hash is: " . $hash1 . "<br>";
echo "Hashed Password 2  using password_hash is: " . $hash2 . "<br>";
 
 
//verify passwords