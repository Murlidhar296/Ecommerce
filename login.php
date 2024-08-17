<?php
session_start(); // Start the session to store user information

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
$email = $_POST['email'];
$password = $_POST['password']; // Plain text password from the login form

// Prepare SQL statement to prevent SQL injection
$sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$sql->bind_param("ss", $email, $password);

// Execute the query
$sql->execute();
$result = $sql->get_result();

// Check if a matching user was found
if ($result->num_rows > 0) {
    // User found, login successful
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id']; // Store user ID in the session
    $_SESSION['first_name'] = $user['first_name']; // Store first name in the session
    $_SESSION['email'] = $user['email']; // Store email in the session
    
    // Redirect to the welcome page
    header("Location: welcome.php");
} else {
    // User not found, login failed
    header("Location: login.php?error=1");
}

$sql->close();
$conn->close();
?>
