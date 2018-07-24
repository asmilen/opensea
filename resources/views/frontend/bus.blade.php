<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1.0, user-scalable=no">

    <title>OpenSea Demo</title>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Web Starter Kit">
    <!-- <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png"> -->

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <!-- <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png"> -->

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <!-- <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png"> -->
    <!-- <meta name="msapplication-TileColor" content="#2F3BA2"> -->

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#2F3BA2">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Theme styles -->
    <link rel="stylesheet" href="frontend/dist/css/bus.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1367px)" href="frontend/dist/css/bus_min_1367px.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 1024px)" href="frontend/dist/css/bus_max_1024px.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 768px)" href="frontend/dist/css/bus_max_768px.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="frontend/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="plugins/iCheck/flat/blue.css"> -->

    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<!-- Main -->
<div class="main">
    <!-- Header -->
    <div class="header">
        <span><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Hotline (+84) 9292392392&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;TIẾNG VIỆT</span>
    </div>
    <!-- /.header -->

    <!-- Navigation bar -->
    <div class="navigation-bar relative">
        <img class="logo" src="frontend/dist/img/logo.gif" alt="logo">
        <div class="icon">
            <div class="icon-line"></div>
            <div class="icon-line"></div>
            <div class="icon-line"></div>
        </div>
        <a class="item" href="/">
            HOME
            <div class="underline"></div>
        </a>
        <a class="item active" href="#">
            HOP ON HOP OFF
            <div class="underline"></div>
        </a>
        <a class="item" href="/tour">
            HANOI RETREAT
            <div class="underline"></div>
        </a>
        <a class="item" href="#">
            FAQ
            <div class="underline"></div>
        </a>
        <a class="shopping-cart" href="#">
            <i class="fa fa-shopping-cart"></i><span class="label">CART</span><span class="amount">(0)</span>
            <div class="underline"></div>
        </a>
    </div>
    <!-- /.navigation-bar -->

    <!-- Contents -->
    <div class="contents">
        <!-- Banner -->
        <section class="banner">
            <img class="small" src="frontend/dist/img/bus-banner-small.png" alt="banner">
            <img class="medium" src="frontend/dist/img/bus-banner-medium.png" alt="banner">
            <div class="text">&#x2DD;Bon anywhere. Bon anytime&#x2F6;</div>
        </section>
        <!-- /.banner -->

        <!-- Intro video -->
        <section class="intro-video row">
            <div class="title col-md-12 col-xs-12">It's time to BonBon</div>
            <div class="video col-md-6 col-xs-6">
                <img src="frontend/dist/img/bus-video.png">
            </div>
            <div class="text col-md-6 col-xs-6">
                <p>Embark on your own adventure with Hanoi's One and Only Bon Bon city Tours. Our flexible city sightseeing tours allow you to soak up the city's history and atmosphere with ease. Hop on any of our unique buses from 10+ Bon Bon stops, conveniently located close to famous landmarks and attractions. You can hop off the bus to explore as often as you wish, and rejoin the tour once you're ready.</p>
                <p>Buses arrive at each stop every 30 minutes, so you can quickly rejoin the tour whenever you like. Our 3 bus routes have been carefully planned to ensure that you'll capture all the best sights of Hanoi including Hanoi Opera House, Long Bien Bridge, Van Mieu, Imperial Citadel of Thang Long. With our curated tickets of 24 and 48 hours, you can upgrade to excellent combo tickets that include admission to our exclusive museums, attractions as well as cuisine services.</p>
            </div>
        </section>
        <!-- /.intro-video -->

        <!-- Tickets -->
        <section class="tickets">
            <div class="title">
                <div class="header_1">Tickets</div>
                <div class="header_2">More than a ticket, your entrance to our every own Hanoi</div>
            </div>
            <!-- <div class="list">
                <div class="list-item">
                    <div class="image">
                        <img src="frontend/dist/img/tour-image.png">
                    </div>
                    <div class="info">
                        <div class="title">CLASSIC PACKAGE</div>
                        <div class="underline"></div>
                        <ul class="descriptions">
                            <li class="desc">24h BonBon City Tour Bus</li>
                            <li class="desc">10% off Hanoi Retreat</li>
                            <li class="desc">3 exclusive partners's coupons</li>
                        </ul>
                        <div class="prices">
                            <div class="adult price">
                                <div class="type">Adult</div>
                                <div class="number">350.000</div>
                            </div>
                            <div class="child price">
                                <div class="type">Child</div>
                                <div class="number">250.000</div>
                            </div>
                            <div class="family price">
                                <div class="type">Family</div>
                                <div class="number">999.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="more-info">
                        <button>MORE INFO</button>
                    </div>
                </div>
                <div class="list-item">
                    <div class="image">
                        <img src="frontend/dist/img/tour-image.png">
                    </div>
                    <div class="info">
                        <div class="title">PREMIUM PACKAGE</div>
                        <div class="underline"></div>
                        <ul class="descriptions">
                            <li class="desc">24h BonBon City Tour Bus</li>
                            <li class="desc">15% off Hanoi Retreat</li>
                            <li class="desc">3 exclusive attractions pass</li>
                            <li class="desc">3 exclusive partners's coupons</li>
                        </ul>
                        <div class="prices">
                            <div class="adult price">
                                <div class="type">Adult</div>
                                <div class="number">350.000</div>
                            </div>
                            <div class="child price">
                                <div class="type">Child</div>
                                <div class="number">250.000</div>
                            </div>
                            <div class="family price">
                                <div class="type">Family</div>
                                <div class="number">999.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="more-info">
                        <button>MORE INFO</button>
                    </div>
                </div>
                <div class="list-item">
                    <div class="image">
                        <img src="frontend/dist/img/tour-image.png">
                    </div>
                    <div class="info">
                        <div class="title">DELUXE PACKAGE</div>
                        <div class="underline"></div>
                        <ul class="descriptions">
                            <li class="desc">24h BonBon City Tour Bus</li>
                            <li class="desc">20% off Hanoi Retreat</li>
                            <li class="desc">All-you-can-have attractions pass</li>
                            <li class="desc">Exclusive partners's coupons</li>
                        </ul>
                        <div class="prices">
                            <div class="adult price">
                                <div class="type">Adult</div>
                                <div class="number">350.000</div>
                            </div>
                            <div class="child price">
                                <div class="type">Child</div>
                                <div class="number">250.000</div>
                            </div>
                            <div class="family price">
                                <div class="type">Family</div>
                                <div class="number">999.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="more-info">
                        <button>MORE INFO</button>
                    </div>
                </div>
            </div> -->

            <!-- Carousel -->
            <div class="list carousel slide" id="tickets" data-ride="carousel" data-interval="false">
                <div class="inner carousel-inner">
                    <!-- <div class="list-item item active">
                        <div class="image">
                            <img src="frontend/dist/img/tour-image.png">
                        </div>
                        <div class="info">
                            <div class="title">CLASSIC PACKAGE</div>
                            <div class="underline"></div>
                            <ul class="descriptions">
                                <li class="desc">24h BonBon City Tour Bus</li>
                                <li class="desc">10% off Hanoi Retreat</li>
                                <li class="desc">3 exclusive partners's coupons</li>
                            </ul>
                            <div class="prices">
                                <div class="adult price">
                                    <div class="type">Adult</div>
                                    <div class="number">350.000</div>
                                </div>
                                <div class="child price">
                                    <div class="type">Child</div>
                                    <div class="number">250.000</div>
                                </div>
                                <div class="family price">
                                    <div class="type">Family</div>
                                    <div class="number">999.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info">
                            <button>MORE INFO</button>
                        </div>
                    </div>
                    <div class="list-item item">
                        <div class="image">
                            <img src="frontend/dist/img/tour-image.png">
                        </div>
                        <div class="info">
                            <div class="title">PREMIUM PACKAGE</div>
                            <div class="underline"></div>
                            <ul class="descriptions">
                                <li class="desc">24h BonBon City Tour Bus</li>
                                <li class="desc">15% off Hanoi Retreat</li>
                                <li class="desc">3 exclusive attractions pass</li>
                                <li class="desc">3 exclusive partners's coupons</li>
                            </ul>
                            <div class="prices">
                                <div class="adult price">
                                    <div class="type">Adult</div>
                                    <div class="number">350.000</div>
                                </div>
                                <div class="child price">
                                    <div class="type">Child</div>
                                    <div class="number">250.000</div>
                                </div>
                                <div class="family price">
                                    <div class="type">Family</div>
                                    <div class="number">999.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info">
                            <button>MORE INFO</button>
                        </div>
                    </div>
                    <div class="list-item item">
                        <div class="image">
                            <img src="frontend/dist/img/tour-image.png">
                        </div>
                        <div class="info">
                            <div class="title">DELUXE PACKAGE</div>
                            <div class="underline"></div>
                            <ul class="descriptions">
                                <li class="desc">24h BonBon City Tour Bus</li>
                                <li class="desc">20% off Hanoi Retreat</li>
                                <li class="desc">All-you-can-have attractions pass</li>
                                <li class="desc">Exclusive partners's coupons</li>
                            </ul>
                            <div class="prices">
                                <div class="adult price">
                                    <div class="type">Adult</div>
                                    <div class="number">350.000</div>
                                </div>
                                <div class="child price">
                                    <div class="type">Child</div>
                                    <div class="number">250.000</div>
                                </div>
                                <div class="family price">
                                    <div class="type">Family</div>
                                    <div class="number">999.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info">
                            <button>MORE INFO</button>
                        </div>
                    </div>	 -->
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#tickets" data-slide="prev">
                    <i class="fa fa-chevron-circle-left"></i>
                </a>
                <a class="right carousel-control" href="#tickets" data-slide="next">
                    <i class="fa fa-chevron-circle-right"></i>
                </a>

                <ol class="carousel-indicators">
                    <!-- <li data-target="#tickets" data-slide-to="0" class="active"></li> -->
                    <!-- <li data-target="#tickets" data-slide-to="1"></li> -->
                    <!-- <li data-target="#tickets" data-slide-to="2"></li> -->
                </ol>
            </div>

            <!-- /.carousel -->

            <div class="other-info">
                <div class="info">*Save 10%/20k by buying your tickets online</div>
            </div>
        </section>
        <!-- /.tickets -->

        <!-- Highlights -->
        <section class="highlights">
            <div class="title">
                <div class="header_1">Highlights</div>
                <div class="header_2">What's on the way? Are you ready for this?</div>
            </div>
            <div class="grid">
                <div class="col" id="col1">
                    <div class="panel ticket row1">
                        <div class="icon">
                            <i class="fa fa-ticket"></i>
                        </div>
                        <div class="right">
                            <div class="title">HOP ON HOP OFF TICKET</div>
                            <div class="abstract">Explore the city at your own page with our flexibility</div>
                        </div>
                        <div class="content collapse">Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.</div>
                        <div class="arrow down"><i class="fa fa-angle-down"></i></div>
                    </div>

                    <div class="panel wifi row2">
                        <div class="icon">
                            <i class="fa fa-wifi"></i>
                        </div>
                        <div class="right">
                            <div class="title">FREE ON BOARD WIFI</div>
                            <div class="abstract">Get connected as you tour around the city</div>
                        </div>
                        <div class="content collapse">Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.</div>
                        <div class="arrow down"><i class="fa fa-angle-down"></i></div>
                    </div>

                    <div class="panel wifi row3">
                        <div class="icon">
                            <i class="fa fa-wifi"></i>
                        </div>
                        <div class="right">
                            <div class="title">FREE ON BOARD WIFI</div>
                            <div class="abstract">Get connected as you tour around the city</div>
                        </div>
                        <div class="content collapse">Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.</div>
                        <div class="arrow down"><i class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="col" id="col2">
                    <div class="panel service row1">
                        <div class="icon">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="right">
                            <div class="title">MAXIMUM SERVICE<br>AT BEST PRICE</div>
                            <div class="abstract">It's all inclusive with no extra fee</div>
                        </div>
                        <div class="content collapse">Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.</div>
                        <div class="arrow down"><i class="fa fa-angle-down"></i></div>
                    </div>

                    <div class="panel departure row2">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="right">
                            <div class="title">DEPARTURE POINTS</div>
                            <div class="abstract">Conveniently located so you can see the best of Hanoi</div>
                        </div>
                        <div class="content collapse">Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.</div>
                        <div class="arrow down"><i class="fa fa-angle-down"></i></div>
                    </div>

                    <div class="panel app row3">
                        <div class="icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <div class="right">
                            <div class="title">PRE-RECORDER APP</div>
                            <div class="abstract">Complimentary available in 2 languages on all tours</div>
                        </div>
                        <div class="content collapse">Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.</div>
                        <div class="arrow down"><i class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="col" id="col3">
                    <div class="how-it-work">
                        <div class="head">HOW IT WORK?</div>

                        <div class="browse item">
                            <div class="icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="right-content">
                                <div class="description">Find the best ticket for your trip</div>
                                <div class="link">BROWSE YOUR TICKET</div>
                            </div>
                        </div>

                        <div class="vertical-dash"></div>

                        <div class="book item">
                            <div class="icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="right-content">
                                <div class="description">Buy online<br>download your e-tickets</div>
                                <div class="link">BOOK NOW</div>
                            </div>
                        </div>

                        <div class="vertical-dash"></div>

                        <div class="ticket item">
                            <div class="icon">
                                <i class="fa fa-ticket"></i>
                            </div>
                            <div class="right-content">
                                <div class="description">Show your ticket to start the tour</div>
                                <div class="link">ON THE DAY</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.highlights -->

        <!-- Route -->
        <section class="route row">
            <div class="header_1 col-xs-12 col-md-12">BonBon Route</div>
            <div class="header_2 col-xs-12 col-md-12">Born this way</div>
            <div class="map col-xs-12 col-md-12">
                <img src="frontend/dist/img/bus-map.png">
                <button>DOWNLOAD MAP</button>
            </div>
        </section>
        <!-- /.route -->

        <!-- Attractions -->
        <div class="attractions">
            <div class="title">
                <div class="header_1">Hanoi Attractions</div>
                <div class="header_2">The not-so-litle gems of our route. Presenting Hanoi's proudest</div>
            </div>
            <div class="list carousel slide" id="attractions"  data-ride="carousel" data-interval="false">
                <div class="inner carousel-inner">
                    <div class="list-item item">
                        <div class="image">
                            <img src="frontend/dist/img/bus-attraction.png">
                        </div>
                        <div class="info">
                            <div class="title">HANOI'S SECRETS</div>
                            <div class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
                        </div>
                        <div class="see-more"><button>SEE MORE</button></div>
                    </div>
                    <div class="list-item item">
                        <div class="image">
                            <img src="frontend/dist/img/bus-attraction.png">
                        </div>
                        <div class="info">
                            <div class="title">HANOI'S SECRETS</div>
                            <div class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
                        </div>
                        <div class="see-more"><button>SEE MORE</button></div>
                    </div>
                    <div class="list-item item">
                        <div class="image">
                            <img src="frontend/dist/img/bus-attraction.png">
                        </div>
                        <div class="info">
                            <div class="title">HANOI'S SECRETS</div>
                            <div class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
                        </div>
                        <div class="see-more"><button>SEE MORE</button></div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#attractions" data-slide="prev">
                    <i class="fa fa-chevron-circle-left"></i>
                </a>
                <a class="right carousel-control" href="#attractions" data-slide="next">
                    <i class="fa fa-chevron-circle-right"></i>
                </a>

                <ol class="carousel-indicators">
                    <!-- <li data-target="#attractions" data-slide-to="0" class="active"></li> -->
                    <!-- <li data-target="#attractions" data-slide-to="1"></li> -->
                    <!-- <li data-target="#attractions" data-slide-to="2"></li> -->
                </ol>
            </div>
            <div class="button"><button>LET'S BON BON TOGETHER</button></div>
        </div>
        <!-- /.attractions -->

        <!-- Testinomial -->
        <section class="testinomial">
            <div class="title">
                <div class="header_1">Happy Customers</div>
                <div class="header_2">Why only hear from us? Let's check more from our friends...</div>
            </div>
            <div class="list" id="happy-customers" data-ride="carousel" data-interval="false">
                <div class="inner">
                    <div class="item active" id="0">
                        <div class="avatar"><img src="frontend/dist/img/bus-testi.png"></div>
                        <div class="testinomial-info">
                            <div class="name">Ong Nguyen Van A</div>
                            <div class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
                        </div>
                    </div>
                    <div class="vertical-bar"></div>
                    <div class="item" id="1">
                        <div class="avatar"><img src="frontend/dist/img/bus-testi.png"></div>
                        <div class="testinomial-info">
                            <div class="name">Ong Nguyen Van Hung</div>
                            <div class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
                        </div>
                    </div>
                    <div class="vertical-bar"></div>
                    <div class="item" id="2">
                        <div class="avatar"><img src="frontend/dist/img/bus-testi.png"></div>
                        <div class="testinomial-info">
                            <div class="name">Ong Nguyen Van Hung</div>
                            <div class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
                        </div>
                    </div>
                </div>


                <!-- Left and right controls -->
                <a class="left carousel-control" href="#happy-customers" data-slide="prev">
                    <i class="fa fa-chevron-circle-left"></i>
                </a>
                <a class="right carousel-control" href="#happy-customers" data-slide="next">
                    <i class="fa fa-chevron-circle-right"></i>
                </a>

                <ol class="carousel-indicators">
                    <li data-target="#happy-customers" data-slide-to="0" class="active"></li>
                    <li data-target="#happy-customers" data-slide-to="1"></li>
                    <li data-target="#happy-customers" data-slide-to="2"></li>
                </ol>
            </div>
        </section>
        <!-- /.testinomial -->
    </div>
    <!-- /.contents -->

    <!-- Get in touch -->
    <div class="get-in-touch">
        <div class="title">Get in touch</div>
        <form class="large">
            <ul>
                <div class="name input left">
                    <label>NAME:</label><br>
                    <input type="text" name="name">
                    <div class="line"></div>
                </div>
                <div class="message input right">
                    <label>MESSAGE:</label>
                    <br>
                    <textarea rows="4"></textarea>
                </div>
                <div class="phone input  left">
                    <label>PHONE NUMBER:</label><br>
                    <input type="text" name="phone">
                    <div class="line"></div>
                </div>

                <div class="email input left">
                    <label>EMAIL:</label><br>
                    <input type="email" name="email">
                    <div class="line"></div>
                </div>
                <div class="submit"><button type="submit" class="right">SEND</button></div>

            </ul>
        </form>
        <form class="responsive">
            <ul>
                <div class="name input left">
                    <label>NAME:</label><br>
                    <input type="text" name="name">
                    <div class="line"></div>
                </div>

                <div class="phone input  left">
                    <label>PHONE NUMBER:</label><br>
                    <input type="text" name="phone">
                    <div class="line"></div>
                </div>

                <div class="email input left">
                    <label>EMAIL:</label><br>
                    <input type="email" name="email">
                    <div class="line"></div>
                </div>
                <div class="message input right">
                    <label>MESSAGE:</label>
                    <br>
                    <textarea rows="4"></textarea>
                </div>
                <button type="submit" class="right">SEND</button>
            </ul>
        </form>
    </div>
    <!-- /.get-in-touch -->

    <!-- Footer -->
    <div class="footer">
        <div class="address">
            <span id="company">OPENSEA TOURISM AND SERVICES COMPANY</span><br>
            <span id="address">12 Ngo Tram Str, Hoan Kiem dis, Ha Noi, Vietnam</span><br>
            <div id="fb"><img src="frontend/dist/img/fb-icon.png">&nbsp;Find us on Facebook</div>
        </div>
        <div class="contact">
            <div id="contact-us">CONTACT US:</div>
            <span id="tel">Tel: (+84) 23232332323</span><br>
            <span id="cell">Cell: (+84) 23232323232</span><br>
            <span id="email">Email: info@opensea.net</span>
        </div>
        <div class="fb"><img src="frontend/dist/img/fb-icon.png">&nbsp;Find us on Facebook</div>
        <div class="copyright">Copyright@Opensea Vietnam Inc. All Right Reserved</div>
    </div>
    <!-- /.footer -->
