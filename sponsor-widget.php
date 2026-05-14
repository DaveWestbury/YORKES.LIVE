<?php

// When included server-side, output a placeholder + JS fetch so it loads async.
// When requested directly via /sponsor-widget.php, return just the HTML fragment.
$isAjax = realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__;

if (!$isAjax) {
    echo "
<div id='sponsor-widget'></div>
<script>
fetch('/sponsor-widget.php')
  .then(function(r){ return r.ok ? r.text() : ''; })
  .then(function(html){ if(html) document.getElementById('sponsor-widget').innerHTML = html; })
  .catch(function(){});
</script>
";
    return;
}

header('Content-Type: text/html; charset=utf-8');

$ch = curl_init("https://westburydigital.com.au/api/rand?site=yorkes.live");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_TIMEOUT         => 8,
    CURLOPT_CONNECTTIMEOUT  => 5,
    CURLOPT_FOLLOWLOCATION  => true,
    CURLOPT_HTTPHEADER      => ['Referer: https://yorkes.live/'],
]);
$apiResponse = curl_exec($ch);
curl_close($ch);

$sponsorData = $apiResponse ? json_decode($apiResponse, true) : null;

if (!$sponsorData || $sponsorData['status'] !== 'success') {
    exit;
}

$sponsorSpeltName = htmlspecialchars($sponsorData['data']['sponsorSpeltName'], ENT_COMPAT, 'UTF-8', false);
$sponsorWriteUp   = htmlspecialchars($sponsorData['data']['sponsorWriteUp'],   ENT_COMPAT, 'UTF-8', false);
$sponsorURL       = htmlspecialchars($sponsorData['data']['sponsorURL'],       ENT_QUOTES, 'UTF-8', false);
$sponsorimg       = htmlspecialchars($sponsorData['data']['sponsorImg'],       ENT_COMPAT, 'UTF-8', false);

echo "
<div class='position-relative'>
<small>Local Sponsor</small>
<a href='https://westburydigital.com.au/api/click/index.php?url={$sponsorURL}&referer=yorkes.live' id='sponsorLink' class='stretched-link'></a>
<div class='d-flex justify-content-center'>
    <img class='img-fluid pb-3' width='60%' src='https://westburydigital.com.au/api/sponsors/{$sponsorimg}.webp' alt='advertising logo for {$sponsorSpeltName}'>
</div>
<h3 class='text-center text-uppercase text-reset'>{$sponsorSpeltName}<span class='text-orange'>.</span></h3>
<p class='text-reset'>{$sponsorWriteUp}</p>
<a href='https://westburydigital.com.au/ads.php' class='d-block text-center position-relative' style='font-size:.75em;z-index:2;'>Advertise here</a>
</div>
";