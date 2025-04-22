<?php

// Fetch sponsor data from the API
$apiUrl = "https://westburydigital.com.au/api/all";
$apiResponse = file_get_contents($apiUrl);
$sponsorData = json_decode($apiResponse, true);

$sponsorOutput = "";

if ($sponsorData['status'] == 'success') {
    foreach ($sponsorData['data'] as $sponsor) {
        $sponsorSpeltName = html_entity_decode($sponsor['sponsorSpeltName'], ENT_QUOTES, 'UTF-8');
        $sponsorWriteUp = html_entity_decode($sponsor['sponsorWriteUp'], ENT_QUOTES, 'UTF-8');
        $sponsorName = htmlspecialchars($sponsor['sponsorName'], ENT_QUOTES, 'UTF-8');
        $sponsorURL = htmlspecialchars($sponsor['sponsorURL'], ENT_QUOTES, 'UTF-8');
        $sponsorImg = htmlspecialchars($sponsor['sponsorImg'], ENT_QUOTES, 'UTF-8');


        $sponsorOutput .= "
        <div class='col-lg-4'>
            <div class='card mb-4 border-3 border-rich p-4'>                        
            <a href='https://westburydigital.com.au/api/click/index.php?url=" . $sponsorURL . "&referer=yorkes.live' class='stretched-link'></a>
            <div class='d-flex justify-content-center'>
                <img class='img-fluid pb-3' width='60%' src='../img/sponsors/" . $sponsorImg . ".webp' alt='advertising logo for " . $sponsorSpeltName . "'>
            </div>
            <h3 class='text-center text-uppercase text-reset'>" . $sponsorSpeltName . "<span class='text-orange'>.</span></h3>
            <p class='text-reset'>" . $sponsorWriteUp . "</p>
        </div>
        </div>
        ";
    }
} else {
    $sponsorOutput = "No sponsors found";
}

echo $sponsorOutput;

?>


<!-- ETHELS -->
<!-- <div class='col-lg-6'>
    <div class='card mb-4 border-3 border-rich'>                        
        <div class='row g-0'>
            <div class='col-12 ps-4'>
                <h3 class='card-title me-auto align-middle text-uppercase pt-2'>Ethel Wreck</h3>
                <p class='card-text'>The Ethel was a three-masted barque sailing ship, 177ft long, weighing 711 tons. Built in 1876 and originally named Camelo, it was
                    renamed Ethel in 1892. Travelling from South Africa to the port of Semaphore, the Ethel was caught at night in the gale force southwesterly winds of a
                    summer storm. First the ship lost her sails and then damaged her rudder on a reef—leaving the ship vulnerable in strong surf. A nearby ship, the SS
                    Ferret, saw the drama unfolding but was also struggling in the rough seas and could not assist directly—instead sending an urgent radio message to
                    Adelaide. The waves turned the Ethel broadside and kept pushing her hull against the shore, causing the captain and crew to fear she would begin to
                    break up. A nineteen year old sailor, Leonard Stenerson, volunteered to swim ashore and raise the alarm. A rope was tied to his waist, but he was lost
                    and his body was never found. The next morning, in calmer conditions, the crew walked ashore. An unsuccessful salvage attempt was made in 1904 with a
                    tugboat and lines. When the wind blew up and lines broke, the Ethel was blown back onto the beach, where its remains still lay today.

                    <br><br>A salvage attempt was made during May 1904 by A. H. Hassell of Marion Bay who had purchased the Ethel for £100 at auction. With lines attached
                    the tug
                    Euro successfully dragged the Ethel into deeper water. The lines parted when a south-westerly blew up and the Ethel was thrown back onto the beach
                    with a broken keel. The Ethel was then abandoned.
                </p>
                <p> <span class='fw-bold'>Location</span>
                    <br>- Ethels Wreck Beach.
                </p>
            </div>
        </div>
    </div>
</div>   -->