<?php

echo "test";	

require_once BASE_PATH . "db_connect.php";

function humanTiming ($time) //HUMAN TIME //HUMAN TIME     (blatantly stolen from arnorhns SOF)
	{

		$time = time() - $time; // to get the time since that moment
		$time = ($time<1)? 1 : $time;
		$tokens = array (
			31536000 => 'year',
			2592000 => 'month',
			604800 => 'week',
			86400 => 'day',
			3600 => 'hour',
			60 => 'minute',
			1 => 'second'
		);

		foreach ($tokens as $unit => $text) {
			if ($time < $unit) continue;
			$numberOfUnits = floor($time / $unit);
			return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
		}

	}


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

			$iconsOutput .= "<i class='fa-solid fa-person-swimming' data-bs-toggle='tooltip' data-bs-placement='top' title='Swimming Beach'></i> ";

		} elseif ($iconsArray[$i] == "fishing") {

			$iconsOutput .= "<i class='fa-solid fa-fish' data-bs-toggle='tooltip' data-bs-placement='top' title='Fishing Beach'></i> ";

		} elseif ($iconsArray[$i] == "caravan") {

			$iconsOutput .= "<i class='fa-solid fa-caravan' data-bs-toggle='tooltip' data-bs-placement='top' title='Campground'></i> ";

		} elseif ($iconsArray[$i] == "toilets") {

			$iconsOutput .= "<i class='fa-solid fa-restroom' data-bs-toggle='tooltip' data-bs-placement='top' title='Toilets'></i> ";

		} elseif ($iconsArray[$i] == "lookout") {

			$iconsOutput .= "<i class='fa-solid fa-binoculars' data-bs-toggle='tooltip' data-bs-placement='top' title='Lookout / Photographic'></i> ";

		} elseif ($iconsArray[$i] == "warning") {

			$iconsOutput .= "<i class='fa-solid fa-triangle-exclamation' data-bs-toggle='tooltip' data-bs-placement='top' title='Dangerous Beach'></i> ";

		} elseif ($iconsArray[$i] == "vehicle") {

			$iconsOutput .= "<i class='fa-solid fa-truck-monster' data-bs-toggle='tooltip' data-bs-placement='top' title='Vehicle Access'></i> ";

		} elseif ($iconsArray[$i] == "surf") {

			$iconsOutput .= "<i class='fa-solid fa-water' data-bs-toggle='tooltip' data-bs-placement='top' title='Surf'></i> ";
		}		
	}

	//HUMAN TIME 
	$time = strtotime($row["last_update"]);


	
	echo "

	<div id='" . $row["name"]. "' class='offcanvas offcanvas-bottom h-auto ' tabindex='-1' aria-labelledby='offcanvasBottomLabel'>
            <div class='offcanvas-header'>
                <h5 class='offcanvas-title' >
                    <h2 class='text-center'>
						" . $iconsOutput . "
                    </h2>
                </h5>
                <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas' aria-label='Close'></button>
            </div>
            <div class='offcanvas-body small container'>
                <div class='row'>
                    <div class='col-md-4'>
					<picture>
						<source srcset='./img/big/" . $row["name"]. ".webp'>
                        <img src='./img/big/" . $row["title_image"]. "' class='img-fluid' alt='Image of " . $row["spelt_name"]. " Beach'>
					</picture>
                    </div>
                    <div class='col-md-8'>
                        <h3>" . $row["spelt_name"]. "</h3>
                        <p class='card-text'>
							" . $row["write_up"]. "
						</p>
						
                        <p> <span class='fw-bold'>Access Via</span>
							" . $row["access"]. "
                        </p>
						<p class='card-text'><small class='text-muted'>Last updated " . humanTiming($time) . " ago</small></p>
						<a href='./" . $row["name"]. "' class='defaultbutton btn btn-sm position-relative border-2 rounded-0'>
							<p class='text-rich d-inline pt-2 px-4'>See more about " . $row["spelt_name"]. ".</p>
						</a>
                    </div>
                </div>


            </div>
        </div>


  ";

}
} else {
  echo "0 results";
}
	
	mysqli_close($connectToServer);
}



?>