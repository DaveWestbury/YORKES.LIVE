<!doctype html>
<html lang="en">

<?php include "../components/header.php" ?>

<body data-bs-spy='scroll' data-bs-target='#navbarID'>

    <?php include "../components/nav.php"?>

    <!-- HEADER IMG -->
    <div style="background-image: url('../gallery/browns/4.jpg'); background-position:center; background-size:cover; height: 600px; position: relative; z-index: -1; ">
        <p class="sideways-text lead h-100" style="position: absolute; top: 100px; z-index: 1; text-shadow: 0px 0px 5px black, 0px 0px 5px black, 0px 0px 10px black;"><a class="text-white"
                style="text-decoration: none;" href="./browns/">Browns Beach</a> <span class="squish">-----------------------</span></p>
    </div>

    <!-- TITLE -->
    <div id="bg-wavesUD" class="p-0 m-0" style="margin-top: -80px !important; z-index: 2 !important;"></div>
    <div class="bg-rich">
        <p class="display-4 text-center feed-your-soul pb-2 text-white m-0">All Sponsors</p>
    </div>
    <div id='bg-waves' class="m-0 p-0" style="margin-top: -5px !important; z-index: 3 !important;"></div>


    <div class="container" style="min-height: 1000px;">
        <div class="row">
            <div class="col-12 ">
                <h1>All Sponsors</h1>
                <h3>Here is a list of all of Yorkes.Live Sponsors. Thankyou!</h3>

                <div id="beachcontainer" class="row masonary" data-masonry='{"percentPosition": true }'>

                    <?php include "../components/all-sponsors.php" ?>

                </div>
            </div>
        </div>
    </div>

    <?php include '../components/footer.php'?>

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