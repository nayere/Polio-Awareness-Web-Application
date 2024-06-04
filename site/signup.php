<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polio_awareness";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize it
    $username = sanitizeInput($_POST["username"]);
    $email = sanitizeInput($_POST["email"]);
    $password = sanitizeInput($_POST["password"]);
    
    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "New record created successfully";
        // Redirect to a success page or login page
        header("Location: success.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
