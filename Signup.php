<?php
$servername = "localhost";
$username = "naman_sahai";
$password = "Sneakerhead@01";
$dbname = "SneakerSleuth";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$uname = $conn->real_escape_string($_POST['uname']);
$pwd = $conn->real_escape_string($_POST['pwd']);
$cpwd = $conn->real_escape_string($_POST['cpwd']);

$sql = "INSERT INTO SignUp (name, email, uname, pwd, cpwd) VALUES ('$name', '$email', '$uname', '$pwd', '$cpwd')";
if ($conn->query($sql) === TRUE) {
echo "Record added successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>