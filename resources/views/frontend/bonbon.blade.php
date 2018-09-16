<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Opensea BonBon</title>
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
    <link rel="stylesheet" href="./css/bonbon-header.css" type='text/css'>
    <link rel="stylesheet" href="./css/nav.css" type='text/css'>
    <link rel="stylesheet" href="./css/bonbon-nav.css" type='text/css'>
    <link rel="stylesheet" href="./css/footer.css" type='text/css'>
    <link rel="stylesheet" href="./css/bonbon.css" type='text/css'>
    <link rel="stylesheet" href="./css/bonbon.css" type='text/css'>
    <link rel="stylesheet" href="./css/bonbon-popup.css" type='text/css'>
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
<!-- Ticket popup -->
<!-- <div class="modal ticket_popup_modal" tabindex="-1" role="dialog" id="ticket-popup-test">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="ticket-popup">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form>
          <div class="row">
            <div class="col-md-3">
              <div class="banner">
                <div class="title">PREMIUM</div>
                <img src="./images/ticket_popup_banner.png">
                <div class="filter"></div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="content">
                <h1>SELECT YOUR BONBON TICKET</h1>
                <div class="prices">
                  <div class="row">
                    <div class="col-md-3 offset-md-3">
                      <div class="price adult">
                        <div class="title">Adult</div>
                        <div class="inner-price">
                          <span class="currency">VND</span>
                          <span class="number">680,000</span>
                        </div>
                        <div class="save">
                          <span class="text">save up to</span>
                          <span class="save-price">
                            <span class="currency">VND</span><span class="number">325,000</span>
                          </span>
                        </div>
                        <div class="choose-amount">
                          <span class="sub">-</span>
                          <span class="amount-number">1</span>
                          <span class="add">+</span>
                          <input type="number" name="amountAdult" class="amount-adult" hidden>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="price child">
                        <div class="title">
                          Child
                          <div class="sub-title">(3 - 15 years)</div>
                        </div>
                        <div class="inner-price">
                          <span class="currency">VND</span>
                          <span class="number">540,000</span>
                        </div>
                        <div class="save">
                          <span class="text">save up to</span>
                          <span class="save-price">
                            <span class="currency">VND</span><span class="number">265,000</span>
                          </span>
                        </div>
                        <div class="choose-amount">
                          <span class="sub">-</span>
                          <span class="amount-number">1</span>
                          <span class="add">+</span>
                          <input type="number" name="amountChild" class="amount-child" hidden>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="descriptions">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="description row">
                        <div class="icon col-3">
                          <img src="./images/ticket_popup_desc_ticket.png">
                        </div>
                        <div class="text col-9">Use your ticket anyday within 6 months</div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="description row">
                        <div class="icon col-3">
                          <img src="./images/ticket_popup_desc_offer.png">
                        </div>
                        <div class="text col-9">Exclusive online offers</div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="description row">
                        <div class="icon col-3">
                          <img src="./images/ticket_popup_desc_safe.png">
                        </div>
                        <div class="text col-9">Safe and secure checkout</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="offers row">
                  <div class="col-md-4">
                    <div class="title cell">EXCLUSIVE OFFER</div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_time.png">
                      </div>
                      <div class="text col-9">2-day BonBon City Tour</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_coupon.png">
                      </div>
                      <div class="text col-9">A set of partner's coupons</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_voucher.png">
                      </div>
                      <div class="text col-9">
                        <span class="price">
                          <span class="currency">VND</span>
                          <span class="number">500,000</span>
                        </span>
                        voucher for any Vietnam Rewind tour
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_puppet.png">
                      </div>
                      <div class="text col-9">01 water puppet show ticket</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_attraction.png">
                      </div>
                      <div class="text col-9">All exclusive attractions passes</div>
                    </div>
                  </div>
                </div>

                <div class="sub-total row">
                  <div class="title col-md-3 offset-md-3">SUB-TOTAL</div>
                  <div class="price col-md-3">
                    <span class="currency">VND</span><span class="number">300,000</span>
                  </div>
                </div>

                <div class="submit-buttons">
                  <button type="submit" class="add-to-cart">ADD TO CART</button>
                  <button type="submit" class="book-now">BOOK NOW</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->
<!-- End ticket popup -->

