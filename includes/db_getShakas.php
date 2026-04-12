<?php
require_once __DIR__ . '/db_connect.php';

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


if($connectToServer) {

    $result = mysqli_query($connectToServer, 'SELECT SUM(shakas) AS total FROM mainpage');
    $row = mysqli_fetch_assoc($result);
    $sum = $row['total'];

    echo $sum;


} else {
  echo "0";
}