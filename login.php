<?php 
include "conn.php";
echo "<h1>Member Area</h1>";
if(!empty($_POST['username']) && !empty($_POST['password']))// check if username and password is empty
{
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 
// Check if user exists in database
$sql = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Login successful
    $_SESSION['username'] = $username;
    header("Location: form.html");
} else 
    // Login failed
    echo "Incorrect username or password. <a href='login.html'>Try again</a>.";
}

mysqli_close($myconn);
?>