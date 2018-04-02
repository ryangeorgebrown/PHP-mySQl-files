<?php

$userpost = $_POST['fullName'];
$userpostamount = $_POST['amountDollars'];
$userpostdescription = $_POST['description'];
$userpostcolour = $_POST['colorType'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO userinfo (name, amount, description,colour)
VALUES ('$userpost', '$userpostamount', '$userpostdescription','$userpostcolour')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>