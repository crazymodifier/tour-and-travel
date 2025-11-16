<?php
    if (isset($_POST['action']) && $_POST['action'] === 'register') {
        // Include database connection
        require_once '../config.php';

        // Get form data
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // Basic validation
        if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
            die('All fields are required.');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die('Invalid email format.');
        }

        // print_r($_POST);die;

        // Check if email already exists
        $stmt = $conn->prepare("SELECT user_id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            die('Email is already registered.');
        }
        $stmt->close();

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert new user into database
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, role, is_active) VALUES (?, ?, ?, ?, ?, ?)");
        $role = 0; // Assuming default role is 1
        $is_active = 1; // Assuming default is_active value is 1
        $stmt->bind_param("ssssii", $first_name, $last_name, $email, $hashed_password, $role, $is_active);

        if ($stmt->execute()) {
            // Registration successful
            header('Location: /tour-and-travel?registration=success');
            exit();
        } else {
            die('Error registering user: ' . $stmt->error);
        }

        $stmt->close();
        $conn->close();
    } else {
        die('Invalid request.');
    }