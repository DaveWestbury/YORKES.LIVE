<?php
 require "db_connect.php";


 function staticHumanTiming ($time) //HUMAN TIME //HUMAN TIME     (blatantly stolen from arnorhns SOF)
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

	$sql = "SELECT * FROM beaches ORDER BY shakas DESC limit 8";

	$result = mysqli_query($connectToServer, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {


	//handles icons
	$iconsArray = explode(",", $row["icons"]);
	$iconsOutput = ""; 
	
	for ($i = 0; $i < count($iconsArray); $i++) {
		
		if ($iconsArray[$i] == "swimming") {

			$iconsOutput .= "<i class='fa-solid fa-person-swimming' data-bs-toggle='tooltip' data-bs-placement='top' title='Swimming Beach' role='img' aria-label='Swimming Beach'></i> ";

		} elseif ($iconsArray[$i] == "fishing") {

			$iconsOutput .= "<i class='fa-solid fa-fish' data-bs-toggle='tooltip' data-bs-placement='top' title='Fishing Beach' role='img' aria-label='Fishing Beach'></i> ";

		} elseif ($iconsArray[$i] == "caravan") {

			$iconsOutput .= "<i class='fa-solid fa-caravan' data-bs-toggle='tooltip' data-bs-placement='top' title='Campground' role='img' aria-label='Campground'></i> ";

		} elseif ($iconsArray[$i] == "toilets") {

			$iconsOutput .= "<i class='fa-solid fa-restroom' data-bs-toggle='tooltip' data-bs-placement='top' title='Toilets' role='img' aria-label='Toilets'></i> ";

		} elseif ($iconsArray[$i] == "lookout") {

			$iconsOutput .= "<i class='fa-solid fa-binoculars' data-bs-toggle='tooltip' data-bs-placement='top' title='Lookout / Photographic' role='img' aria-label='Lookout / Photographic'></i> ";

		} elseif ($iconsArray[$i] == "warning") {

			$iconsOutput .= "<i class='fa-solid fa-triangle-exclamation' data-bs-toggle='tooltip' data-bs-placement='top' title='Dangerous Beach' role='img' aria-label='Dangerous Beach'></i> ";

		} elseif ($iconsArray[$i] == "vehicle") {

			$iconsOutput .= "<i class='fa-solid fa-truck-monster' data-bs-toggle='tooltip' data-bs-placement='top' title='Vehicle Access'  role='img' aria-label='Vehicle Access'></i> ";

		} elseif ($iconsArray[$i] == "surf") {

			$iconsOutput .= "<i class='fa-solid fa-water' data-bs-toggle='tooltip' data-bs-placement='top' title='Surf' role='img' aria-label='Surf'></i> ";
		}		
	}

	//HUMAN TIME
	$time = strtotime($row["last_update"]);

	// Data is already sanitized in database, no need to double-encode
	$safeName = $row["name"];
	$safeTitleImage = $row["title_image"];
	$safeSpeltName = $row["spelt_name"];
	$safeWriteUp = $row["write_up"];
	$safeAccess = $row["access"];
	$safeShakas = $row["shakas"];

	echo "

	<div class='col-lg-6'>
	  <div class='card mb-4 border-3 border-rich' >
		  <div class='row g-0'>
			  <div class='col-md-4'>
				  <button class='m-0 p-0 btn border-0' data-bs-toggle='modal' data-bs-target='#" . $safeName. "Modal'>
					  <div class='hoverexpand'>
					  	<picture>
						  <source srcset='./img/big/" . $safeName. ".webp'>
						  <img src='./img/big/" . $safeTitleImage. "' class='img-fluid ' max-width='100%' height='auto' alt='Image of " . $safeSpeltName. "'>
					  	</picture>
						  </div>

				  </button>
				  <div class='modal fade' id='" . $safeName. "Modal' tabindex='-1' aria-labelledby='" . $safeName. "ModalLabel' aria-hidden='true'>
					  <div class='modal-dialog modal-lg'>
						  <div class='modal-content'>
							  <div class='modal-header'>
								  <h5 class='modal-title' id='" . $safeName. "ModalLabel'>" . $safeSpeltName. "</h5>
								  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
							  </div>
							  <div class='modal-body'>
							  	<picture>
							  		<source srcset='./img/big/" . $safeName. ".webp'>
								  	<img src='./img/big/" . $safeTitleImage. "' class='img-fluid' max-width='100%' height='auto' alt='Image of " . $safeSpeltName. " '>
								</picture>
							</div>

						  </div>
					  </div>
				  </div>
				  <p class='text-center py-2 h5'>
				  		" . $iconsOutput . "
				  </p>
			  </div>
			  <div class='col-md-8'>
				  <div class='card-body'>
				  	<div class='d-flex mb-1'>
					  <h3 class='card-title me-auto align-middle text-uppercase pt-2'>" . $safeSpeltName. "</h3>

					  <button id='shakabutton-" . $safeName. "' onclick='addShaka(\"" . $safeName. "\")' class='shakabutton btn border-orange border-2 position-relative mb-1 me-2' type='button'>
						<img id='shakaimg-" . $safeName. "' class='p-0' height='30px' width='30px' src='img/shaka.svg' alt='Shaka Icon'>
						<span id='shakacount-" . $safeName. "' class='position-absolute top-0 start-100 translate-middle badge rounded-pill text-white bg-reallyorange '>
						" . $safeShakas . "
						</span>
					  </button>

					</div>
					  <p class='card-text'>" . $safeWriteUp. " </p>
					  <p> <span class='fw-bold'>Access Via</span>
						  <br>" . $safeAccess. "
					  </p>
					  <p class='card-text'><small class='text-muted'>Last updated " . staticHumanTiming($time) . " ago</small></p>
					  <a href='./" . $safeName. "' class='defaultbutton btn btn-sm position-relative border-2 rounded-0'>
							<p class='text-rich d-inline pt-2 px-4'>See more about " . $safeSpeltName. ".</p>
						</a>
				  </div>
			  </div>
		  </div>
	  </div>
  </div>

  ";

}
} else {
	echo "There should be a big list of beaches here.. but there isn't.. Would you mind telling Dave at Westburydigital.com.au? Cheers.";
}
	
	mysqli_close($connectToServer);
}



?>