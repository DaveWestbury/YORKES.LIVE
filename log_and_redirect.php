<?php
require "db_connect.php";

if ($connectToServer) {
    // Get the sponsor URL from the form submission
    $sponsorURL = mysqli_real_escape_string($connectToServer, $_POST['url']);

    // Get user data
    $userIP = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Log data into the 'analytics' table
    $logSql = "INSERT INTO `analytics` (`url`, `ip_address`, `user_agent`) VALUES ('$sponsorURL', '$userIP', '$userAgent')";
    $logResult = mysqli_query($connectToServer, $logSql);

    if (!$logResult) {
        // Handle error
        echo "Error logging analytics data: " . mysqli_error($connectToServer);
        exit();
    }

    // Set Referrer-Policy header to allow sending the referrer
    header("Referrer-Policy: strict-origin-when-cross-origin");

    // After logging, redirect the user
    header("Location: " . $sponsorURL);
    exit();
} else {
    // Error connecting to the server
    echo "Error connecting to the database.";
}

?>