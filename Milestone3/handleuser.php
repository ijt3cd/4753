<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datanamics";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$baseball = $_POST['baseball'];
$basketball = $_POST['basketball'];
$football = $_POST['football'];
$volleyball = $_POST['volleyball'];

$sql = "INSERT INTO userData (name, email, address, city, state, zip, baseball, basketball, football, volleyball) VALUES ('$name', '$email', '$address', '$city', '$state', '$zip', '$baseball', '$basketball', '$football', '$volleyball')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>