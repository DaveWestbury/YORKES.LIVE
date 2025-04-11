<!doctype html>
<html lang="en">

<?php include "./modules/header.php" ?>

<?php include "db_singlebeach.php" ?>

<?php include './modules/footer.php'?>

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