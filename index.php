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

    <title>YORKES.LIVE | Yorke Peninsula's Best Beach List</title>
    <meta charset="UTF-8">
    <meta name="description"
        content="An interactive map of the Yorke Peninsula's best beaches. As voted on by you. Come explore each beach on the Yorke Peninsula with locations, pictures, access and attractions.">
    <meta name="keywords" content="yorkes yorke peninsula beaches map best surf">
    <meta name="author" content="Written by D.W. Hills, Length: 1 pages">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="https://yorkes.live" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Yorkes.Live" />
    <meta property="og:description" content="An interactive map of the Yorke Peninsula's best beaches. As voted on by you." />
    <meta property="og:image" content="https://yorkes.live/fb.png" />

    <link type="text/css" href="./styles.css" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- MODEL VIEWER -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>

    <!-- BOOTSTRAP CSSs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <!-- FONTAWESOME -->
    <link href="./fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="./fontawesome/css/brands.css" rel="stylesheet">
    <link href="./fontawesome/css/solid.css" rel="stylesheet">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbarID">
    <div id="landing" class="">
        <nav id="nav-color" class="navbar fixed-top navbar-expand-sm navbar-dark border-bottom border-3">

            <a class="navbar-brand text-light" href="#">
                <h4 id="nav-height" class="d-flex align-content-center flex-wrap"><span id="brandbox" class="align-middle pt-2 ps-4">YORKES<span class="text-orange">.</span>LIVE</span></h4>
            </a>
            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarID" aria-controls="navbarID" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div id="navbarID" class="collapse navbar-collapse">
                <div class="navbar-nav" role="">
                    <a class="nav-link nav-item nav-text-light ps-2" aria-current="page" href="#landing"><span class="align-middle">Map</span></a>
                    <a class="nav-link nav-item nav-text-light ps-2" aria-current="page" href="#mainlike"><span class="align-middle">Beaches</span></a>
                    <a class="nav-link nav-item nav-text-light ps-2" aria-current="page" href="#info"><span class="align-middle">Info</span></a>
                    <a class="nav-link nav-item  nav-text-light ps-2" aria-current="page" href="#contact"><span class="align-middle">Contact</span></a>
                </div>
                <ul class="navbar-nav  ms-auto">
                    <li class="nav-item d-flex">
                        <a class="nav-link text-light " aria-current="page" href="#beaches">
                            <h4><span id="coins" class="align-middle text-blue p-2 "><?php include "db_getCoins.php"?></span></h4>
                        </a>
                        <img id="" class="me-4" src="img/shakawhite.png" width="45px" height="45px" alt="Shaka Icon">
                    </li>
                </ul>

            </div>
        </nav>

        <model-viewer id="hotspot-camera-view-demo" bounds="tight" src="export-1.11.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls autoplay poster="poster.webp"
            shadow-intensity="1" camera-orbit="180deg 50deg 15m" field-of-view="45deg" min-field-of-view="9deg" max-field-of-view="9deg" interpolation-decay="100"
            min-camera-orbit="auto auto 15%" max-camera-orbit="auto 75deg auto" orbit-sensitivity=".5" background-color="#455A64">
            <div class="container">
                <div id="annotation" class="text-center bg-white col-xxl-3 col-xl-4 col-lg-5 col-md-6 col-sm-11 col-11">
                    <button class="btn btn-sm bg-orange text-white orange-button" data-orbit="180deg 50deg 15m" data-target="auto"><i class="fa-solid fa-expand"></i> RESET VIEW</button>
                    <a class="btn btn-sm bg-orange text-white orange-button" data-bs-toggle="collapse" href="#collapseControls" role="button" aria-expanded="false"
                        aria-controls="collapseExample">MORE <i class="fa-solid fa-list-ul"></i></a>
                    <a class="btn btn-sm bg-orange text-white orange-button" href="#mainlike">SCROLL <i class="fa-solid fa-turn-down"></i></a>
                    <div class="form-check">
                        <input class="form-check-input beaches" type="checkbox" value="" id="beachesCheck" value="1" onchange="valueChanged()" checked>
                        <label class="form-check-label" for="beachesCheck">
                            Beaches
                        </label>
                    </div>
                    <div class="collapse" id="collapseControls">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="townNames" onchange="valueChanged()">
                            <label class="form-check-label" for="townNames">
                                Town Names
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="aboriginalPlace" onchange="valueChanged()" disabled>
                            <label class="form-check-label" for="lakes">Aboriginal Place Names (Coming Soon)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="lakes" onchange="valueChanged()" disabled>
                            <label class="form-check-label" for="lakes">Lakes (Coming Soon)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="lakes" onchange="valueChanged()" disabled>
                            <label class="form-check-label" for="lakes"><a href="./shipwrecks.php">Shipwrecks</a> (Coming Soon)</label>
                        </div>
                        <p class="card-text"><small class="text-muted">Version 2.2 (Pretty URLs Update)</small></p>
                    </div>


                </div>
            </div>
            <?php include "db_liveButtons.php"?>

            <!-- towns -->
            <button class="Hotspot town" slot="hotspot-21" data-position="0.04677723307792192m 0.3777537780172915m -0.01885178228537865m"
                data-normal="0.2664118288396613m 0.9638592933900153m -8.68079952629213e-8m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Warooka</div>
            </button><button class="Hotspot town" slot="hotspot-22" data-position="-0.4824367051303519m 0.3636446229315773m 0.9588420427602776m" data-normal="0m 1m 0m"
                data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Minlaton</div>
            </button><button class="Hotspot town" slot="hotspot-23" data-position="-1.5266016237419322m 0.3623160400470198m 1.0198732662857468m"
                data-normal="3.2058824174940294e-7m 0.9999999999999486m -1.1818455505442455e-8m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Port Vincent</div>
            </button><button class="Hotspot town" slot="hotspot-24" data-position="-1.317408967104577m 0.3623140942613734m 0.4541084438433334m"
                data-normal="-8.800536630073454e-7m 0.999999999999612m 4.2608204845537e-8m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Stansbury</div>
            </button><button class="Hotspot town" slot="hotspot-25" data-position="-0.7580751969241488m 0.3853910304605961m -0.10766817363602377m" data-normal="0m 1m 0m"
                data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Yorketown</div>
            </button><button class="Hotspot town" slot="hotspot-26" data-position="-1.0528281928972287m 0.36231588307217777m -0.4404322442433344m"
                data-normal="4.914223118047876e-7m 0.9999999999998256m -3.280129726889481e-7m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Edithburgh</div>
            </button><button class="Hotspot town" slot="hotspot-27" data-position="0.36375177617123855m 0.3761827228776964m 0.24243864117517644m" data-normal="0m 1m 0m"
                data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Point Turton</div>
            </button><button class="Hotspot town" slot="hotspot-28" data-position="1.3026072366850423m 0.3759139154128756m 0.30558435077676194m"
                data-normal="0.6839797881031832m 0m -0.7295009591949313m" data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Corny Point</div>
            </button><button class="Hotspot town" slot="hotspot-29" data-position="1.8528273138328406m 0.3761827228776964m -1.1820656765818272m" data-normal="0m 1m 0m"
                data-visibility-attribute="visible">
                <div class="HotspotAnnotation">Marion Bay</div>
            </button>


            <div class="progress-bar hide" slot="progress-bar">
                <div class="update-bar"></div>
            </div>


        </model-viewer>

        <!-- OFF CANVAS -->

        <?php include "db_offCanvas.php"?>



    </div> <!-- END LANDING  -->


    <!-- START MAINLIKE -->

    <div id="mainlike" class="bg-rich border-top border-3 ">
        <div class="text-light">
            <div class="row gx-0">
                <div class="mainlike-left col-6 bg-rich d-none d-sm-none d-md-block" style="position:relative">
                    <p class="display-4 text-center feed-your-soul ps-4">Feed your soul</p>
                    <div class="vr"></div>
                    <p class="sideways-text lead h-100">Beach vibes <span class="squish">-----------------------</span></p>
                </div>
                <div class="mainlike-right col-12 col-md-6 bg-rich">
                    <h5 class="feed-your-soul py-2">What did you think of the interactive map?</h5>
                    <h5 class="py-3">Below is a static list of the beaches above. You can use the button below to give yourself 6 'shakas' to vote on your favourite beaches.</h5>
                    <h5 class="py-3"><u>No login required.</u> Just click!</h5>
                    <form id="shakaform" class="py-3" method="POST">
                        <button id="shakabutton" type="submit" class="main-shakabutton btn position-relative border-2 rounded-0" type="button">
                            <h5 class="text-rich d-inline pt-2 px-4" style="float:left;">Start Voting</h5>
                            <img id="shakaimg" style="float:left;" class="" src="img/shaka.svg" width="40px" alt="Shaka Icon">
                            <span id="shakacount" class="position-absolute top-0 start-100 translate-middle badge bg-rich rounded-pill border border-2 text-light">
                                2
                            </span>
                        </button>
                    </form>
                    <h5 id="facebooktext" class="pt-2">&nbsp;</h5>

                </div>
            </div>
        </div>
    </div>


    <div id="bg-waves">

    </div>



    <!-- START BEACHES -->
    <div id="beaches">
        <div class="container">
            <div class="row">
                <h2 class="text-center pt-4">STATIC BEACH LIST<span class="text-orange">.</span></h2>
                <h3 id="top8" class="text-center pb-4">Top 8</h3>
            </div>
            <div id="beachcontainer" class="row masonary" data-masonry='{"percentPosition": true }'>

                <?php include "db_staticbeaches.php"?>

            </div>
            <div class="row col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mx-auto bg-rich mb-4">
                <button id="morebeaches" type="submit" class="main-shakabutton btn btn-lg position-relative border-2 rounded-0">
                    <h5 class="text-rich d-inline pt-2 px-4">Load More Beaches</h5>
                </button>
            </div>
        </div>
    </div>

    <!-- START INFO -->
    <div id="info" class="bg-rich text-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center text-uppercase py-4">how this works<span class="text-orange">.</span></h3>
                    <p class="lead">Thankyou for checking out this interactive map of the beaches of the Southern Yorke Peninsula.</p>
                    <p>This is a rendered model of the Southern Yorke Peninsula. It's not a pefect map, but its pretty close. The way the shore angles out evenly distores some of the
                        coastline. Those in the shipping game should stick with their charts. </p>
                    <p>The map highjacks the mouse when selected. So unfortunately sometimes its hard for the script to tell if you want to pan down the view down or scroll the page.
                        Particularly on mobile and touch screens. I plan on adding some big fat buttons for your big fat fingers soon.</p>
                    <h4 class="text-center text-uppercase py-4">Scope<span class="text-orange">.</span></h4>
                    <p>The purpose of this page is to show off some of the beaches on the Yorke Peninsula. The concept is to continually develop the map, adding beaches, detail, features and
                        information.</p>
                    <div class="row py-4">
                        <div class="col-md-6">
                            <h4 class="text-center ">Recent Additons<span class="text-orange">.</span></h4>
                            <ul class="list-group list-group-flush px-4 ">
                                <li class="list-group-item text-light border-orange bg-transparent"><a class="text-white" href="./shipwrecks.php">Shipwrecks</a></li>
                                <li class="list-group-item text-light border-orange bg-transparent">Focus and zoom to the beach selected</li>
                                <li class="list-group-item text-light border-orange bg-transparent"><a class="text-white" href="./shell/">Shell Beach</a></li>
                                <li class="list-group-item text-light border-orange bg-transparent">Pretty URLs</li>
                                <li class="list-group-item text-light border-orange bg-transparent">Normal Maps (shiny/textured water)</li>
                                <li class="list-group-item text-light border-orange bg-transparent">iPad visability issue (fixed)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center">Future Updates<span class="text-orange">.</span></h4>
                            <ul class="list-group list-group-flush px-4">
                                <li class="list-group-item text-light border-orange bg-transparent">More beaches + salt lakes + Shipwrecks</li>
                                <li class="list-group-item text-light border-orange bg-transparent">Photograph last few beaches</li>
                                <li class="list-group-item text-light border-orange bg-transparent">Beach Gallery + panoramic</li>
                                <li class="list-group-item text-light border-orange bg-transparent">Possibly add forum for discussion</li>
                                <li class="list-group-item text-light border-orange bg-transparent">Socials</li>
                                <li class="list-group-item text-light border-orange bg-transparent">Aboriginal Place Names</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="text-center">Acknowledgement of Country<span class="text-orange">.</span></h4>
                        <p>Yorkes Live acknowledges the Traditional custodians of these beautiful beaches, the Narangga people. We pay respects to their Elders, past and present. We
                            celebrate the stories, culture and traditions of Aboriginal and Torres Strait Islander Elders of all communities who also work and live on this land.</p>
                    </div>
                    <p class="lead text-center pb-4">If you feel like something is missing or should be added please use the contact form below.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- START CONTACT -->
    <div id="contact" class="bg-light">
        <div class="container py-4 ">
            <h2 class="text-center p-0">CONTACT<span class="text-orange">.</span></h2>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-8 order-2 order-md-1">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 py-3">
                                <input type="text" class="form-control border-3 border-rich" id="name" name="name" placeholder="Name">
                                <small class="form-text text-dark">Your name.</small>
                            </div>
                            <div class="col-md-6 py-3">
                                <input type="email" class="form-control border-3 border-rich" id="email" name="email" placeholder="Email">
                                <small class="form-text text-dark">Your email which we will never share.</small>
                            </div>
                            <div class="col-md-12 py-3">
                                <input type="text" class="form-control border-3 border-rich" id="subject" name="subject" placeholder="Subject">
                                <small class="form-text text-dark">The subject of your email. (This can be anything you
                                    like)</small>
                            </div>
                            <div class="col-md-12 py-3">
                                <select class="form-control border-3 border-rich" id="interest" name="interest">
                                    <option>My favorite beach is missing from the list!</option>
                                    <option>I see a correction that should be made</option>
                                    <option>Something on the website isn't working</option>
                                    <option>I have another question</option>
                                    <option>Other</option>
                                </select>
                                <small class="form-text text-dark">Did you take an interest in
                                    one of our services?</small>
                            </div>
                            <div class="col-md-12 py-3 d-none">
                                <textarea class="form-control border-3 border-rich d-none" id="pitfall" name="pitfall" rows="2" placeholder="Message"></textarea>
                                <small class="form-text text-dark d-none">Please type out your enquiry here
                                    and we will answer as soon as we can!</small>
                            </div>
                            <div class="col-md-12 py-3">
                                <textarea class="form-control border-3 border-rich" id="message" name="message" rows="2" placeholder="Message"></textarea>
                                <small class="form-text text-dark">Please type out your enquiry here
                                    and we will answer as soon as we can!</small>
                            </div>

                        </div>
                        <button type="button" class="btn btn-custom d-none" onclick="honeyformsubmit()" style=" margin-left:10px">Send</button>

                        <div id="sendappear" class="mt-2 ml-2"></div>
                        <!-- <button type="button" class="btn btn-custom" onclick="validateForm()"
                            style=" margin-left:10px">Send</button> -->
                        <div class="status mt-3 ml-3" id="status"></div>
                    </form>
                </div>

                <div class="col-md-4 order-1 order-md-2">

                    <h3 class="mt-4 display-4 text-center text-orange"><i class="fa-solid fa-map-location-dot"></i></h5>

                        <p class="text-center font-weight-light lead">Yorke Peninsula, South Australia</p>


                        <h3 class="mt-4 display-4 text-center text-orange"><i class="fa-solid fa-paper-plane"></i></h5>

                            <p class="text-center font-weight-light lead">
                                <a class="text-dark" style="word-wrap:break-word"
                                    href='mailt&#111;&#58;york&#37;&#54;5&#115;&#64;w%6&#53;s&#37;&#55;&#52;%&#54;&#50;ur&#37;79digi&#116;al&#46;&#99;%6Fm%2E%61u'>york&#101;&#115;&#64;we&#115;tb&#117;rydigit&#97;l&#46;c&#111;m&#46;a&#117;</a>
                            </p>
                </div>
            </div>



        </div>

        <!-- TOAST -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="" class="toast 6shakas hide" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-orange">
                    <strong class="me-auto text-light">YORKES.LIVE</strong>
                    <small class="text-light">Added Just Now.</small>
                    <button type="button text-light" class="btn-close  btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    6 Shakas Added. Use them to give to your favorite beaches.
                </div>
            </div>
        </div>

        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="" class="toast noshakas hide" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-orange">
                    <strong class="me-auto text-light">YORKES.LIVE</strong>
                    <small class="text-light">Added Just Now.</small>
                    <button type="button text-light" class="btn-close  btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    You have no shakas left. But thanks for voting!
                </div>
            </div>
        </div>

        <?php include '../modules/footer.php'?>

        <script>
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



        // console.log(scroll);
        </script>

        <script type="module">
        //HANDLES CAMERA CHANGES - MODEL VIEWER
        const modelViewer = document.querySelector("#hotspot-camera-view-demo");
        const annotationClicked = (annotation) => {
            let dataset = annotation.dataset;
            modelViewer.cameraTarget = dataset.target;
            modelViewer.cameraOrbit = dataset.orbit;
        }

        modelViewer.querySelectorAll('button').forEach((hotspot) => {
            //console.log("hello hotspot", hotspot);
            hotspot.addEventListener('click', () => annotationClicked(hotspot));
        });
        </script>


        <script>
        // Handles loading the events for <model-viewer>'s slotted progress bar
        const onProgress = (event) => {
            const progressBar = event.target.querySelector('.progress-bar');
            const updatingBar = event.target.querySelector('.update-bar');
            updatingBar.style.width = `${event.detail.totalProgress * 100}%`;
            if (event.detail.totalProgress === 1) {
                progressBar.classList.add('hide');
            } else {
                progressBar.classList.remove('hide');
                if (event.detail.totalProgress === 0) {
                    //event.target.querySelector('.center-pre-prompt').classList.add('hide');
                }
            }
        };
        document.querySelector('model-viewer').addEventListener('progress', onProgress);
        </script>


        <script type="text/javascript">
        //MODEL VIEW CONTROL PANEL
        function valueChanged() {
            if ($('#beachesCheck').is(":checked"))
                $(".beach").show(200);
            else
                $(".beach").hide(200);

            if ($('#townNames').is(":checked"))
                $(".town").show(200);
            else
                $(".town").hide(200);
        }
        </script>


        <script>
        //shaka ajax
        var coins = 0;
        var coins = parseInt(document.getElementById("coins").innerHTML);

        function addShaka(nametest) {
            //alert("boom");
            //console.log(nametest);

            var beachshakas = parseInt(document.getElementById("shakacount-" + nametest).innerHTML);
            var coins = 0;
            var coins = parseInt(document.getElementById("coins").innerHTML);




            $.ajax({
                url: "db_beachShaka.php",
                type: "POST",
                data: 'name=' + nametest,
                success: function(data) {
                    if (data == "deducted") {
                        document.getElementById("shakacount-" + nametest).innerHTML = beachshakas + 1;
                        document.getElementById("coins").innerHTML = parseInt(coins - 1);
                        $("#shakaimg-" + nametest).css({
                            'transition': 'transform 0.3s',
                            'transform': 'rotate(-45deg)'
                        });

                    } else {
                        $(".noshakas").toast('show');
                        $("#shakaimg-" + nametest).effect("shake", {
                            distance: 5
                        })

                    }
                }
            })
        };

        $(document).ready(function() {
            var clicks = 0;
            var shakacount = <?php include "db_getShakas.php"?>;



            document.getElementById("shakacount").innerHTML = shakacount;

            $("#shakaform").on("submit", function(e) {
                e.preventDefault();

                var shakaone = 1;

                if (clicks < 1) {
                    clicks++;

                }

                $.ajax({
                    type: 'POST',
                    url: 'db_postShaka.php',
                    data: shakaone,

                    success: function(response) {

                        if (response == 'found') {
                            document.getElementById('facebooktext').innerHTML = "This ticket has already been punched. :(";
                            $("#shakaimg").effect("shake", {
                                distance: 5
                            })
                            $('#shakaimg').effect("transfer", {
                                to: $("#shakacount")
                            }, 500)

                        } else {
                            shakacount++;
                            $('#shakaimg').css({
                                'transition': 'transform 0.3s',
                                'transform': 'rotate(-45deg)'
                            });

                            document.getElementById('shakacount').innerHTML = shakacount;
                            document.getElementById('facebooktext').innerHTML = 'Nice!';
                            document.getElementById("coins").innerHTML = 6;
                            coins = 6;
                            $(".6shakas").toast('show');
                        }


                    }
                });

            })
        });
        </script>
        <script>
        //PULL MORE BEACHES FROM DB


        $('#morebeaches').click(function() {
            console.log("click");
            $('#morebeaches').text("loading..");
            $.ajax({
                url: "db_moreBeaches.php",
                dataType: "html",
                success: function(data) {
                    //$('#beachcontainer').append(data);

                    var $items = $(data);
                    $grid.append($items).masonry('appended', $items);
                    $grid.imagesLoaded(function() {
                        $grid.masonry();
                    });
                    $('#morebeaches').hide();
                    $('#top8').text("All");

                },
                error: function(e) {
                    alert('Error: ' + e);
                }
            });

        });
        </script>
        <script>
        // EMAIL VALIDATE & AJAX test
        function validateForm() {

            document.getElementById('status').innerHTML = "Sending...";
            formData = {
                'name': $('input[name=name]').val(),
                'email': $('input[name=email]').val(),
                'subject': $('input[name=subject]').val(),
                'interest': $('select[name=interest]').val(),
                'pitfall': $('textarea[name=pitfall]').val(),
                'message': $('textarea[name=message]').val()
            };
            $.ajax({
                url: "mail.php",
                type: "POST",
                dataType: 'json',
                data: formData,
                success: function(data) {
                    $('#status').text(data.message);
                    if (data.code) //If mail was sent successfully, reset the form.
                        $('#contact-form').closest('form').find("input[type=text], textarea").val("");
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#status').text("Hmm.. This is embarrassing. Something has gone wrong. Please use the displayed email instead.");
                }
            });
            $.ajaxComplete(function() {
                // Something to execute after AJAX.
            });
            return false;
        }
        </script>

        <script>
        // IMPORT EMAIL SEND BUTTON
        $(document).ready(function() {
            $("#sendappear").load("send.txt");
        });
        </script>

        <!-- masonry for pinterest columns -->
        <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
            crossorigin="anonymous" async></script>

        <script>
        var $grid = $('#beachcontainer').imagesLoaded(function() {
            $grid.masonry({
                itemSelector: '.col-lg-6'
            });
        });
        </script>

        <!-- JQUERY UI -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.1/jquery-ui.min.js"></script>

        <script>
        //intialise tooltips (must be after min.js)
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        </script>

</body>

</html>