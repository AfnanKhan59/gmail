<?php
session_start(); // Start the session

// Database connection
$servername = "localhost";
$username = "root"; // default username for XAMPP
$password = ""; // default password for XAMPP
$dbname = "login_clone";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve email from session
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $password = $_POST['password'];

        // Simple email validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        } else {
            // Hash the password for security
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $hashedPassword);

            if ($stmt->execute()) {
                echo "User registered successfully";
                // Optionally redirect or further processing can go here
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    } else {
        echo "Email not set in session.";
    }
}

$conn->close();
?>
