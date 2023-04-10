<?php

if(isset($_POST['btnlog'])){
    require "../../config/conn/config.php";

    // retrieve form data
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];

    // construct and execute SQL query to validate user login
    $loginQuery = "SELECT * FROM users WHERE \"userEmail\" = '$userEmail' AND \"userPassword\" = '$userPass'";
    $loginResult = pg_query($conn, $loginQuery);

    if (pg_num_rows($loginResult) == 1) {
        // login successful, redirect to dashboard or homepage
        $message = "Login successful";
        $redirectUrl = "../dashboard.php"; 
    } else {
        // login failed, display error message and redirect to login page
        $message = "Error: Invalid email or password";
        $redirectUrl = "../login.php";
    }

    // close database connection
    pg_close($conn);

    // display alert message and redirect to dashboard or login page
    echo "<script>alert('$message');window.location.href='$redirectUrl';</script>";

}

if(isset($_POST['btnReg'])){
    // establish database connection
    require "../../config/conn/config.php";

    // retrieve form data
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];
    $userName = $_POST['userName'];

    // check if email already exists
    $checkQuery = "SELECT * FROM users WHERE \"userEmail\" = '$userEmail'";
    $checkResult = pg_query($conn, $checkQuery);

    if (pg_num_rows($checkResult) > 0) {
        // email already exists, display error message and redirect to registration page
        $message = "Error: Email already exists";
        $redirectUrl = "../login.php";
    } else {
        // email doesn't exist, insert new record
        $insertQuery = "INSERT INTO users (\"userEmail\", \"userPassword\", \"userName\") VALUES ('$userEmail', '$userPass', '$userName')";
        $insertResult = pg_query($conn, $insertQuery);

        // check if query was successful
        if ($insertResult) {
            $message = "Registered successfully";
            $redirectUrl = "../login.php";
        } else {
            $message = "Error: " . pg_last_error($conn);
            $redirectUrl = "../register.php";
        }
    }

    // close database connection
    pg_close($conn);

    // display alert message and redirect to login or registration page
    echo "<script>alert('$message');window.location.href='$redirectUrl';</script>";

}


?>