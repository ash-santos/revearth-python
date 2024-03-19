<?php
// Include the database connection file
include 'db_connection.php';

// Function to securely hash passwords
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $fullname = $_POST["fullname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $phoneNumber = $_POST["PhoneNumber"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Check if passwords match
    if ($password != $confirmPassword) {
        die("Passwords do not match");
    }

    // Hash the password
    $hashedPassword = hashPassword($password);

    // Check if email already exists
    $emailCheck = "SELECT * FROM users WHERE email='$email'";
    $resultEmail = $conn->query($emailCheck);
    if ($resultEmail->num_rows > 0) {
        die("Email already exists");
    }

    // Check if username already exists
    $usernameCheck = "SELECT * FROM users WHERE username='$username'";
    $resultUsername = $conn->query($usernameCheck);
    if ($resultUsername->num_rows > 0) {
        die("Username already exists");
    }

    // SQL query to insert user data into the database
    $sql = "INSERT INTO users (fullname, lastname, username, phoneNumber, email, password)
            VALUES ('$fullname', '$lastname', '$username', '$phoneNumber', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
