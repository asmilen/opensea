<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Opensea FAQ</title>
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
    <link rel="stylesheet" href="./css/faq.css" type='text/css'>
    <link rel="stylesheet" href="../plugins/owl_carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../plugins/owl_carousel/dist/assets/owl.theme.default.min.css">

    <!-- JS-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/persist-js@0.3.1/src/persist.min.js"></script>
    <script src="../plugins/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="../plugins/owl_carousel/dist/owl.carousel.min.js"></script>

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
            </div>

            <div class="col-md-4">
                <div class="logo">
                    <img src="./images/opensea_logo.svg">
                </div>
            </div>

            <div class="col-md-4">
                <div class="langs">
                    <!-- <div class="en">Eng</div>
                    <div class="vertical-line"></div>
                    <div class="vi">Vie</div> -->
                    <div class="en"><img src="./images/header_en.png"></div>
                    <div class="vertical-line"></div>
                    <div class="vi"><img src="./images/header_vn.png"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Nav -->
<nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    @include('frontend.common.navbar')
</nav>
<!-- /nav -->

<!-- Main -->
<main>
    <!-- First banner -->
    <section class="first-banner">
        <div class="container">
            <h1>FREQUENTLY ASKED QUESTIONS</h1>
        </div>
    </section>
    <!-- End first banner -->

    <!-- Navigate -->
    <section class="navigate">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="navigate-item" id="nav-bonbon">
                        <img src="./images/faqs_nav_bonbon.png">
                    </div>
                </div>

                <div class="item">
                    <div class="navigate-item" id="nav-rewind">
                        <img src="./images/faqs_nav_rewind.png">
                    </div>
                </div>

                <div class="item">
                    <div class="navigate-item" id="nav-more">
                        <img src="./images/faqs_nav_more.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End navigate -->

    <!-- FAQs -->
    <section class="faqs" id="faqs-bonbon">
        <div class="container">
            <h2>BONBON RELATED QUESTIONS</h2>
            <div class="list">
                <!-- <div class="collapsed row question" data-toggle="collapse" href="#bonbon-faq-1">
                  <div class="col-11 question-text">1. Where can I buy the ticket?</div>
                  <div class="col-1">
                    <div class="icon"><i class="fa fa-chevron-down"></i></div>
                  </div>
                  <div class="collapse answer col-10 offset-1" id="bonbon-faq-1">
                    Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.
                  </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="faqs" id="faqs-rewind">
        <div class="container">
            <h2>VIETNAM REWIND RELATED QUESTIONS</h2>
            <div class="list">
                <!-- <div class="collapsed row question" data-toggle="collapse" href="#rewind-faq-1">
                  <div class="col-11 question-text">1. Where can I buy the ticket?</div>
                  <div class="col-1">
                    <div class="icon"><i class="fa fa-chevron-down"></i></div>
                  </div>
                  <div class="collapse answer col-10 offset-1" id="rewind-faq-1">
                    Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.
                  </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="faqs" id="faqs-more">
        <div class="container">
            <h2>BONBON RELATED QUESTIONS</h2>
            <div class="list">
                <!-- <div class="collapsed row question" data-toggle="collapse" href="#more-faq-1">
                  <div class="col-11 question-text">1. Where can I buy the ticket?</div>
                  <div class="col-1">
                    <div class="icon"><i class="fa fa-chevron-down"></i></div>
                  </div>
                  <div class="collapse answer col-10 offset-1" id="more-faq-1">
                    Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.
                  </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- End FAQs -->
</main>
<!-- End main -->

<!-- Footer -->
@include('frontend.common.footer')
<!-- /footer -->

<script src="./js/common.js"></script>
<script src="./js/faq.js"></script>
<script src="./js/lang.js"></script>
</body>
