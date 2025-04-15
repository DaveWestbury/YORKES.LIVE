
<title>YORKES.LIVE</title>
<meta charset='UTF-8'>
<meta name='description' content='Come learn more about these beaches and what they have to offer.'>
<meta name='keywords' content='yorkes yorke peninsula beaches map best surf'>
<meta name='author' content='Written by D.W. Hills, Length: 1 pages'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>

<meta property='og:url' content='https://yorkes.live' />
<meta property='og:type' content='website' />
<meta property='og:title' content='Yorkes.Live' />
<meta property='og:description' content='An interactive map of the Yorke Peninsula&apos;s best beaches. As voted on by you.' />
<meta property='og:image' content='https://yorkes.live/fb.png' />

<link type='text/css' href='./styles.css' rel='stylesheet' />

<link rel='apple-touch-icon' sizes='180x180' href='./apple-touch-icon.png'>
<link rel='icon' type='image/png' sizes='32x32' href='./favicon-32x32.png'>
<link rel='icon' type='image/png' sizes='16x16' href='./favicon-16x16.png'>
<link rel='manifest' href='/site.webmanifest'>

<!-- MODEL VIEWER -->
<script type='module' src='https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js'></script>

<!-- BOOTSTRAP CSSs -->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC'
    crossorigin='anonymous'>

<!-- FONTAWESOME -->
<link href='./fontawesome/css/fontawesome.css' rel='stylesheet'>
<link href='./fontawesome/css/brands.css' rel='stylesheet'>
<link href='./fontawesome/css/solid.css' rel='stylesheet'>

<!-- JQUERY -->
<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>


<!-- BOOTSTRAP JS -->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM'
    crossorigin='anonymous'>
</script>

</head>

<body class='d-flex flex-column min-vh-100' data-bs-spy='scroll' data-bs-target='#navbarID'>
    <nav id='nav-color' class='navbar fixed-top navbar-expand-sm navbar-dark border-bottom border-3'>

        <a class='navbar-brand text-light' href='./index.php'>
            <h4 id='nav-height' class='d-flex align-content-center flex-wrap'><span id='brandbox' class='align-middle pt-2 ps-4'>YORKES<span class='text-orange'>.</span>LIVE</span></h4>
        </a>
        <button class='navbar-toggler text-light' type='button' data-bs-toggle='collapse' data-bs-target='#navbarID' aria-controls='navbarID' aria-expanded='false'
            aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon '></span>
        </button>
        <div id='navbarID' class='collapse navbar-collapse'>
            <div class='navbar-nav' role=''>
                <a class='nav-link nav-item nav-text-light ps-2' aria-current='page' href='./index.php'><span class='align-middle'>Map</span></a>
                <a class='nav-link nav-item nav-text-light ps-2' aria-current='page' href='./index.php#mainlike'><span class='align-middle'>Beaches</span></a>
                <a class='nav-link nav-item nav-text-light ps-2' aria-current='page' href='./index.php#info'><span class='align-middle'>Info</span></a>
                <a class='nav-link nav-item  nav-text-light ps-2' aria-current='page' href='.index.php#contact'><span class='align-middle'>Contact</span></a>
            </div>
            <ul class='navbar-nav  ms-auto'>
                <li class='nav-item d-flex'>
                    <a class='nav-link text-light ' aria-current='page' href='#beaches'>
                        <h4><span id='coins' class='align-middle text-blue p-2 '><?php include 'db_getCoins.php'?></span></h4>
</a>
<img id='' class='me-4' src='img/shakawhite.png' width='45px' height='45px' alt='Shaka Icon'>
</li>
</ul>

</div>
</nav>
<div id='navbumper' class='bg-rich' style='height: 120px'></div>
<h3 class='p-4'>ERROR:</h3>
<p class='ps-4'>There is something wrong with the URL or the database. <a href='./index.php'>Try this link.</a></p>