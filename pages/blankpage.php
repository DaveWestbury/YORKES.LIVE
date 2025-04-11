<!doctype html>
<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-659MYBSRDE"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-659MYBSRDE');
    </script>



    <!-- START OF PHP  -->



    <title>YORKES.LIVE - Blank</title>
    <meta charset='UTF-8'>
    <meta name='description' content='This is'>
    <meta name='keywords' content='yorkes'>
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

<body data-bs-spy='scroll' data-bs-target='#navbarID'>
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
    <div id='navbumper' class='bg-rich p-0 m-o' style='height: 120px'></div>
    <div class="text-light bg-rich pb-4 pt-4">
        <h2 class="text-center">This is a Blank page where anything can be entered.</h2>
    </div>



    <div id='bg-waves'></div>

    <div class="container" style="height: 1000px;">
        <div class="row">
            <div class="col-12 ">
                <h2>This is a Blank page where anything can be entered.</h2>
                <h3>Header three</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit exercitationem dolorum culpa ipsum porro perspiciatis ut ipsam repellat qui quisquam dolor, voluptatibus
                    eligendi voluptatem, aliquam maiores, accusantium enim delectus. Odio.</p>



            </div>
        </div>
    </div>

    <?php include './footer.php'?>

    <script>
    //LOGO BOUNCE
    var atPageTop = true;
    var scroll = 0;
    let throttleTimer;

    const throttle = (callback, time) => {
        if (throttleTimer) return;
        throttleTimer = true;
        setTimeout(() => {
            callback();
            throttleTimer = false;
        }, time);

    }

    const logobounce = () => {

        //console.log("fired");
        scroll = parseInt($(window).scrollTop()); //current scroll position

        if (scroll > 0 && (atPageTop == true)) {
            // $("#nav-height").animate({
            //     'height': '50px'
            // }, 100)
            $("#nav-color").animate({
                'min-height': '80px'
            }, 100)
            $("#nav-color").animate({
                'background-color': 'rgb(3, 25, 38, 1)'
            }, 100)
            $("#brandbox").delay(100).effect("bounce", {
                times: 3
            })
            atPageTop = false;

        } else if (scroll == 0) {
            // $("#nav-height").animate({
            //     'height': '120px'
            // }, 100)
            $("#nav-color").animate({
                'min-height': '120px'
            }, 100, )
            $("#nav-color").animate({
                'background-color': 'rgb(3, 25, 38, .7)'
            }, 100)
            $("#brandbox").delay(100).effect("bounce", {
                times: 3
            })
            atPageTop = true;
        }
    }
    window.addEventListener("scroll", () => {
        throttle(logobounce, 250);
    });
    </script>

    <script>
    // // init Masonry
    // var $grid = $('.grid').masonry({
    //     itemSelector: '.grid-item',
    //     percentPosition: true,
    //     columnWidth: '.grid-sizer'
    // });
    // // layout Masonry after each image loads
    // $grid.imagesLoaded().progress(function() {
    //     $grid.masonry();
    // });
    </script>


    <!-- JQUERY UI -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.1/jquery-ui.min.js"></script>

    <!-- masonry for pinterest columns -->
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
        crossorigin="anonymous" async></script>

    <script>
    var $grid = $('#gallery').imagesLoaded(function() {
        $grid.masonry({
            itemSelector: '.grid-item'
        });
    });
    </script>


    <script>
    //intialise tooltips (must be after min.js)
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>

</body>

</html>