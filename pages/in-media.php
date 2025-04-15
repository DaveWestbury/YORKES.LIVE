<!doctype html>
<html lang="en">

<?php include "../components/header.php" ?>

<body data-bs-spy='scroll' data-bs-target='#navbarID'>
    
<?php include "../components/nav.php" ?>


    <div style="background-image: url('../gallery/browns/4.jpg'); background-size:cover; height: 600px;">

    </div>
    


    <!-- TITLE -->
    <div id="bg-wavesUD" class="p-0 m-0" style="margin-top: -80px !important; z-index: 10 !important;"></div>
    <div class="bg-rich">
        <p class="display-4 text-center feed-your-soul pb-2 text-white m-0">In The Media</p>
    </div>
    <div id='bg-waves' class="m-0 p-0" style="margin-top: -5px !important;"></div>



    <div class="container" style="min-height: 1000px;">
        <div class="row">
            <div class="col-12 ">
                <h1 class="mb-4">Some places YORKES LIVE has been featured in the media</h1>

                <div id="beachcontainer" class="row masonary" data-masonry='{"percentPosition": true }'>

                    <!-- Ezra -->
                    <div class='col-lg-12'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2 text-center display-6'>Ezra Magazine</h3>
                                    <div class="row">
                                        <div class="col-lg-4 pb-3">
                                            <a href="https://ezramagazine.com/top5beachesontheyorkepeninsula/"><img class="img-fluid" src="../img/inmedia/ezra.jpg" alt="image of article"></a>


                                        </div>
                                        <div class="col-lg-8">
                                            <p class='pt-4'> In January 2024 YORKES.LIVE was featured in <a href="https://ezramagazine.com/top5beachesontheyorkepeninsula/">Ezra Magazine</a>.
                                                The
                                                article goes through 5 beaches on the Yorke Peninsula as voted on by you. A fantastic write up and absolutely worth the read. Thanks Ezra
                                                Magazine!</p>
                                            <p> <span class='fw-bold'>Location</span>
                                                <br>- https://ezramagazine.com/top5beachesontheyorkepeninsula/
                                            </p>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>


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