<?php

require_once __DIR__ . '/../includes/db_connect.php';

if($connectToServer)
{
    $ip = $_SERVER['REMOTE_ADDR'];

    $shakas = intval("1");
    $coins = intval("6");

    $sql = "SELECT 1 FROM mainpage WHERE ip = '$ip'";
    $result = mysqli_query($connectToServer, $sql);

    if (mysqli_num_rows($result)){
        echo "found";
    }else{
        $stmt = $connectToServer->prepare("INSERT INTO `mainpage` (`id`, `timestamp`, `ip`, `shakas`, `coins`) VALUES (NULL, CURRENT_TIMESTAMP, '$ip', '$shakas','$coins')");
        $stmt->execute();

        echo "not-found";

    }


mysqli_close($connectToServer);


}


?>