<?php
require_once BASE_PATH . "db_connect.php";

if (!isset($connectToServer)) {
    echo "Connection variable not set.";
}

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
        } else {
            // If no row is returned, set shakaCoins to 0
            $shakaCoins = 0;
        }
    } else {
        echo "Query failed: " . mysqli_error($connectToServer) . "<br>";
        echo "SQL: " . $sql;
        echo $ip;
        echo $connectToServer;
    }
} else {
    echo "db_error - getCoins";
}
?>
