<?php
include('auth.php');
session_start();

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($users[$username]) && password_verify($password, $users[$username])) {
            $_SESSION['authenticated'] = true;
        } else {
            // Invalid login attempt, handle accordingly
            header('Location: login.html'); // Redirect to login page
            exit();
        }
    } else {
        // User is not logged in, redirect to login page
        header('Location: login.html');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>flows.li</title>
</head>
<body>
    <h1>503: in maintenance</h1>
    <p>next slot for changes: 22 / 1 / 24 from 1:00am to 2:00am</p>
</body>
</html>