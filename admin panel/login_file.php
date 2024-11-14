<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = hash('sha256', $password);
    require('../dbconnection.php');
    // Database connection
    // $conn = new mysqli("localhost", "root", "", "kk_natural_food");

    // if ($conn->connect_error) {
    //     die("Failed to connect: " . $conn->connect_error);
    // } else {
        $stmt = $conn->prepare("SELECT * FROM admin_account WHERE user_id = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();

            // Compare hashed password
            if ($data['password'] === $password) {
                // User is authenticated
                $_SESSION['user_id'] = $email;
                header("Location: admin_home.php");
                exit();
            } else {
                // Invalid password
                header("Location: admin.php?message=" . urlencode("Invalid password or Invalid Account Type"));
                exit();
            }
        } else {
            // Invalid credentials
            header("Location: admin.php?message=" . urlencode("Invalid credential"));
            exit();
        }
    // }
 }

 ?>