</div>
<!-- /.main -->

<!-- Popup background -->
<div class="popup-background">
</div>
<!-- /.popup-background -->

<!-- Attraction popup -->
<div class="attraction-popup">
    <div id="attraction-popup" class="list carousel slide" data-ride="carousel" data-interval="false">
        <div class="inner carousel-inner">
            <div class="item active" id="0">
                <div class="image"><img src="frontend/dist/img/bus_attraction_popup_image.png"></div>

                <div class="title">
                    <div class="header_1">IMPERCIAL CITADEL<br> OF THANG LONG</div>
                    <div class="underline"></div>
                </div>

                <div class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
            </div>

            <div class="item" id="1">
                <div class="image"><img src="frontend/dist/img/bus_attraction_popup_image.png"></div>

                <div class="title">
                    <div class="header_1">IMPERCIAL CITADEL<br> OF THANG LONG</div>
                    <div class="underline"></div>
                </div>

                <div class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
            </div>
            <div class="item" id="2">
                <div class="image"><img src="frontend/dist/img/bus_attraction_popup_image.png"></div>

                <div class="title">
                    <div class="header_1">IMPERCIAL CITADEL<br> OF THANG LONG</div>
                    <div class="underline"></div>
                </div>

                <div class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#attraction-popup" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#attraction-popup" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>

        <div class="close"><i class="fa fa-times"></i></div>
    </div>

