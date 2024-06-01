<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$languages = implode(', ', $_POST['languages']);
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];

// Prepare SQL statement
$sql = "INSERT INTO users (first_name, last_name, email, dob, languages, country, state, city)
        VALUES ('$firstName', '$lastName', '$email', '$dob', '$languages', '$country', '$state', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    // Redirect to a confirmation page or send email confirmation here
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
