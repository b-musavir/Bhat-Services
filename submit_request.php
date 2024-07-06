<?php
// Database configuration
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "bhat_services";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$service = $_POST['service'];

// Insert data into database
$sql = "INSERT INTO requests (first_name, last_name, phone, email, address1, address2, city, state, service)
VALUES ('$first_name', '$last_name', '$phone', '$email', '$address1', '$address2', '$city', '$state', '$service')";

if ($conn->query($sql) === TRUE) {
    // Redirect back to the form page with a success message
    header("Location: index.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
