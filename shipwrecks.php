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



    <title>YORKES.LIVE - Shipwrecks</title>
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

    <!-- HEADER IMG -->
    <div style="background-image: url('./gallery/browns/4.jpg'); background-position:center; background-size:cover; height: 600px; position: relative; z-index: -1; ">
        <p class="sideways-text lead h-100" style="position: absolute; top: 100px; z-index: 1; text-shadow: 0px 0px 5px black, 0px 0px 5px black, 0px 0px 10px black;"><a class="text-white"
                style="text-decoration: none;" href="./browns/">Browns Beach</a> <span class="squish">-----------------------</span></p>
    </div>

    <!-- TITLE -->
    <div id="bg-wavesUD" class="p-0 m-0" style="margin-top: -80px !important; z-index: 2 !important;"></div>
    <div class="bg-rich">
        <p class="display-4 text-center feed-your-soul pb-2 text-white m-0">Ship Wrecks</p>
    </div>
    <div id='bg-waves' class="m-0 p-0" style="margin-top: -5px !important; z-index: 3 !important;"></div>


    <div class="container" style="min-height: 1000px;">
        <div class="row">
            <div class="col-12 ">
                <h1>Shipwrecks On Yorke Peninsula</h1>
                <h3>10 Wrecks</h3>
                <p>This section was authored by Tanysha Jane editor of <a href="https://ezramagazine.com">Ezra Magazine</a></p>

                <div id="beachcontainer" class="row masonary" data-masonry='{"percentPosition": true }'>

                    <!-- ETHELS -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>Ethel Wreck</h3>
                                    <p class='card-text'>The Ethel was a three-masted barque sailing ship, 177ft long, weighing 711 tons. Built in 1876 and originally named Camelo, it was
                                        renamed Ethel in 1892. Travelling from South Africa to the port of Semaphore, the Ethel was caught at night in the gale force southwesterly winds of a
                                        summer storm. First the ship lost her sails and then damaged her rudder on a reef—leaving the ship vulnerable in strong surf. A nearby ship, the SS
                                        Ferret, saw the drama unfolding but was also struggling in the rough seas and could not assist directly—instead sending an urgent radio message to
                                        Adelaide. The waves turned the Ethel broadside and kept pushing her hull against the shore, causing the captain and crew to fear she would begin to
                                        break up. A nineteen year old sailor, Leonard Stenerson, volunteered to swim ashore and raise the alarm. A rope was tied to his waist, but he was lost
                                        and his body was never found. The next morning, in calmer conditions, the crew walked ashore. An unsuccessful salvage attempt was made in 1904 with a
                                        tugboat and lines. When the wind blew up and lines broke, the Ethel was blown back onto the beach, where its remains still lay today.

                                        <br><br>A salvage attempt was made during May 1904 by A. H. Hassell of Marion Bay who had purchased the Ethel for £100 at auction. With lines attached
                                        the tug
                                        Euro successfully dragged the Ethel into deeper water. The lines parted when a south-westerly blew up and the Ethel was thrown back onto the beach
                                        with a broken keel. The Ethel was then abandoned.
                                    </p>
                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- Ethels Wreck Beach.
                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- The Ferret -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4 pe-2'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>The Ferret</h3>
                                    <p class='card-text'>The Ferret was an iron screw steamship, 170ft long and was built in Scotland in 1871. In 1880, a conspiracy between 3 men saw it
                                        first stolen, then renamed twice (Bentan and then SS India), and then finally turn up in Australia. A UK insurance company put out a description of
                                        the Ferret, asking authorities to watch for similar ships. An Australian police officer spotted the SS India, noticed the resemblance and the ship was
                                        seized by custom officials. Restored to its original name it was purchased in 1881 from the Vice-Admiralty Court in Melbourne by W. Whinham, a
                                        prominent South Australian shipping identity. It was resold in 1883 to the Adelaide Steamship Company which operated the vessel on the west coast of
                                        Yorke Peninsula until its loss in 1920.

                                        <br><br>On the afternoon of 13 November 1920 the S.S. Ferret under the command of Captain Blair left Port Adelaide for Port Victoria with a cargo of
                                        beer, wine, whiskey, timber, petrol, engines, bricks, iron and other sundries. At about 3:00am the following morning as the Ferret neared Althorpe
                                        Island it was enveloped by a dense fog which showed no sign of clearing. The course was altered to take the vessel south and to the west of Althorpe
                                        Island. In the belief that they had passed clear of Althorpe and Cape Spencer the course was changed to north-east. At 5:35am breakers were reported
                                        close to the starboard bow and the engines reversed, but it was too late.
                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- The Ferret ran ashore on a small beach 1.5 km NNW of Reef Head and about 200 metres from the wreck of the Ethel. Attempts by the crew to
                                        attach a line to the Ethel resulted in one boat capsizing, but they eventually succeeded and all 22 crew made it safely to shore.

                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- The Zanoni -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4  pe-2'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>The Zanoni</h3>
                                    <p class='card-text'>The Zanoni was a 140ft long, three-masted composite barque sailing ship built in England in 1865. In February 1866 the Zanoni sailed
                                        from Liverpool (UK) to Peru, then to Mauritius and then to Port Adelaide. On 11th Feb 1867, on its way from Port Adelaide to Port Wakefield to load
                                        wheat, the ship was struck by a violent squall. Despite reducing the sail in preparation, the ship rolled over and quickly sank. All 16 crew were
                                        rescued and taken to <a href="https://www.cityofadelaide.com.au/">Adelaide</a>. The location of the wreck was unknown until 1983, when a reward was
                                        offered and a local fisherman came forward and led divers to the site. The position has now been fixed. For more information and to see artifacts from
                                        the wreck, visit the Ardrossan Museum.
                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- Ethels Wreck Beach.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SS Clan Ranald -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4 pe-2'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>SS Clan Ranald</h3>
                                    <p class='card-text'>The Clan Ranald was a two-decked turret ship, 355 foot long, weighing 2,285t (net). Built in 1900 in the UK, it sank in 1909 off
                                        Edithburgh, just south of Troubridge Island. The ship left Semaphore, on it’s way to South Africa, with a list to starboard. The Clan Ranald departed
                                        Port Adelaide under the command of Captain Arthur Gladstone for South Africa on 31 January 1909. Of the 64 crew, 54 were of Asiatic and Indian origin,
                                        more commonly referred to as Lascars. The cargo consisted of 39 862 bags of wheat and 28 451 bags of flour. Also loaded were 648 tonnes of coal, 172
                                        tonnes of which were placed on the top decks. The vessel had developed stability problems in port as cargo was stowed and the water ballast tanks
                                        emptied. The problem was supposedly rectified, however a 4 degree list to starboard was evident when the Clan Ranald left its berth.

                                        <br><br>At 2:00pm the ship was south of Troubridge Island when it suddenly lurched onto its starboard side at a 45 degree angle. The crew rushed up to
                                        the deck leaving the engines still running. They found the rudder out of the water and the starboard deck submerged. At 4:30pm the wind blew up from
                                        the south-east driving them towards Troubridge Hill. Rough seas smashed the two accessible lifeboats so the crew tried to construct wooden rafts.

                                        <br><br>The starboard anchor was dropped after nightfall which brought the bow into the wind, but the ship began to fill with water when deck hatches
                                        washed away. About 9:30pm the crew saw the lights of the passing S.S. Uganda and tried to signal it without result. Then at 10:00pm the Clan Ranald
                                        capsized and sank about 700 metres from the rocky cliffs. As the huge ship sank the vortex caused many men to be sucked under the water and drowned.
                                        Others supported themselves on floating wreckage for the long swim to shore, only to be dashed against the jagged rocks and cliffs.

                                        <br><br>Of the 40 men who perished, 36 bodies were later recovered and buried in the Edithburgh cemetery. The 20 Lascar survivors were seized by the
                                        Commonwealth for being illegal immigrants under the terms of the Immigration Restriction Act 1901 which related to the white Australia policy. They
                                        were handprinted, given a dictation test designed to cause failure, and deported within a week.

                                        <br><br>The list increased, until starboard deck was suddenly under water. Rough weather then smashed the ship against the nearby cliffs. The
                                        lifeboats had been destroyed on the cliffs, so the survivors had to swim through cold, dark and stormy conditions to reach the shore, where the locals
                                        had rushed to give assistance where they could. Of the 64 crew on board, 40 souls perished. Only 36 of the 40 missing bodies were recovered, these
                                        were buried in the Edithburgh Cemetery. The tragic tale can be read in more detail at the Edithburgh Museum. While the anchor is located outside
                                        Edithburgh Museum, the shipwreck itself is an accessible dive site.

                                        <br><br>When the wreck was located in 1962 it was found to be in a remarkable state of preservation. But soon after, divers blasted the wreck with
                                        explosives to recover the copper alloy fittings and other artefacts. Whilst still a spectacular site to dive, they left behind a broken hull and
                                        shattered remains. The wreck of the S.S. Clan Ranald rests on its starboard side almost upside down on a sandy seabed at a depth of 18-20 metres. The
                                        bow section has collapsed forwards and downwards. The double hull bottom of the bow stands vertical, and the port bow plating has deteriorated leaving
                                        the bow stem laying horizontal on the seabed.
                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- Latitude 35° 10' 03.7" South Longitude 137° 37' 14.8" East
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- The Hougomont -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4 pe-2'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>The Hougomont</h3>
                                    <p class='card-text'>Built in 1897 in Scotland, the Hougomont was a four-masted, 292ft long, steel hulled, barque sailing ship. In 1932, on its way from
                                        London to Port Lincoln, the Hougomont was caught in a storm and suffered serious damage. 18 slow days later, after refusing aid from other ships, the
                                        Hougomont finally arrived at the port of Semaphore. Repairs were deemed too expensive, and so the Hougomont was sold to the Waratah Gypsum Company,
                                        who then paid for a tug boat to tow it back to Stenhouse Bay Jetty. The owners of the Hougomont determined that the expense to repair the vessel was
                                        too great, the vessel was valued at about £1000 but repairs were costed at £2500, and a decision was made to scuttle it. After stripping the vessel of
                                        its fittings the Hougomont was towed to Stenhouse Bay on 8 January 1933 where it was positioned south-west of the jetty and sunk with explosives to
                                        provide a breakwater for vessels loading gypsum. There explosives were used to sink the ship, to create a breakwater to protect ships laden with
                                        gypsum. The ship is now located in 9 metres of water, making the remaining pieces easily accessible to divers.
                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- Ethels Wreck Beach.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SS Marion -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4 pe-2'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>SS Marion</h3>
                                    <p class='card-text'>The schooner rigged, single screw steamer Marion was built in 1854 at Glasgow, Scotland and imported for the Hobart - Melbourne
                                        passenger trade. In 1857 it was sold to South Australian interests for the Port Adelaide - Port Lincoln trade. The Marion was the first vessel to
                                        operate a regular steam shipping service from Port Adelaide to the Spencer Gulf ports. The iron hulled vessel of 197 gross tons measured 114.2 feet
                                        (34.8m) in length, 19.6 feet (6.0m) breadth and 10 feet (3.0m) depth.

                                        <br><br>On 11 July 1862 the S.S. Marion was en-route from Adelaide to Wallaroo under the command of Captain Alexander McCoy. On board were 35
                                        passengers and 15 crew. Visibility became hazy while the Marion's chief officer was at the helm and, after passing Troubridge Hill, he became unsure
                                        of his position. Unexpectedly, heavy surf threatened out of the gloom. The engine was ordered full astern but it was too late, the advancing swells
                                        lifted the vessel onto rocks at the east side of Cable Hut Bay, 5 kilometres west of Stenhouse Bay.

                                        <br><br>The passengers and crew were landed safely on the nearby beach. Anxious moments followed when a passing vessel, the S.S. Lubra, appeared not
                                        to notice the distress flag and fire lit by the castaways. When all seemed lost, the S.S. Lubra altered course and rescued the shipwrecked group.

                                        <br><br>The wreck of the S.S. Marion lies at the base of a cliff, in 2-7 metres of water, east of Chinamans Hat Island, and to the south-east of the
                                        car park at Cable Hut Bay.
                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- Latitude 35° 17' 17.1" South Longitude 136° 55' 18.4" East
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pareora -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4 pe-2'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>Pareora</h3>
                                    <p class='card-text'>At 4:00am on 18 September the Pareora, in heavy seas, struck rocks to the north of Althorpe Island near The Monument rock. The
                                        tremendous power of the waves quickly broke the vessel up, shearing off the stern section. Confusion ruled. Unable to release the lifeboats the men
                                        either jumped or were washed overboard. It was a terrifying struggle for survival. The crew of the cutter Zephyr which was sheltering nearby were
                                        alerted by the cries for help, and heroically rescued seven survivors in the dangerous conditions. The master and ten other members of the Pareora's
                                        crew were killed. A cross erected on Althorpe Island marks their graves. The subsequent Marine Board inquiry found the tragedy was caused by careless
                                        navigation.
                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- Latitude 35° 21' 50.3" South Longitude 136° 51' 22.6" East
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Willyama -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4 pe-2'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>Willyama</h3>
                                    <p class='card-text'>The schooner rigged, screw steamer Willyama was built in 1897 by William Dobson fr Co. in Newcastle on Tyne, England. At the time of
                                        loss it was owned by the Adelaide Steamship Co. The steel hulled vessel of 1713 gross tons measured 325.5 feet (99.2m) in length, 45.1 feet (13.7m)
                                        breadth and 21.0 feet (6.4m) depth. Mystery surrounds the Willyama-s striking of the reel near Marion Bay. The crew's collective silence appeared to
                                        indicate that they either agreed to protect the captain's integrity, or perhaps were threatened if anyone spoke against him. The Willyama was carrying
                                        a cargo of coal from Newcastle, NSW to Port Pirie. On the night of 1 3 April 1907 the vessel was several miles off course. In the hazy gloom the crew
                                        on watch had failed to notice the Althorpe Island lighthouse. When land was finally sighted at 3:30am, the men on watch were undecided on the next
                                        course of action. They summoned Captain Bevvley to the bridge, but it was too late. The vessel struck a reef and sank off Penguin Point in Marion Bay.
                                        There was no immediate danger to those on board and all were safely landed.
                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- Latitude 35° 15" 09.7" South Longitude 136° 58' 38.9" East
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Yatala -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4 pe-2'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>Yatala </h3>
                                    <p class='card-text'>to undergo repairs to its refrigeration system. A fire started in the engine room and despite the efforts of the four crew, it could
                                        not be controlled. Shortly after the crew abandoned the trawler, strong winds drove the flames forward and three explosions were heard.
                                        <br><br>The Yatala Reef sank about 1km from shore in approximately 11 metres of water. The wrecks runs almost parallel to the shore with the bow
                                        facing
                                        eastwards.
                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- Latitude 35° 07' 07.2" South<br>- Longitude 136° 29' 22.9" East
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Althorpe Island Shipwrecks -->
                    <div class='col-lg-6'>
                        <div class='card mb-4 border-3 border-rich'>
                            <div class='row g-0'>
                                <div class='col-12 ps-4 pe-2'>
                                    <h3 class='card-title me-auto align-middle text-uppercase pt-2'>Althorpe Island Shipwrecks</h3>
                                    <p class='card-text'>Apprximately 7km south-southwest of Cape Spencer likes Althorpe Island at the western entrance to Investigator Strait. The
                                        settlements of the Eyre Peninsula and the Yorke Peninsula led to an increase of coastal shipping to and from the Spencer Gulf in the 1860's. Minerals,
                                        wool and wheat were loaded and returned for shipment to Adelaide.
                                        Between 1878 - 1982 six vessles sunk around Althorpe Island.
                                        <br><br>Young St George (1878)
                                        <br>Welling (1892)
                                        <br>Pareora (1919)
                                        <br>Rapid (1937)
                                        <br>Altair (1971)
                                        <br>Mylor Star (1982)
                                        <br>More history on Yorke Peninsula Shipwrecks visit: <br> <a href="https://www.sea.museum/collections/arhv">Australian Register of Historic
                                            Vessels</a><br>
                                        <a href="https://www.sea.museum/">Australian National Maratime Museum</a>

                                    <p> <span class='fw-bold'>Location</span>
                                        <br>- Althorpe Island
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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