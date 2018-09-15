<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Opensea</title>
    <meta name="description" content="Opensea" />
    <meta name="author" content="Luu Hoang" />

    <link rel="icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./images/apple-touch-icon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/fonts.css" type='text/css'>
    <link rel="stylesheet" href="./css/main.css" type='text/css'>
    <link rel="stylesheet" href="./css/header.css" type='text/css'>
    <link rel="stylesheet" href="./css/nav.css" type='text/css'>
    <link rel="stylesheet" href="./css/footer.css" type='text/css'>
    <link rel="stylesheet" href="./css/home.css" type='text/css'>

    <!-- JS-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/persist-js@0.3.1/src/persist.min.js"></script>
    <script src="../plugins/jquery/jquery-3.3.1.min.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

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
                <!-- <div class="search">
                  <div class="icon">
                    <img src="./images/home_search_icon.png">
                  </div>
                  <input type="text">
                </div> -->
            </div>
            <div class="col-md-4">
                <div class="logo">
                    <img src="./images/opensea_logo.svg">
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
@include('frontend.common.navbar')
<!-- /nav -->
<!-- </div> -->

<!-- Banner -->
<div class="banner">
    <!-- <img src="./images/home_banner_bg.png"> -->
    <!-- Operator -->
    <div class="container">
        <div class="operator">
            <div class="filter"></div>
            <!-- <img src="./images/.png"> -->
            <div class="header-1 poster-font">Premier Travel Operator</div>
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
                        <img src="./images/Home-02.jpg">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="text">
                        <div class="header-1 poster-font">About us</div>
                        <div class="content">
                            <span class="opensea">OPENSEA</span> is a young, dynamic travel company<br>that provide services catering to inbound tourist's<br>most popular demands: dining, accommodation,<br>transportation, and entertainment experiences.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6 col-xs-12">
                    <div class="image-2">
                        <img src="./images/Home-03.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.about-us -->

    <!-- Journeys -->
    <section class="journeys">
        <div class="header poster-font">Our popular journeys</div>
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
                        <img src="./images/Home-04.png">
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
                        <div class="header-2 poster-font">Bonbon<br>kilometers</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item" id="count-customers">
                        <div class="header-1">0</div>
                        <div class="header-2 poster-font">happy<br>customer</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item" id="count-tours">
                        <div class="header-1">0</div>
                        <div class="header-2 poster-font">joinful<br>tours</div>
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
                        <div class="header-1 poster-font">Join us</div>
                        <div class="underline"></div>
                        <div class="header-2">Subscribe to our newsletter</div>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="email" name="email" placeholder="Your email">
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
            <div class="col-md-3">
                <div class="contact">

                    <div class="header_1">CONTACT US</div>
                    <div class="tel">Tel: <span>(+84) 12 1536 3297</span></div>
                    <div class="email">Email: <span>info@opensea.net</span></div>
                </div>
            </div>
            <div class="wrap col-md-2">
                <div style="text-align: left;font-family: 'GothamRoundedBook';font-size: 12px;line-height: 14px;">
                    <div style="font-family: 'GothamRoundedBold';    font-size: 16px;line-height: 20px;">CHÍNH SÁCH</div>
                    <div> <a href="general_policy.html" style="color: white">Quy định chính sách chung</a></div>
                    <div> <a href="payment_policy.html" style="color: white">Hình thức thanh toán</a></div>
                    <div> <a href="refund_policy.html" style="color: white">Chính sách đổi trả</a></div>
                    <div> <a href="personal_policy.html" style="color: white">Bảo mật thông tin cá nhân</a></div>
                </div>
            </div>
            <div class="wrap col-md-4">
                <div class="find-us">
                    <span>Find us on</span>
                    <img src="./images/footer_fb.png" id="fb">
                    <img src="./images/footer_instagram.png" id="instagram">
                    <img src="./images/footer_twitter.png" id="twitter">
                    <img src="./images/footer_youtube.png" id="youtube">
                </div>
            </div>
            <div class="wrap col-md-3">
                <div class="address">
                    <div class="header_1">OPENSEA TOURISM AND SERVICES COMPANY</div>
                    <div class="content">12 Ngo Tram Str, Hoan Kiem Dist., Hanoi, Vietnam</div>
                </div>
            </div>
            <div class="col-12 bottom">
                Mã số doanh nghiệp: 0108160263 do Sở Kế hoạch và Đầu tư TP. Hà Nội cấp lần đầu ngày 05/02/2018
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="./js/common.js"></script>
<script src="./js/nav.js"></script>
<script src="./js/banner.js"></script>
<script src="./js/home.js"></script>
<script src="./js/lang.js"></script>
</body>
