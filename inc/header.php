<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./assets/images/favicon.png" rel="shortcut icon">
    <title>SV Ecommerce - Electronics, Apparel, Computers, Books & more</title>
    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600,700" rel="stylesheet">
    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="./assets/css/vendor.css">
    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="./assets/css/utility.css">
    <!--====== App ======-->
    <link rel="stylesheet" href="./assets/css/app.css">
    <!-- <link rel="stylesheet" href="./assets/css/theme1.css"> -->
    <link rel="stylesheet" href="./assets/css/theme2.css">
</head>
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">
            <img class="preloader__img" src="./assets/images/preloader.png" alt=""></div>
    </div>
    <!--====== Main App ======-->
    <div id="app">
        <!--====== Main Header ======-->
        <header class="header--style-1 header--box-shadow">
            <!--====== Nav 1 ======-->
            <nav class="primary-nav primary-nav-wrapper--border">
                <div class="container">
                    <!--====== Primary Nav ======-->
                    <div class="primary-nav">
                        <!--====== Main Logo ======-->
                        <a class="main-logo" href="index.php">
                            <img src="./assets/images/logo/logo-1.png" alt=""></a>
                        <!--====== End - Main Logo ======-->
                        <!--====== Search Form ======-->
                        <form class="main-form">
                            <label for="main-search"></label>
                            <input class="input-text input-text--border-radius input-text--style-1" type="text" id="main-search" placeholder="Search">
                            <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button>
                        </form>
                        <!--====== End - Search Form ======-->
                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">
                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs" type="button"></button>
                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">
                                <span class="ah-close">✕ Close</span>
                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li><a class="u-c-brand">ENGLISH</a></li>   
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">
                                        <a><i class="far fa-user-circle"></i></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:130px">
                                            <li>
                                                <a href="./dashboard.php"><i class="fas fa-user-circle u-s-m-r-6"></i>
                                                <span>Account</span></a></li>
                                            <li>
                                                <a href="./signup.php"><i class="fas fa-user-plus u-s-m-r-6"></i>
                                                    <span>Signup</span></a></li>
                                            <li>
                                                <a href="./signin.php"><i class="fas fa-lock u-s-m-r-6"></i>
                                                    <span>Signin</span></a></li>
                                            <li>
                                                <a href="./signup.php"><i class="fas fa-lock-open u-s-m-r-6"></i>
                                                    <span>Signout</span></a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">
                                        <a><i class="fas fa-dollar-sign"></i></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul>
                                            <li><a class="u-c-brand">US DOLLAR</a></li>
                                                <li><a>POUND </a></li>
                                                <li><a>EURO</a></li>
                                                <li><a>SAUDI RIYAL</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Contact">
                                        <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a>
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Mail">
                                        <a href="mailto:info@svecommerce.com"><i class="far fa-envelope"></i></a>
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Primary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 1 ======-->


            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">

                    <!--====== Secondary Nav ======-->
                    <div class="secondary-nav">

                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation1">
                            <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">
                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list">
                                    <li class="has-dropdown">
                                        <span class="mega-text">M</span>

                                        <!--====== Mega Menu ======-->
                                        <span class="js-menu-toggle"></span>
                                        <div class="mega-menu">
                                            <div class="mega-menu-wrap">
                                                <div class="mega-menu-list">
                                                    <ul>
                                                        <li class="js-active">
                                                            <a href="./shop-side-version-2.php"><i class="fas fa-tv u-s-m-r-6"></i>
                                                                <span>Electronics</span></a>
                                                            <span class="js-menu-toggle js-toggle-mark"></span>
                                                        </li>
                                                        <li>
                                                            <a href="./shop-side-version-2.php"><i class="fas fa-female u-s-m-r-6"></i>
                                                            <span>Women's Clothing</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>
                                                            <a href="./shop-side-version-2.php"><i class="fas fa-male u-s-m-r-6"></i>
                                                            <span>Men's Clothing</span></a>
                                                            <span class="js-menu-toggle"></span></li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-utensils u-s-m-r-6"></i>
                                                            <span>Food & Supplies</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-couch u-s-m-r-6"></i>
                                                            <span>Furniture & Decor</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-football-ball u-s-m-r-6"></i>
                                                            <span>Sports & Game</span></a>
                                                            <span class="js-menu-toggle"></span></li>
                                                        <li>
                                                            <a href="#"><i class="fas fa-heartbeat u-s-m-r-6"></i>
                                                                <span>Beauty & Health</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!--====== Electronics ======-->
                                                <div class="mega-menu-content js-active">

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">3D PRINTER & SUPPLIES</a></li>
                                                                <li><a href="./shop-side-version-2.php">3d Printer</a></li>
                                                                <li><a href="./shop-side-version-2.php">3d Printing Pen</a></li>
                                                                <li><a href="./shop-side-version-2.php">3d Printing Accessories</a></li>
                                                                <li><a href="./shop-side-version-2.php">3d Printer Module Board</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">HOME AUDIO & VIDEO</a></li>
                                                                <li><a href="./shop-side-version-2.php">TV Boxes</a></li>
                                                                <li><a href="./shop-side-version-2.php">TC Receiver & Accessories</a></li>
                                                                <li><a href="./shop-side-version-2.php">Display Dongle</a></li>
                                                                <li><a href="./shop-side-version-2.php">Home Theater System</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">MEDIA PLAYERS</a></li>
                                                                <li> <a href="./shop-side-version-2.php">Earphones</a></li>
                                                                <li><a href="./shop-side-version-2.php">Mp3 Players</a></li>
                                                                <li> <a href="./shop-side-version-2.php">Speakers & Radios</a></li>
                                                                <li><a href="./shop-side-version-2.php">Microphones</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">VIDEO GAME ACCESSORIES</a></li>
                                                                <li> <a href="./shop-side-version-2.php">Nintendo Video Games Accessories</a></li>
                                                                <li><a href="./shop-side-version-2.php">Sony Video Games Accessories</a></li>
                                                                <li><a href="./shop-side-version-2.php">Xbox Video Games Accessories</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">SECURITY & PROTECTION</a></li>
                                                                <li><a href="./shop-side-version-2.php">Security Cameras</a></li>
                                                                <li><a href="./shop-side-version-2.php">Alarm System</a></li>
                                                                <li><a href="./shop-side-version-2.php">Security Gadgets</a></li>
                                                                <li><a href="./shop-side-version-2.php">CCTV Security & Accessories</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">PHOTOGRAPHY & CAMERA</a></li>
                                                                <li><a href="./shop-side-version-2.php">Digital Cameras</a></li>
                                                                <li><a href="./shop-side-version-2.php">Sport Camera & Accessories</a></li>
                                                                <li><a href="./shop-side-version-2.php">Camera Accessories</a></li>
                                                                <li><a href="./shop-side-version-2.php">Lenses & Accessories</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">ARDUINO COMPATIBLE</a></li>
                                                                <li><a href="./shop-side-version-2.php">Raspberry Pi & Orange Pi</a></li>
                                                                <li><a href="./shop-side-version-2.php">Module Board</a></li>
                                                                <li><a href="./shop-side-version-2.php">Smart Robot</a></li>
                                                                <li><a href="./shop-side-version-2.php">Board Kits</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">DSLR Camera</a></li>
                                                                <li><a href="./shop-side-version-2.php">Nikon Cameras</a></li>
                                                                <li><a href="./shop-side-version-2.php">Canon Camera</a></li>
                                                                <li><a href="./shop-side-version-2.php">Sony Camera</a></li>
                                                                <li><a href="./shop-side-version-2.php">DSLR Lenses</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">NECESSARY ACCESSORIES</a></li>
                                                                <li><a href="./shop-side-version-2.php">Flash Cards</a></li>
                                                                <li><a href="./shop-side-version-2.php">Memory Cards</a></li>
                                                                <li><a href="./shop-side-version-2.php">Flash Pins</a></li>
                                                                <li><a href="./shop-side-version-2.php">Compact Discs</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-9 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-0.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Electronics ======-->


                                                <!--====== Women ======-->
                                                <div class="mega-menu-content">

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-1.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">HOT CATEGORIES</a></li>
                                                                <li> <a href="./shop-side-version-2.php">Dresses</a></li>
                                                                <li><a href="./shop-side-version-2.php">Blouses & Shirts</a></li>
                                                                <li><a href="./shop-side-version-2.php">T-shirts</a></li>
                                                                <li><a href="./shop-side-version-2.php">Rompers</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">INTIMATES</a></li>
                                                                <li><a href="./shop-side-version-2.php">Bras</a></li>
                                                                <li><a href="./shop-side-version-2.php">Brief Sets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Bustiers & Corsets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Panties</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">WEDDING & EVENTS</a></li>
                                                                <li><a href="./shop-side-version-2.php">Wedding Dresses</a></li>
                                                                <li><a href="./shop-side-version-2.php">Evening Dresses</a></li>
                                                                <li><a href="./shop-side-version-2.php">Prom Dresses</a></li>
                                                                <li><a href="./shop-side-version-2.php">Flower Dresses</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">BOTTOMS</a></li>
                                                                <li><a href="./shop-side-version-2.php">Skirts</a></li>
                                                                <li><a href="./shop-side-version-2.php">Shorts</a></li>
                                                                <li><a href="./shop-side-version-2.php">Leggings</a></li>
                                                                <li><a href="./shop-side-version-2.php">Jeans</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">OUTWEAR</a></li>
                                                                <li><a href="./shop-side-version-2.php">Blazers</a></li>
                                                                <li><a href="./shop-side-version-2.php">Basics Jackets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Trench</a></li>
                                                                <li><a href="./shop-side-version-2.php">Leather & Suede</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">JACKETS</a></li>
                                                                <li><a href="./shop-side-version-2.php">Denim Jackets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Trucker Jackets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Windbreaker Jackets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Leather Jackets</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">ACCESSORIES</a></li>
                                                                <li><a href="./shop-side-version-2.php">Tech Accessories</a></li>
                                                                <li><a href="./shop-side-version-2.php">Headwear</a></li>
                                                                <li><a href="./shop-side-version-2.php">Baseball Caps</a></li>
                                                                <li><a href="./shop-side-version-2.php">Belts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">OTHER ACCESSORIES</a></li>
                                                                <li><a href="./shop-side-version-2.php">Bags</a></li>
                                                                <li><a href="./shop-side-version-2.php">Wallets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Watches</a></li>
                                                                <li><a href="./shop-side-version-2.php">Sunglasses</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-9 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-3.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-4.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Women ======-->

                                                <!--====== Men ======-->
                                                <div class="mega-menu-content">

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-5.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-6.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-7.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">HOT SALE</a></li>
                                                                <li><a href="./shop-side-version-2.php">T-Shirts</a></li>
                                                                <li><a href="./shop-side-version-2.php">Tank Tops</a></li>
                                                                <li><a href="./shop-side-version-2.php">Polo</a></li>
                                                                <li><a href="./shop-side-version-2.php">Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">OUTWEAR</a></li>
                                                                <li><a href="./shop-side-version-2.php">Hoodies</a></li>
                                                                <li><a href="./shop-side-version-2.php">Trench</a></li>
                                                                <li><a href="./shop-side-version-2.php">Parkas</a></li>
                                                                <li><a href="./shop-side-version-2.php">Sweaters</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">BOTTOMS</a></li>
                                                                <li><a href="./shop-side-version-2.php">Casual Pants</a></li>
                                                                <li><a href="./shop-side-version-2.php">Cargo Pants</a></li>
                                                                <li><a href="./shop-side-version-2.php">Jeans</a></li>
                                                                <li><a href="./shop-side-version-2.php">Shorts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">UNDERWEAR</a></li>
                                                                <li><a href="./shop-side-version-2.php">Boxers</a></li>
                                                                <li><a href="./shop-side-version-2.php">Briefs</a></li>
                                                                <li><a href="./shop-side-version-2.php">Robes</a></li>
                                                                <li><a href="./shop-side-version-2.php">Socks</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">JACKETS</a></li>
                                                                <li><a href="./shop-side-version-2.php">Denim Jackets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Trucker Jackets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Windbreaker Jackets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Leather Jackets</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">SUNGLASSES</a></li>
                                                                <li><a href="./shop-side-version-2.php">Pilot</a></li>
                                                                <li><a href="./shop-side-version-2.php">Wayfarer</a></li>
                                                                <li><a href="./shop-side-version-2.php">Square</a></li>
                                                                <li><a href="./shop-side-version-2.php">Round</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">ACCESSORIES</a></li>
                                                                <li><a href="./shop-side-version-2.php">Eyewear Frames</a></li>
                                                                <li><a href="./shop-side-version-2.php">Scarves</a></li>
                                                                <li><a href="./shop-side-version-2.php">Hats</a></li>
                                                                <li><a href="./shop-side-version-2.php">Belts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title"><a href="./shop-side-version-2.php">OTHER ACCESSORIES</a></li>
                                                                <li><a href="./shop-side-version-2.php">Bags</a></li>
                                                                <li><a href="./shop-side-version-2.php">Wallets</a></li>
                                                                <li><a href="./shop-side-version-2.php">Watches</a></li>
                                                                <li><a href="./shop-side-version-2.php">Tech Accessories</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-8.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="./shop-side-version-2.php">
                                                                    <img class="u-img-fluid u-d-block" src="./assets/images/banners/banner-mega-9.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Men ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->
                                            </div>
                                        </div>
                                        <!--====== End - Mega Menu ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation2">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">
                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                    <li> <a href="./shop-side-version-2.php">New Arrivals</a></li>
                                    <li class="has-dropdown">
                                        <a>Pages<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:170px">
                                            <li class=""><a href="index.php">Home</a></li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">
                                                <a>Account<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <!--====== Dropdown ======-->
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li><a href="signin.php">Sign In</a></li>
                                                    <li><a href="signup.php">Sign Up</a></li>
                                                    <li><a href="lost-password.php">Reset Password</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">
                                                <a href="./dashboard.php">Dashboard<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li class="has-dropdown has-dropdown--ul-left-100">
                                                        <a href="./dashboard.php">Manage My Account<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                        <!--====== Dropdown ======-->
                                                        <span class="js-menu-toggle"></span>
                                                        <ul style="width:180px">
                                                            <li><a href="./dash-edit-profile.php">Edit Profile</a></li>
                                                            <li><a href="./dash-address-book.php">Edit Address Book</a></li>
                                                            <li><a href="./dash-manage-order.php">Manage Order</a></li>
                                                        </ul>
                                                        <!--====== End - Dropdown ======-->
                                                    </li>
                                                    <li><a href="./dash-my-profile.php">My Profile</a></li>
                                                    <li class="has-dropdown has-dropdown--ul-left-100">
                                                        <a href="./dash-address-book.php">Address Book<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                        <!--====== Dropdown ======-->
                                                        <span class="js-menu-toggle"></span>
                                                        <ul style="width:180px">
                                                            <li><a href="./dash-address-make-default.php">Address Make Default</a></li>
                                                            <li><a href="./dash-address-add.php">Add New Address</a></li>
                                                            <li><a href="./dash-address-edit.php">Edit Address Book</a></li>
                                                        </ul>
                                                        <!--====== End - Dropdown ======-->
                                                    </li>
                                                    <li><a href="./dash-track-order.php">Track Order</a></li>
                                                    <li><a href="./dash-my-order.php">My Orders</a></li>
                                                    <li><a href="./dash-payment-option.php">My Payment Options</a></li>
                                                    <li><a href="./dash-cancellation.php">My Returns & Cancellations</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Empty<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li><a href="./empty-search.php">Empty Search</a></li>
                                                    <li><a href="./empty-cart.php">Empty Cart</a></li>
                                                    <li><a href="./empty-wishlist.php">Empty Wishlist</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Product Details<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li><a href="./product-detail.php">Product Details</a></li>
                                                    <li><a href="./product-detail-variable.php">Product Details Variable</a></li>
                                                    <li><a href="./product-detail-affiliate.php">Product Details Affiliate</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Shop Grid Layout<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li><a href="./shop-grid-left.php">Shop Grid Left Sidebar</a></li>
                                                    <li><a href="./shop-grid-right.php">Shop Grid Right Sidebar</a></li>
                                                    <li><a href="./shop-grid-full.php">Shop Grid Full Width</a></li>
                                                    <li><a href="./shop-side-version-2.php">Shop Side Version 2</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">
                                                <a>Shop List Layout<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <!--====== Dropdown ======-->
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li><a href="./shop-list-left.php">Shop List Left Sidebar</a></li>
                                                    <li><a href="././shop-list-right.php">Shop List Right Sidebar</a></li>
                                                    <li><a href="./shop-list-full.php">Shop List Full Width</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li><a href="./cart.php">Cart</a></li>
                                            <li><a href="./wishlist.php">Wishlist</a></li>
                                            <li><a href="./checkout.php">Checkout</a></li>
                                            <li><a href="./faq.php">FAQ</a></li>
                                            <li><a href="./about.php">About us</a></li>
                                            <li><a href="./contact.php">Contact</a></li>
                                            <li><a href="./404.php">404</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li><a href="./shop-side-version-2.php">Value of the day</a></li>
                                    <li><a href="./shop-side-version-2.php">Gift Cards</a></li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation3">
                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop" type="button"></button>
                            <span class="total-item-round">2</span>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">
                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                                    <li><a href="./wishlist.php"><i class="far fa-heart"></i></a></li>
                                    <li class="has-dropdown">
                                        <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>
                                            <span class="total-item-round">2</span>
                                        </a>

                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <div class="mini-cart">
                                            <!--====== Mini Product Container ======-->
                                            <div class="mini-product-container gl-scroll u-s-m-b-15">

                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">
                                                            <a class="mini-product__link" href="./product-detail.php">
                                                                <img class="u-img-fluid" src="./assets/images/product/electronic/product3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="mini-product__info-wrapper">
                                                            <span class="mini-product__category"><a href="./shop-side-version-2.php">Electronics</a></span>
                                                            <span class="mini-product__name"><a href="./product-detail.php">Yellow Wireless Headphone</a></span>
                                                            <span class="mini-product__quantity">1 x</span>
                                                            <span class="mini-product__price">$8</span></div>
                                                    </div>
                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->

                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">
                                                            <a class="mini-product__link" href="./product-detail.php">
                                                                <img class="u-img-fluid" src="./assets/images/product/electronic/product18.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="mini-product__info-wrapper">
                                                            <span class="mini-product__category"><a href="./shop-side-version-2.php">Electronics</a></span>
                                                            <span class="mini-product__name"><a href="./product-detail.php">Nikon DSLR Camera 4k</a></span>
                                                            <span class="mini-product__quantity">1 x</span>
                                                            <span class="mini-product__price">$8</span></div>
                                                    </div>
                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->


                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">
                                                            <a class="mini-product__link" href="./product-detail.php">
                                                                <img class="u-img-fluid" src="./assets/images/product/women/product8.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="mini-product__info-wrapper">
                                                            <span class="mini-product__category"><a href="./shop-side-version-2.php">Women Clothing</a></span>
                                                            <span class="mini-product__name"><a href="./product-detail.php">New Dress D Nice Elegant</a></span>
                                                            <span class="mini-product__quantity">1 x</span>
                                                            <span class="mini-product__price">$8</span></div>
                                                    </div>

                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->

                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">
                                                            <a class="mini-product__link" href="./product-detail.php">
                                                                <img class="u-img-fluid" src="./assets/images/product/men/product8.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="mini-product__info-wrapper">
                                                            <span class="mini-product__category"><a href="./shop-side-version-2.php">Men Clothing</a></span>
                                                            <span class="mini-product__name"><a href="./product-detail.php">New Fashion D Nice Elegant</a></span>
                                                            <span class="mini-product__quantity">1 x</span>
                                                            <span class="mini-product__price">$8</span></div>
                                                    </div>

                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->
                                            </div>
                                            <!--====== End - Mini Product Container ======-->

                                            <!--====== Mini Product Statistics ======-->
                                            <div class="mini-product-stat">
                                                <div class="mini-total">
                                                    <span class="subtotal-text">SUBTOTAL</span>
                                                    <span class="subtotal-value">$16</span>
                                                </div>
                                                <div class="mini-action">
                                                    <a class="mini-link btn--e-brand-b-2" href="./checkout.php">PROCEED TO CHECKOUT</a>
                                                    <a class="mini-link btn--e-transparent-secondary-b-2" href="./cart.php">VIEW CART</a>
                                                </div>
                                            </div>
                                            <!--====== End - Mini Product Statistics ======-->
                                        </div>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->