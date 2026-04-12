<?php

require_once __DIR__ . '/../includes/db_connect.php';

$beachname = filter_var($_POST['name'], FILTER_UNSAFE_RAW);


$ip = $_SERVER['REMOTE_ADDR'];
$deducted = false;

if($connectToServer)
{


    $sql = "SELECT 1 FROM mainpage WHERE ip = '$ip' AND coins > 0";
    $result = mysqli_query($connectToServer, $sql);

    if (mysqli_num_rows($result)){

        $stmt = $connectToServer->prepare("UPDATE mainpage SET coins = coins - 1 WHERE ip = '$ip' AND coins > 0 ");
        $stmt->execute();

        echo "deducted";
        $deducted = true;

     }else{


         echo "";

     }


    if ($deducted == true){

        $sql_update = "UPDATE beaches SET shakas = shakas + 1 WHERE name = '$beachname'";


    }


    if(!mysqli_query($connectToServer,$sql_update))
    {

        die('Error:' . mysqli_error($connectToServer));

    }


mysqli_close($connectToServer);

}
?>