<?php  

include_once "./includes/db_getCoins.php";


echo "<nav id='nav-color' class='navbar fixed-top navbar-expand-sm navbar-dark border-bottom border-3'>
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
                        <p class='nav-link text-light' aria-current='page' href='#beaches'>
                            <h4>
                                <span id='coins' class='align-middle text-blue p-2 '>
                                    " . $shakaCoins .  "
                                </span>
                            </h4>
                        </p>
                        <img id='' class='me-4' src='img/shakawhite.png' width='45px' height='45px' alt='Shaka Icon'>
                    </li>
        </ul>
    </div>
</nav>"

?>

