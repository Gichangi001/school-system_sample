<?php
$Fullnames = isset($_POST['Fullnames']) ? $_POST['Fullnames'] : "";
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";

echo "Fullnames: " . $Fullnames . "<br>";
echo "username: " . $username . "<br>";
echo "password: " . $password . "<br>";
echo "email: " . $email . "<br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoollogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into table
$sql = "INSERT INTO users (Fullnames, Username, Password, EmailAddress) VALUES ('$Fullnames', '$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