</div>
<!-- /.attraction-popup -->

<!-- Ticket popup -->
<div id="ticket-popup" class="ticket-popup carousel slide" data-ride="carousel" data-interval="false">
    <div class="inner carousel-inner">
        <div class="item active" id="0">
            <div class="banner">
                <div class="image">
                    <img src="frontend/dist/img/bus-banner.png">
                </div>
                <div class="header_1">CLASSIC PACKAGE</div>
            </div>
            <div class="content">
                <div class="ticket-prices row">
                    <div class="prices col-md-3 col-xs-6">
                        <div class="item">
                            <div class="target">ADULT</div>
                            <div class="cost"><span class="number">350.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                        <div class="item">
                            <div class="target">CHILD</div>
                            <div class="cost"><span class="number">250.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                        <div class="item">
                            <div class="target">FAMILY</div>
                            <div class="cost"><span class="number">999.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                    </div>

                    <div class="my-ticket col-md-8 col-xs-6">
                        <div class="title">Your tickets</div>
                        <div class="row">
                            <div class="item col-md-4">
                                <span>Adult</span>&nbsp;
                                <input type="number" max="5" min="1" name="adult">
                            </div>
                            <div class="item col-md-4">
                                <span>Child</span>&nbsp;
                                <input type="number" max="5" min="1" name="adult">
                            </div>
                            <div class="item col-md-4">
                                <span>Family</span>&nbsp;
                                <input type="number" max="5" min="1" name="adult">
                            </div>
                        </div>
                        <div class="sub-total row">
                            <div class="title col-md-5">SUB-TOTAL:</div>
                            <div class="cost col-md-7"><span class="number">124.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                    </div>
                </div>

                <div class="descriptions row">
                    <div class="item col-md-5">
                        <div class="icon"><i class="fa fa-ticket"></i></div>
                        <div class="text">Use your ticket anyday within 6 months</div>
                    </div>
                    <div class="item col-md-3">
                        <div class="icon"><i class="fa fa-hand-pointer-o"></i></div>
                        <div class="text">Exclusive online offers</div>
                    </div>
                    <div class="item col-md-4">
                        <div class="icon"><i class="fa fa-shield"></i></div>
                        <div class="text">Safe and Secure Checkout</div>
                    </div>
                </div>

                <div class="highlight">
                    <div class="title">Highlights</div>

                    <div class="list row">
                        <div class="item col-md-6">
                            <div class="icon"><i class="fa fa-clock-o"></i></div>
                            <div class="text">Bon Bon City Tour for 24 hours</div>
                        </div>
                        <div class="item col-md-6">
                            <div class="icon"><i class="fa fa-certificate"></i></div>
                            <div class="text">10% off Hanoi Retreat Packages</div>
                        </div>
                        <div class="item col-md-6">
                            <div class="icon"><i class="fa fa-tags"></i></div>
                            <div class="text">3 exclusive partners coupons</div>
                        </div>
                        <div class="item col-xs-6">
                            <div class="icon"><i class="fa fa-home"></i></div>
                            <div class="text">3 exclusive attractions passes</div>
                        </div>
                    </div>
                </div>

                <div class="add-to-cart">
                    <button>ADD TO CART</button>
                </div>
            </div>


        </div>

        <div class="item" id="1">
            <div class="banner">
                <div class="image">
                    <img src="frontend/dist/img/bus-banner.png">
                </div>
                <div class="header_1">CLASSIC PACKAGE</div>
            </div>
            <div class="content">
                <div class="ticket-prices row">
                    <div class="prices col-md-3 col-xs-6">
                        <div class="item">
                            <div class="target">ADULT</div>
                            <div class="cost"><span class="number">350.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                        <div class="item">
                            <div class="target">CHILD</div>
                            <div class="cost"><span class="number">250.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                        <div class="item">
                            <div class="target">FAMILY</div>
                            <div class="cost"><span class="number">999.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                    </div>

                    <div class="my-ticket col-md-8 col-xs-6">
                        <div class="title">Your tickets</div>
                        <div class="row">
                            <div class="item col-md-4">
                                <span>Adult</span>&nbsp;
                                <input type="number" max="5" min="1" name="adult">
                            </div>
                            <div class="item col-md-4">
                                <span>Child</span>&nbsp;
                                <input type="number" max="5" min="1" name="adult">
                            </div>
                            <div class="item col-md-4">
                                <span>Family</span>&nbsp;
                                <input type="number" max="5" min="1" name="adult">
                            </div>
                        </div>
                        <div class="sub-total row">
                            <div class="title col-md-5">SUB-TOTAL:</div>
                            <div class="cost col-md-7"><span class="number">124.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                    </div>
                </div>

                <div class="descriptions row">
                    <div class="item col-md-5">
                        <div class="icon"><i class="fa fa-ticket"></i></div>
                        <div class="text">Use your ticket anyday within 6 months</div>
                    </div>
                    <div class="item col-md-3">
                        <div class="icon"><i class="fa fa-hand-pointer-o"></i></div>
                        <div class="text">Exclusive online offers</div>
                    </div>
                    <div class="item col-md-4">
                        <div class="icon"><i class="fa fa-shield"></i></div>
                        <div class="text">Safe and Secure Checkout</div>
                    </div>
                </div>

                <div class="highlight">
                    <div class="title">Highlights</div>

                    <div class="list row">
                        <div class="item col-md-6">
                            <div class="icon"><i class="fa fa-clock-o"></i></div>
                            <div class="text">Bon Bon City Tour for 24 hours</div>
                        </div>
                        <div class="item col-md-6">
                            <div class="icon"><i class="fa fa-certificate"></i></div>
                            <div class="text">10% off Hanoi Retreat Packages</div>
                        </div>
                        <div class="item col-md-6">
                            <div class="icon"><i class="fa fa-tags"></i></div>
                            <div class="text">3 exclusive partners coupons</div>
                        </div>
                        <div class="item col-xs-6">
                            <div class="icon"><i class="fa fa-home"></i></div>
                            <div class="text">3 exclusive attractions passes</div>
                        </div>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button>ADD TO CART</button>
                </div>
            </div>
        </div>

        <div class="item" id="2">
            <div class="banner">
                <div class="image">
                    <img src="frontend/dist/img/bus-banner.png">
                </div>
                <div class="header_1">CLASSIC PACKAGE</div>
            </div>
            <div class="content">
                <div class="ticket-prices row">
                    <div class="prices col-md-3 col-xs-6">
                        <div class="item">
                            <div class="target">ADULT</div>
                            <div class="cost"><span class="number">350.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                        <div class="item">
                            <div class="target">CHILD</div>
                            <div class="cost"><span class="number">250.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                        <div class="item">
                            <div class="target">FAMILY</div>
                            <div class="cost"><span class="number">999.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                    </div>

                    <div class="my-ticket col-md-8 col-xs-6">
                        <div class="title">Your tickets</div>
                        <div class="row">
                            <div class="item col-md-4">
                                <span>Adult</span>&nbsp;
                                <input type="number" max="5" min="1" name="adult">
                            </div>
                            <div class="item col-md-4">
                                <span>Child</span>&nbsp;
                                <input type="number" max="5" min="1" name="adult">
                            </div>
                            <div class="item col-md-4">
                                <span>Family</span>&nbsp;
                                <input type="number" max="5" min="1" name="adult">
                            </div>
                        </div>
                        <div class="sub-total row">
                            <div class="title col-md-5">SUB-TOTAL:</div>
                            <div class="cost col-md-7"><span class="number">124.000</span> <span class="currency">VNĐ</span></div>
                        </div>
                    </div>
                </div>

                <div class="descriptions row">
                    <div class="item col-md-5">
                        <div class="icon"><i class="fa fa-ticket"></i></div>
                        <div class="text">Use your ticket anyday within 6 months</div>
                    </div>
                    <div class="item col-md-3">
                        <div class="icon"><i class="fa fa-hand-pointer-o"></i></div>
                        <div class="text">Exclusive online offers</div>
                    </div>
                    <div class="item col-md-4">
                        <div class="icon"><i class="fa fa-shield"></i></div>
                        <div class="text">Safe and Secure Checkout</div>
                    </div>
                </div>

                <div class="highlight">
                    <div class="title">Highlights</div>

                    <div class="list row">
                        <div class="item col-md-6">
                            <div class="icon"><i class="fa fa-clock-o"></i></div>
                            <div class="text">Bon Bon City Tour for 24 hours</div>
                        </div>
                        <div class="item col-md-6">
                            <div class="icon"><i class="fa fa-certificate"></i></div>
                            <div class="text">10% off Hanoi Retreat Packages</div>
                        </div>
                        <div class="item col-md-6">
                            <div class="icon"><i class="fa fa-tags"></i></div>
                            <div class="text">3 exclusive partners coupons</div>
                        </div>
                        <div class="item col-xs-6">
                            <div class="icon"><i class="fa fa-home"></i></div>
                            <div class="text">3 exclusive attractions passes</div>
                        </div>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button>ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#ticket-popup" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="right carousel-control" href="#ticket-popup" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>

    <div class="close"><i class="fa fa-times"></i></div>
</div>
<!-- /.ticket-popup -->

<!-- Content -->
<script src="frontend/dist/js/bus_data.js"></script>
<script src="frontend/dist/js/bus.js"></script>
<!-- UI -->
{{--<script src="frontend/dist/js/bus_ui.js"></script>--}}
</body>
</html>