<?php

require_once BASE_PATH . "db_connect.php";


 if (mysqli_connect_errno())
 {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();	
 }


 if($connectToServer)
 {

	$sql = "SELECT * FROM beaches";

	$result = mysqli_query($connectToServer, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {


	//handles icons
	$iconsArray = explode(",", $row["icons"]);
	$iconsOutput = ""; 
	
	for ($i = 0; $i <= count($iconsArray); $i++) {
		
		if ($iconsArray[$i] == "swimming") {

			$iconsOutput .= "<i class='fa-solid fa-person-swimming' data-bs-toggle='tooltip' data-bs-placement='top' title='Swimming Beach' aria-label='Swimming Beach'></i> ";

		} elseif ($iconsArray[$i] == "fishing") {

			$iconsOutput .= "<i class='fa-solid fa-fish' data-bs-toggle='tooltip' data-bs-placement='top' title='Fishing Beach' aria-label='Fishing Beach'></i> ";

		} elseif ($iconsArray[$i] == "caravan") {

			$iconsOutput .= "<i class='fa-solid fa-caravan' data-bs-toggle='tooltip' data-bs-placement='top' title='Campground' aria-label='Campground'></i> ";

		} elseif ($iconsArray[$i] == "toilets") {

			$iconsOutput .= "<i class='fa-solid fa-restroom' data-bs-toggle='tooltip' data-bs-placement='top' title='Toilets avaliable' aria-label='Toilets avaliable'></i> ";

		} elseif ($iconsArray[$i] == "lookout") {

			$iconsOutput .= "<i class='fa-solid fa-binoculars' data-bs-toggle='tooltip' data-bs-placement='top' title='Lookout / Photographic' aria-label='Lookout / Photographic'></i> ";

		} elseif ($iconsArray[$i] == "warning") {

			$iconsOutput .= "<i class='fa-solid fa-triangle-exclamation' data-bs-toggle='tooltip' data-bs-placement='top' title='Dangerous Beach' aria-label='Dangerous Beach'></i> ";

		} elseif ($iconsArray[$i] == "vehicle") {

			$iconsOutput .= "<i class='fa-solid fa-truck-monster' data-bs-toggle='tooltip' data-bs-placement='top' title='Vehicle Access' aria-label='Vehicle Access'></i> ";

		} elseif ($iconsArray[$i] == "surf") {

			$iconsOutput .= "<i class='fa-solid fa-water' data-bs-toggle='tooltip' data-bs-placement='top' title='Surf' aria-label='Surf'></i> ";
		}		
	}

	//HUMAN TIME 
	$time = strtotime($row["last_update"]);
	
	echo "	

		<button class='Hotspot beach' " . $row["button_data"]. " aria-label='" . $row["spelt_name"]. "' tabindex='0'>

                <div class='HotspotAnnotation hiddenhotspot'>
					" . $iconsOutput . "<br>
                    " . $row["spelt_name"] . " <br>
					<div>
                    <div class='btn link-secondary fake-anchor' data-bs-toggle='offcanvas' data-bs-target='#" . $row["name"]. "' aria-controls='more info " . $row["spelt_name"]. "'>
                        <h5 class=''> More Info <span class='badge  link-light bg-secondary'><i class='fa-solid fa-arrow-down '></i></span></h5>
                    </div>
					
                </div>
            </button>


  ";

}
} else {
  echo "0 results";
}
	
	//mysqli_close($connectToServer);
}



?>