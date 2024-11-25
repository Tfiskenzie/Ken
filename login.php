<?php
session_start();
include 'db_connection.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate inputs
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Email and password are required.";
        header('Location: loginn.php');
        exit();
    }

    // Query the database
    $stmt = $conn->prepare("SELECT id, password_hash FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password_hash'])) {
            // Login success
            $_SESSION['user_id'] = $user['id'];
            header('Location: dashboard.php'); // Redirect to dashboard
            exit();
        } else {
            $_SESSION['error'] = "Incorrect email/password.";
        }
    } else {
        $_SESSION['error'] = "Incorrect email/password.";
    }

    header('Location: loginn.php'); // Redirect back to login page
    exit();
}
?>
