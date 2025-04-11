<?php
 require_once "db_connect.php";

 if (mysqli_connect_errno())
 {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 exit();	
 }

 $ip = $_SERVER['REMOTE_ADDR']; 


 if($connectToServer) {


	$sql = "SELECT coins FROM mainpage WHERE ip = '$ip' LIMIT 1";

	$result = mysqli_query($connectToServer, $sql);
	
	$row = mysqli_fetch_assoc($result);

	echo $row["coins"]; 
	
} else {
  echo "db_error - getCoins";
}
	

?>