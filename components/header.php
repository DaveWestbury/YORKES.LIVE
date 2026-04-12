<?php

require_once __DIR__ . '/../config.php';
include_once './includes/db_fetchSingleBeach.php';

// Canonical URL — strip query string, always point to production domain
$canonicalPath = strtok($_SERVER['REQUEST_URI'], '?');
$canonicalUrl  = 'https://yorkes.live' . htmlspecialchars($canonicalPath, ENT_QUOTES, 'UTF-8');

if (isset($safeSpeltName)) {

    $pageNameOutput  = $safeSpeltName;
    $descriptionOutput = "Discover " . $safeSpeltName . " on Yorke Peninsula, South Australia. View photos, location, facilities and visitor information for this beautiful Yorke Peninsula beach.";
    $ogImage = "https://yorkes.live/img/big/" . htmlspecialchars($safeTitleImage, ENT_QUOTES, 'UTF-8');
    $ogType  = 'article';

} elseif ($page == "Index") {

    $pageNameOutput  = "Yorke Peninsula Beach Guide";
    $descriptionOutput = "An interactive 3D map of Yorke Peninsula's best beaches, as voted by you. Explore each beach with photos, locations, access information and local attractions.";
    $ogImage = "https://yorkes.live/fb.png";
    $ogType  = 'website';

} else {

    $pageDescriptions = [
        'Shipwrecks'     => 'Explore 10 historic shipwrecks around Yorke Peninsula, South Australia — including the Ethel, the Ferret and the SS Clan Ranald.',
        'Sponsors'       => 'Meet the local businesses supporting Yorkes Live, your interactive guide to the best beaches on Yorke Peninsula.',
        'In Media'       => 'See where Yorkes Live has been featured in the media, including Ezra Magazine and other publications.',
        'Privacy Policy' => 'Read the Yorkes Live privacy policy — how we handle your information on our Yorke Peninsula beach guide.',
    ];

    $pageNameOutput  = $page;
    $descriptionOutput = $pageDescriptions[$page] ?? "Explore $page on Yorkes Live — your interactive guide to the best beaches on Yorke Peninsula, South Australia.";
    $ogImage = "https://yorkes.live/fb.png";
    $ogType  = 'website';

}

// JSON-LD structured data
if ($page == "Index") {
    $jsonLd = json_encode([
        '@context'        => 'https://schema.org',
        '@type'           => 'WebSite',
        'name'            => 'Yorkes Live',
        'url'             => 'https://yorkes.live',
        'description'     => $descriptionOutput,
        'potentialAction' => [
            '@type'       => 'SearchAction',
            'target'      => [
                '@type'       => 'EntryPoint',
                'urlTemplate' => 'https://yorkes.live/{search_term_string}',
            ],
            'query-input' => 'required name=search_term_string',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
} elseif (isset($safeSpeltName)) {
    $jsonLd = json_encode([
        '@context'    => 'https://schema.org',
        '@type'       => 'TouristAttraction',
        'name'        => $safeSpeltName,
        'description' => $descriptionOutput,
        'image'       => 'https://yorkes.live/img/big/' . $safeTitleImage,
        'url'         => 'https://yorkes.live/' . $safeName,
        'address'     => [
            '@type'          => 'PostalAddress',
            'addressRegion'  => 'South Australia',
            'addressCountry' => 'AU',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
} else {
    $jsonLd = null;
}

?>

<head>
    <!-- Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-659MYBSRDE'></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-659MYBSRDE');
    </script>

    <title><?= htmlspecialchars($pageNameOutput, ENT_QUOTES, 'UTF-8') ?> | YORKES.LIVE</title>
    <meta charset='UTF-8'>
    <meta name='description' content='<?= htmlspecialchars($descriptionOutput, ENT_QUOTES, 'UTF-8') ?>'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='theme-color' content='#FF6B35'>
    <meta name='geo.region' content='AU-SA'>
    <meta name='geo.placename' content='Yorke Peninsula, South Australia'>

    <!-- Canonical -->
    <link rel='canonical' href='<?= $canonicalUrl ?>'>

    <!-- Open Graph -->
    <meta property='og:url'         content='<?= $canonicalUrl ?>'>
    <meta property='og:type'        content='<?= $ogType ?>'>
    <meta property='og:title'       content='<?= htmlspecialchars($pageNameOutput, ENT_QUOTES, 'UTF-8') ?>'>
    <meta property='og:description' content='<?= htmlspecialchars($descriptionOutput, ENT_QUOTES, 'UTF-8') ?>'>
    <meta property='og:image'       content='<?= $ogImage ?>'>
    <meta property='og:site_name'   content='Yorkes Live'>
    <meta property='og:locale'      content='en_AU'>

    <!-- Twitter Card -->
    <meta name='twitter:card'        content='summary_large_image'>
    <meta name='twitter:title'       content='<?= htmlspecialchars($pageNameOutput, ENT_QUOTES, 'UTF-8') ?>'>
    <meta name='twitter:description' content='<?= htmlspecialchars($descriptionOutput, ENT_QUOTES, 'UTF-8') ?>'>
    <meta name='twitter:image'       content='<?= $ogImage ?>'>

    <?php if ($jsonLd): ?>
    <!-- Structured Data -->
    <script type='application/ld+json'><?= $jsonLd ?></script>
    <?php endif; ?>

    <link rel='stylesheet' href='<?= BASE_URL ?>styles.css?v=1.1'>

    <link rel='apple-touch-icon' sizes='180x180' href='./apple-touch-icon.png'>
    <link rel='icon' type='image/png' sizes='32x32' href='./favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='./favicon-16x16.png'>
    <link rel='manifest' href='/site.webmanifest'>

    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>

    <!-- FontAwesome -->
    <link href='<?= BASE_URL ?>fontawesome/css/fontawesome.css' rel='stylesheet'>
    <link href='<?= BASE_URL ?>fontawesome/css/brands.css' rel='stylesheet'>
    <link href='<?= BASE_URL ?>fontawesome/css/solid.css' rel='stylesheet'>

    <?php if ($page == "Index"): ?>
    <script type='module' src='https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js'></script>
    <?php endif; ?>

    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>

    <!-- Bootstrap JS -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
</head>