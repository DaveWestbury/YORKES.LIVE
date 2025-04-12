<?php
require "./db_connect.php";

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$ip = $_SERVER['REMOTE_ADDR'];

if ($connectToServer) {
    $sql = "SELECT coins FROM mainpage WHERE ip = '$ip' LIMIT 1";
    $result = mysqli_query($connectToServer, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $shakaCoins = $row["coins"];
            // You can echo it if needed
            // echo $shakaCoins;
        } else {
            echo "No record found for IP: $ip";
        }
    } else {
        echo "Query failed: " . mysqli_error($connectToServer);
    }
} else {
    echo "db_error - getCoins";
}
?>
