<!doctype html>
<html lang="en">

<?php include "./components/header.php" ?>

<body data-bs-spy="scroll" data-bs-target="#navbarID">
    <div id="landing" class="">
        <?php include "./components/nav.php" ?>

       <?php include "./components/model-viewer.php" ?>
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
                                <li class="list-group-item text-light border-orange bg-transparent"><a class="text-white" href="./pages/shipwrecks.php">Shipwrecks</a></li>
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

        <?php include './components/footer.php'?>

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