<!-- Ticket popup family-->
<!-- <button class="btn btn-primary" data-toggle="modal" data-target="#ticket-popup-family-test">Show ticket popup family</button>
<div class="modal ticket_popup_modal" tabindex="-1" role="dialog" id="ticket-popup-family-test">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="ticket-popup family">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form>
          <div class="row">
            <div class="col-md-3">
              <div class="banner">
                <div class="title">PREMIUM</div>
                <img src="./images/ticket_popup_banner.png">
                <div class="filter"></div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="content">
                <h1>SELECT YOUR BONBON TICKET</h1>
                <div class="prices">
                  <div class="row">
                    <div class="col-md-4 offset-md-2">
                      <div class="price adult">
                        <div class="title">2 Adults and 2 Children</div>
                        <div class="inner-price">
                          <span class="currency">VND</span>
                          <span class="number">1,020,000</span>
                        </div>
                        <div class="save">
                          <span class="text">save up to</span>
                          <span class="save-price">
                            <span class="currency">VND</span><span class="number">180,000</span>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 wrap">
                      <div class="choose-amount">
                        <span class="sub">-</span>
                        <span class="amount-number">1</span>
                        <span class="add">+</span>
                        <input type="number" name="amountChild" class="amount-child" hidden>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="descriptions">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="description row">
                        <div class="icon col-3">
                          <img src="./images/ticket_popup_desc_ticket.png">
                        </div>
                        <div class="text col-9">Use your ticket anyday within 6 months</div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="description row">
                        <div class="icon col-3">
                          <img src="./images/ticket_popup_desc_offer.png">
                        </div>
                        <div class="text col-9">Exclusive online offers</div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="description row">
                        <div class="icon col-3">
                          <img src="./images/ticket_popup_desc_safe.png">
                        </div>
                        <div class="text col-9">Safe and secure checkout</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="offers row">
                  <div class="col-md-4">
                    <div class="title cell">EXCLUSIVE OFFER</div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_time.png">
                      </div>
                      <div class="text col-9">2-day BonBon City Tour</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_coupon.png">
                      </div>
                      <div class="text col-9">A set of partner's coupons</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_voucher.png">
                      </div>
                      <div class="text col-9">
                        <span class="price">
                          <span class="currency">VND</span>
                          <span class="number">500,000</span>
                        </span>
                        voucher for any Vietnam Rewind tour
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_puppet.png">
                      </div>
                      <div class="text col-9">01 water puppet show ticket</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row cell">
                      <div class="icon col-3">
                        <img src="./images/ticket_popup_offer_attraction.png">
                      </div>
                      <div class="text col-9">All exclusive attractions passes</div>
                    </div>
                  </div>
                </div>

                <div class="sub-total row">
                  <div class="title col-md-3 offset-md-3">SUB-TOTAL</div>
                  <div class="price col-md-3">
                    <span class="currency">VND</span><span class="number">300,000</span>
                  </div>
                </div>

                <div class="submit-buttons">
                  <button type="submit" class="add-to-cart">ADD TO CART</button>
                  <button type="submit" class="book-now">BOOK NOW</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->
<!-- End ticket popup -->

<!-- Top background -->
<div class="top-background">
    <img src="./images/bonbon_banner.png">
</div>
<!-- /.top-background -->

<!-- Header -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="search">
                    <!-- <div class="icon"><i class="fa fa-search"></i></div> -->
                    <!-- <div class="icon">
                      <img src="./images/home_search_icon.png">
                    </div>
                    <input type="text"> -->
                </div>
            </div>
            <div class="col-4">
                <div class="logo">
                    <img src="./images/bonbon_logo.png">
                </div>
            </div>
            <div class="col-4">
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
<nav class="navbar navbar-expand-xl navbar-light sticky-top">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @include('frontend.common.navbar')
</nav>
<!-- /nav -->
<!-- </div> -->

<!-- Top see more -->
<div class="top-see-more">
    <div class="inner">
        <i class="fa fa-chevron-down"></i>
    </div>
</div>
<!-- /.top-see-more -->

