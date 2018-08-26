<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Opensea</title>
    <meta name="description" content="Opensea" />
    <meta name="author" content="Luu Hoang" />

    <link rel="icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./images/apple-touch-icon.png">

    <!-- JS-->
    <script src="./js/home.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="search">
                    <!-- <div class="icon"><i class="fa fa-search"></i></div> -->
                    <div class="icon">
                        <img src="./images/home_search_icon.png">
                    </div>
                    <input type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="logo">
                    <img src="./images/logo.png">
                </div>
            </div>
            <div class="col-md-4">
                <div class="langs">
                    <div class="en">Eng</div>
                    <div class="vertical-line"></div>
                    <div class="vi">Vie</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container"> -->
<!-- Nav -->
<nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse navbar-light" id="navBar" style="">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bonbon.html">BONBON CITY TOUR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rewind.html">VIETNAM REWIND</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CART <span class="amount">(10)</span></a>
            </li>
        </ul>
    </div>
</nav>
<!-- /nav -->
<!-- </div> -->

<!-- Banner -->
<div class="banner">
    <!-- <img src="./images/home_banner_bg.png"> -->
    <!-- Operator -->
    <div class="container">
        <div class="operator">
            <!-- <img src="./images/.png"> -->
            <div class="header-1">Premier Travel Operator</div>
            <div class="header-2">travel with us for hand-crafted itineraries and<br>unparalled access to Vietnam</div>
            <div class="see-more"><div class="inner"><i class="fa fa-chevron-down"></i></div></div>
        </div>
    </div>
    <!-- /.operator -->
</div>
<!-- /.banner -->

<!-- Main content -->
<main>
    <!-- About us -->
    <section class="about-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="image-1">
                        <img src="./images/home_aboutus_img1.png">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="text">
                        <div class="header-1">About us</div>
                        <div class="content">
                            <span class="opensea">OPENSEA</span> is a young, dynamic travel company<br>that provide services catering to inbound tourist's<br>most popular demands: dining, accommodation,<br>transportation, and entertainment experiences.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6 col-xs-12">
                    <div class="image-2">
                        <img src="./images/home_aboutus_img2.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.about-us -->

    <!-- Journeys -->
    <section class="journeys">
        <div class="header">Our popular journeys</div>
        <div class="journey" id="bonbon">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-xl-3 offset-xl-2">
                    <div class="text">
                        <div class="header-1">BONBON CITY TOUR</div>
                        <div class="header-2">travel with us</div>
                        <div class="see-more">
                            <button>MORE</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-xl-7">
                    <div class="image">
                        <img src="./images/home_journeys_bonbon.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="journey" id="rewind">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="image">
                        <img src="./images/home_journeys_rewind.png">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-5">
                    <div class="text">
                        <div class="header-1">VIETNAM REWIND</div>
                        <div class="header-2">explore with us</div>
                        <div class="see-more">
                            <button>MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.journeys -->

    <!-- Count -->
    <section class="count">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item" id="count-bonbon">
                        <div class="header-1">0</div>
                        <div class="header-2">BonBon<br>kilometers</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item" id="count-customers">
                        <div class="header-1">0</div>
                        <div class="header-2">happy<br>customer</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item" id="count-tours">
                        <div class="header-1">0</div>
                        <div class="header-2">joinful<br>tours</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.count -->

    <!-- Join us -->
    <section class="join-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image">
                        <img src="./images/home_joinus.png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <div class="header-1">Join us</div>
                        <div class="underline"></div>
                        <div class="header-2">Subscribe to our newsletter</div>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="email" name="email">
                                </div>
                                <div class="col-md-12">
                                    <button class="submit" type="submit">subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.join-us -->
</main>
<!-- /main -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact">
                    <div class="header_1">CONTACT US</div>
                    <div class="tel">Tel: <span>(+84) 1234567890</span></div>
                    <div class="email">Email: <span>info@opensea.net</span></div>
                </div>
            </div>
            <div class="wrap col-md-4">
                <div class="find-us">
                    <span>Find us on</span>
                    <img src="./images/footer_fb.png" id="fb">
                    <img src="./images/footer_instagram.png" id="instagram">
                    <img src="./images/footer_youtube.png" id="youtube">
                </div>
            </div>
            <div class="wrap col-md-4">
                <div class="address">
                    <div class="header_1">OPENSEA TOURISM AND SERVICES COMPANY</div>
                    <div class="content">12 Ngo Tram Str, Hoan Kiem Dist., Hanoi, Vietnam</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->
</body>
