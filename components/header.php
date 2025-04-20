<?php 

require_once __DIR__ . '/../config.php'; 

include_once './includes/db_fetchSingleBeach.php';

if (isset($safeSpeltName)) {
    $pageNameOutput = $safeSpeltName;
    $descriptionOutput = "This is $safeSpeltName on the sunny Yorke Peninsula. Come learn more about the beach and what it has to offer. Don't forget to vote for $safeSpeltName";

} elseif ($page == "Index") {

    $pageNameOutput = "Yorke Peninsula's Best Beach List";
    $descriptionOutput = "An interactive map of the Yorke Peninsula's best beaches. As voted on by you. Come explore each beach on the Yorke Peninsula with locations, pictures, access and attractions.";

} else {
    $pageNameOutput = $page;
    $descriptionOutput =  "This is a page about $page. Come learn more about the Yorke Peninsula.";
}

?>


<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-659MYBSRDE'></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-659MYBSRDE');
    </script>

    <title>YORKES.LIVE | <?= $pageNameOutput ?></title>
    <meta charset='UTF-8'>
    <meta name='description' content='<?= $descriptionOutput ?>'>
    <meta name='keywords' content='yorkes <?= $pageNameOutput ?> yorke peninsula beaches map best surf'>
    <meta name='author' content='Written by D.W. Hills, Length: 1 pages'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta property='og:url' content='https://yorkes.live' />
    <meta property='og:type' content='website' />
    <meta property='og:title' content='Yorkes.Live' />
    <meta property='og:description' content='An interactive map of the Yorke Peninsula&apos;s best beaches. As voted on by you.' />
    <meta property='og:image' content='https://yorkes.live/fb.png' />

    <link rel="stylesheet" href="<?= BASE_URL ?>styles.css?v=1.1">

    <link rel='apple-touch-icon' sizes='180x180' href='./apple-touch-icon.png'>
    <link rel='icon' type='image/png' sizes='32x32' href='./favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='./favicon-16x16.png'>
    <link rel='manifest' href='/site.webmanifest'>

    <!-- BOOTSTRAP CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' 
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>

    <!-- FONTAWESOME -->
    <link href='./fontawesome/css/fontawesome.css' rel='stylesheet'>
    <link href='./fontawesome/css/brands.css' rel='stylesheet'>
    <link href='./fontawesome/css/solid.css' rel='stylesheet'>

    <?php 
    if ($page == "Index"){
    echo "<script type='module' src='https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js'></script>";
    }
    ?>

    <!-- JQUERY -->
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>

    <!-- BOOTSTRAP JS -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' 
        integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
</head>
