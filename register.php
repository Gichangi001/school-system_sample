<?php
include "conn.php"; // call connection code to db server

// receive user details form the form
$fullnames = isset($_POST['fullnames']) ? trim($_POST['fullnames']) : "";
$username = isset($_POST['username']) ? trim($_POST['username']) : "";
$password = isset($_POST['password']) ? md5(trim($_POST['password'])) : "";
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : ""; //avoiding injections use isset and filters

if ($fullnames == "" || $username == "" || $password == "" || $email == "") {
    echo "Please fill in all the fields. <a href='regis.html'>Register</a> to continue.";
} else {
    // Check if username already exists
    $sql = "SELECT * FROM users WHERE Username = '$username'";
    $result = mysqli_query($myconn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists. Please choose a different username. <a href='regis.html'>Register</a> to continue.";
    } else {
        // Insert new user into database
        $sql = "INSERT INTO users (Fullnames, Username, Password, Email) VALUES ('$fullnames','$username','$password','$email')";

        if (mysqli_query($myconn, $sql)) {
            echo "Registration successful. <a href='login.html'>Login</a> to continue.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($myconn);
        }
    }
}

mysqli_close($myconn);
?>