<!-- Main content -->
<main>
    <!-- Intro video -->
    <section class="intro-video" id="intro-video">
        <div class="container">
            <div class="header-1">IT'S TIME TO BONBON</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="video">
                        <img src="./images/bonbon_video.png">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <span class="quot"><i class="fa fa-quote-left"></i></span>&nbsp;&nbsp;
                        Embark on your own adventure with Hanoi's one and only Bon Bon City Tours. Our flexible city sightseeing tours allow you to soak up the city's history and atmosphere with ease. Hop on any of our unique buses from 10+ Bon Bon stops, conveniently located close to famous landmarks and attractions. You can hop off the bus to explore as often as you wish, and rejoin the tour once you're ready.&nbsp;&nbsp;
                        <span class="quot"><i class="fa fa-quote-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.intro-video -->

    <!-- Packages -->
    <section class="packages" id="tickets">
        <div class="container">
            <div class="header-1">PACKAGES</div>
            <div class="header-2">More than a ticket, your entrance to our very own Hanoi</div>
            <div class="header-3">SAVE 10% WHEN PRE-BOOK YOUR TICKET ONLINE</div>
            <div class="list">
                <div class="owl-carousel owl-theme">
                    <!-- <div class="item">
                      <div class="package">
                        <div class="name">CLASSIC</div>
                        <div class="content">
                          <div class="empty"></div>
                          <div class="descriptions">
                            <ul>
                              <li>24 hours BonBon City Tour Bus</li>
                              <li>10% off Hanoi Rewind tours</li>
                              <li>03 exclusive partner's coupons</li>
                            </ul>
                          </div>
                          <div class="prices">
                            <div class="row">
                              <div class="col-4">
                                <div class="price">
                                  <div class="type">CHILD</div>
                                  <div class="row">
                                    <div class="col-2 offset-1">
                                      <div class="currency">VND</div>
                                    </div>
                                    <div class="col-9">
                                      <div class="number">250,000</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-4">
                                <div class="price" id="adult">
                                  <div class="type">ADULT</div>
                                  <div class="row">
                                    <div class="col-2 offset-1">
                                      <div class="currency">VND</div>
                                    </div>
                                    <div class="col-9">
                                      <div class="number">250,000</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-4">
                                <div class="price">
                                  <div class="type">FAMILY</div>
                                  <div class="row">
                                    <div class="col-2 offset-1">
                                      <div class="currency">VND</div>
                                    </div>
                                    <div class="col-9">
                                      <div class="number">250,000</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="book-now">BOOK NOW</div>
                        </div>
                        <div class="footer"></div>
                      </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.packages -->

    <!-- Highlights -->
    <section class="highlights">
        <div class="container">
            <div class="header-1">HIGHLIGHTS</div>
            <div class="header-2">The best hop on hop off sightseeing bus tour that showcases the city's world renowned landmarks.</div>
            <div class="list">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="highlight" id="1">
                                    <div class="card">
                                        <div class="highlight-header card-header">
                                            <div class="row">
                                                <div class="icon col-1"><img src="./images/bonbon_highlight_hoho.png"></div>
                                                <div class="col-11 row">
                                                    <div class="text col-11">
                                                        <h1>HOP ON HOP OFF TICKET</h1>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="collapsed" data-toggle="collapse" href="#highlight1">
                                                            <div class="see-more"><div class="inner">
                                                                    <i class="fa fa-chevron-down"></i>
                                                                </div></div>
                                                        </div>
                                                    </div>
                                                    <div class="text col-12">
                                                        <h2>Explore the city at your own<br>pace with our flexibility</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="highlight1">
                                            <div class="card-body">
                                                <div class="offset-1 col-9">
                                                    <div class="content">
                                                        Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="highlight" id="2">
                                    <div class="card">
                                        <div class="highlight-header card-header">
                                            <div class="row">
                                                <div class="icon col-1"><img src="./images/bonbon_highlight_wifi.png"></div>
                                                <div class="col-11 row">
                                                    <div class="text col-11">
                                                        <h1>FREE WIFI</h1>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="collapsed" data-toggle="collapse" href="#highlight3">
                                                            <div class="see-more"><div class="inner">
                                                                    <i class="fa fa-chevron-down"></i>
                                                                </div></div>
                                                        </div>
                                                    </div>
                                                    <div class="text col-12">
                                                        <h2>Free wifi on board</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="highlight3">
                                            <div class="card-body">
                                                <div class="offset-1 col-9">
                                                    <div class="content">
                                                        Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="highlight" id="3">
                                    <div class="card">
                                        <div class="highlight-header card-header">
                                            <div class="row">
                                                <div class="icon col-1"><img src="./images/bonbon_highlight_record.png"></div>
                                                <div class="col-11 row">
                                                    <div class="text col-11">
                                                        <h1>PRE-RECORDER APP COMPLIMENTARY</h1>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="collapsed" data-toggle="collapse" href="#highlight5">
                                                            <div class="see-more"><div class="inner">
                                                                    <i class="fa fa-chevron-down"></i>
                                                                </div></div>
                                                        </div>
                                                    </div>
                                                    <div class="text col-12">
                                                        <h2>Available in 2 languages on all tours</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="highlight5">
                                            <div class="card-body">
                                                <div class="offset-1 col-9">
                                                    <div class="content">
                                                        Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="highlight" id="4">
                                    <div class="card">
                                        <div class="highlight-header card-header">
                                            <div class="row">
                                                <div class="icon col-1"><img src="./images/bonbon_highlight_depature.png"></div>
                                                <div class="col-11 row">
                                                    <div class="text col-11">
                                                        <h1>DEPARTURE POINTS</h1>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="collapsed" data-toggle="collapse" href="#highlight2">
                                                            <div class="see-more"><div class="inner">
                                                                    <i class="fa fa-chevron-down"></i>
                                                                </div></div>
                                                        </div>
                                                    </div>
                                                    <div class="text col-12">
                                                        <h2>Conveniently located so you<br>can see the best of Hanoi</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="highlight2">
                                            <div class="card-body">
                                                <div class="offset-1 col-9">
                                                    <div class="content">
                                                        Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="highlight" id="5">
                                    <div class="card">
                                        <div class="highlight-header card-header">
                                            <div class="row">
                                                <div class="icon col-1"><img src="./images/bonbon_highlight_book.png"></div>
                                                <div class="col-11 row">
                                                    <div class="text col-11">
                                                        <h1>BOOK ONLINE AND SAVE</h1>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="collapsed" data-toggle="collapse" href="#highlight4">
                                                            <div class="see-more"><div class="inner">
                                                                    <i class="fa fa-chevron-down"></i>
                                                                </div></div>
                                                        </div>
                                                    </div>
                                                    <div class="text col-12">
                                                        <h2>Save more from online purchase</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="highlight4">
                                            <div class="card-body">
                                                <div class="offset-1 col-9">
                                                    <div class="content">
                                                        Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="highlight" id="6">
                                    <div class="card">
                                        <div class="highlight-header card-header">
                                            <div class="row">
                                                <div class="icon col-1"><img src="./images/bonbon_highlight_maximum.png"></div>
                                                <div class="col-11 row">
                                                    <div class="text col-11">
                                                        <h1>MAXIMUM SERVICE<br>AT BEST PRICE</h1>
                                                    </div>
                                                    <div class="col-1">
                                                        <div class="collapsed" data-toggle="collapse" href="#highlight6">
                                                            <div class="see-more"><div class="inner">
                                                                    <i class="fa fa-chevron-down"></i>
                                                                </div></div>
                                                        </div>
                                                    </div>
                                                    <div class="text col-12">
                                                        <h2>It's all inclusive with no extra</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="highlight6">
                                            <div class="card-body">
                                                <div class="offset-1 col-9">
                                                    <div class="content">
                                                        Language included: English, VIetnamese. All BonBon bus offers audio guide in English and Vietnamese which will give you information on every stop as well as activities along the way. We will also provide you our very own guidebook to the essential sights, sounds and tastes from east to west that define Hanoi.
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
            </div>
        </div>
    </section>
    <!-- /.highlights -->

    <!-- How it work -->
    <section class="how-it-work">
        <div class="container">
            <div class="header-1">HOW IT WORKS</div>
            <div class="flow">
                <div class=row>
                    <div class="col-lg-3 col-md-12">
                        <div class="inner">
                            <div class="step" id="step1">
                                <span>Find the best ticket for your trip</span>
                                <div class="arrow">
                                    <img src="./images/bonbon_howitwork_arrow_right.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="inner">
                            <div class="step" id="step2">
                                <span>Purchase online & get your e-ticket</span>
                                <div class="arrow">
                                    <img src="./images/bonbon_howitwork_arrow_left.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="inner">
                            <div class="step" id="step3">
                                <span>Exchange your e-tickets to paper tickets on the bus at the 1st stop and make sure to validate them</span>
                                <div class="arrow">
                                    <img src="./images/bonbon_howitwork_arrow_right.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="inner">
                            <div class="step" id="step4">
                                <span>Enjoy your trip!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-now">
                <button>BOOK NOW</button>
            </div>
        </div>
    </section>
    <!-- /.how-it-work -->

    <!-- Route -->
    <section class="route">
        <div class="container">
            <div class="header-1">BONBON ROUTE</div>
            <div class="header-2">Bon this way</div>
            <div class="row">
                <div class="col-md-9">
                    <div class="image"><img src="./images/bonbon_map.jpg"></div>
                </div>
                <div class="col-md-3">
                    <div class="text">
                        Buses arrive at each stop every 30 minutes, so you can quickly rejoin the tour whenever you like. Our bus route has been carefully planned to ensure that you'll capture all the best sights of Hanoi including Hanoi Opera House, Long Bien Bridge, Van Mieu, Imperial Citadel of Thang Long and more
                    </div>
                    <div class="download">
                        <a href="./images/bonbon_map.jpg" download><button>DOWNLOAD MAP</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.route -->

    <!-- Attractions -->
    <section class="attractions">
        <div class="container">
            <div class="header-1">HANOI ATTRACTIONS</div>
            <div class="header-2">The no-so-little gems of our route. Presenting Hanoi's proudest</div>
            <div class="list">
                <div class="owl-carousel owl-theme">
                    <!-- <div class="item">
                      <div class="attraction">
                        <div class="name">TRAN QUOC<br>PAGODA</div>
                        <div class="middle">
                          <div class="rectangle"></div>
                        </div>
                        <div class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <div class="see-more">
                          <div class="icon">+</div>
                          <button>MORE</button>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="attraction">
                        <div class="name">TEMPLE OF <br>LITERATURE</div>
                        <div class="middle">
                          <div class="rectangle"></div>
                        </div>
                        <div class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <div class="see-more">
                          <div class="icon">+</div>
                          <button>MORE</button>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="attraction">
                        <div class="name">HO CHI MINH<br>MAUSOLEM</div>
                        <div class="middle">
                          <div class="rectangle"></div>
                        </div>
                        <div class="description">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <div class="see-more">
                          <div class="icon">+</div>
                          <button>MORE</button>
                        </div>
                      </div>
                    </div> -->
                </div>
            </div>
            <div class="bonbon">
                <button>LET'S BONBON TOGETHER</button>
            </div>
        </div>
    </section>

    <!-- Happy customers -->
    <section class="customers">
        <div class="container">
            <div class="header-1">OUR HAPPY CUSTOMER</div>
            <div class="header-2">Why only hear from us? Let's check more from our friends</div>

            <div class="list">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="customer" id="1">
                            <div class="image" style="background-image: url('./images/bonbon_customers.png');">
                            </div>
                            <div class="text">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="customer" id="2">
                            <div class="image" style="background-image: url('./images/bonbon_customers.png');">
                            </div>
                            <div class="text">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="customer" id="3">
                            <div class="image" style="background-image: url('./images/bonbon_customers.png');">
                            </div>
                            <div class="text">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="customer" id="4">
                            <div class="image" style="background-image: url('./images/bonbon_customers.png');">
                            </div>
                            <div class="text">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="customer" id="5">
                            <div class="image" style="background-image: url('./images/bonbon_customers.png');">
                            </div>
                            <div class="text">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="customer" id="6">
                            <div class="image" style="background-image: url('./images/bonbon_customers.png');">
                            </div>
                            <div class="text">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-4">
                    <div class="customer">
                      <div class="image">
                      </div>
                      <div class="text">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="customer">
                      <div class="image">
                      </div>
                      <div class="text">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="customer">
                      <div class="image">
                      </div>
                      <div class="text">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
                      </div>
                    </div>
                  </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- /.customers -->

    <!-- Get in touch -->
    <section class="get-in-touch">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slogan">
                        <img src="./images/bonbon_getintouch_slogan.png">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form">
                        <div class="header-1">GET IN TOUCH</div>
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-xs-10 offset-xs-1">
                                    <input id="name" type="text" name="name" placeholder="type your name here">
                                </div>
                                <div class="col-md-1 col-xs-0"></div>
                                <div class="col-md-5 col-xs-10 offset-xs-1">
                                    <input id="email" type="email" name="email" placeholder="your e-mail">
                                </div>
                                <div class="col-md-12 col-xs-11 offset-xs-1">
                                    <textarea rows="8" placeholder="message"></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="submit">
                                        <button type="submit">SEND</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.get-in-touch -->
</main>
<!-- /main -->

<!-- Footer -->

@include('frontend.common.footer')
<!-- /footer -->

<script src="./js/common.js"></script>
<script src="./js/bonbon_data.js"></script>
<script src="./js/bonbon.js"></script>
<script src="./js/lang.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
</body>
