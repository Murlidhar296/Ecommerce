<?php
$servername = "localhost";
    $username = "u670459635_Fbmart_123";
    $password = "Fbmart@258";
    $dbname = "u670459635_Fb_mart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$password = $_POST['password']; // Storing password in plain text
$mobile = $_POST['mobile'];
$district = $_POST['district'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];

// Insert data into the database
$sql = "INSERT INTO users (first_name, last_name, dob, email, password, mobile, district, city, state, pincode) 
        VALUES ('$first_name', '$last_name', '$dob', '$email', '$password', '$mobile', '$district', '$city', '$state', '$pincode')";

if ($conn->query($sql) === TRUE) {
    echo "Form Submitted Succesfully";
     header("Location: loginForm.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
