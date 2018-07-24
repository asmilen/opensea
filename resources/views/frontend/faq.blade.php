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
    <meta name="application-name" content="Opensea">
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
    <link rel="stylesheet" href="frontend/dist/css/faq.css">
    <!-- <link rel="stylesheet" type="text/css" media="screen and (max-width: 768px)" href="frontend/dist/css/faq_max_768px.css"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="frontend/plugins/font-awesome/css/font-awesome.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="main">
    <!-- Header -->
    <div class="header">
        <span><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Hotline (+84) 9292392392&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;TIẾNG VIỆT</span>
    </div>
    <!-- /.header -->

    <!-- Navigation bar -->
    <div class="navigation-bar relative">
        <img class="logo" src="frontend/dist/img/logo.png" alt="logo">
        <div class="icon">
            <div class="icon-line"></div>
            <div class="icon-line"></div>
            <div class="icon-line"></div>
        </div>
        <a class="item" href="/">
            HOME
            <div class="underline"></div>
        </a>
        <a class="item" href="/bus">
            HOP ON HOP OFF
            <div class="underline"></div>
        </a>
        <a class="item" href="/tour">
            HANOI RETREAT
            <div class="underline"></div>
        </a>
        <a class="item active" href="#">
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
        <!-- Frequent question -->
        <div class="freq-questions">
            <div class="header_1">Topics Of Frequently Asked Questions</div>
            <div class="questions" id="ticket">
                <div class="header_2" data-toggle="collapse" data-target="#topics-ticket">
                    <div class="icon"><i class="fa fa-ticket"></i></div>
                    <div class="title">TICKET RELATED QUESTION</div>
                    <div class="expand"><i class="fa fa-caret-down"></i></div>
                </div>
                <ol class="list collapse" id="topics-ticket">
                    <li class="question"><a href="#ticket-qa-">Where can I buy the ticket?</a></li>
                    <li class="question"><a href="#ticket-qa-2">How do I redeem my ticket?</a></li>
                    <li class="question"><a href="#ticket-qa-3">Is there a discount for purchasing in advance?</a></li>
                    <li class="question"><a href="#ticket-qa-4">Is there a discount available for groups?</a></li>
                    <li class="question"><a href="#ticket-qa-5">Is there a discount available for children?</a></li>
                    <li class="question"><a href="#ticket-qa-6">How can I cancel my ticket?</a></li>
                    <li class="question"><a href="#ticket-qa-7">Does the BonBon ticket include entrance to attractions on the route?</a></li>
                    <li class="question"><a href="#ticket-qa-8">Is it possible to redeem the ticket if my phone crashes?</a></li>
                    <li class="question"><a href="#ticket-qa-9">Can I use my ticket and transfer it to another person before the expiry time?</a></li>
                </ol>
            </div>

            <div class="questions" id="tour">
                <div class="header_2" data-toggle="collapse" data-target="#topics-tour">
                    <div class="icon"><i class="fa fa-bus"></i></div>
                    <div class="title">TOUR RELATED QUESTION</div>
                    <div class="expand"><i class="fa fa-caret-down"></i></div>
                </div>
                <ol class="list collapse" id="topics-tour">
                    <li class="question"><a href="#tour-qa-1">Where can I start the tour?</a></li>
                    <li class="question"><a href="#tour-qa-2">On which days does the tours operate?<br>When do the first bus and the last bus start? How often do the buses run?</a></li>
                    <li class="question"><a href="#tour-qa-3">How can I know when the next bus is coming?</a></li>
                    <li class="question"><a href="#tour-qa-4">What is your lost and found policy?</a></li>
                    <li class="question"><a href="#tour-qa-5">How far in advance do I need to book for the ticket?</a></li>
                    <li class="question"><a href="#tour-qa-6">Is it possible to check the information about any of tthe attractions after I leave the bus?</a></li>
                </ol>
            </div>

            <div class="questions" id="faq">
                <div class="header_2" data-toggle="collapse" data-target="#topics-other">
                    <div class="icon"><i class="fa fa-comments"></i></div>
                    <div class="title">OTHER FAQS</div>
                    <div class="expand"><i class="fa fa-caret-down"></i></div>
                </div>
                <ol class="list collapse" id="topics-other">
                    <li class="question"><a href="#other-qa-1">In which language is commentary available?</a></li>
                    <li class="question"><a href="#other-qa-2">Do I need to specify a date of travel?</a></li>
                    <li class="question"><a href="#other-qa-3">How can I find the stop nearest to me?</a></li>
                    <li class="question"><a href="#other-qa-4">How to use the hop-on hop-off feature at its best?</a></li>
                </ol>
            </div>
        </div>
        <!-- /.freq-questions -->

        <!-- Ticket related questions -->
        <div class="ticket-questions detail-list" id="ticket-detail-qa">
            <div class="header_1">
                <div class="icon">
                    <i class="fa fa-ticket"></i>
                </div>
                <div class="title">Ticket Related Questions</div>
            </div>
            <div class="list">
                <div class="q-a" id="ticket-qa-1">
                    <div class="q">
                        Q: WHERE CAN I BUY THE TICKET?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: There are a couple of places to buy a BonBon City Tour ticket. You can buy it:<br>
                        - Online on our website with additional 10% discount<br>
                        - From our designated staff on the BonBon Bus<br>
                        - At OPENSEA office (12 Ngo Tram Street, Hoan Kiem, Hanoi)<br>
                        - From our growing list of partners (Link).
                    </div>
                </div>

                <div class="q-a" id="ticket-qa-2">
                    <div class="q">
                        Q: HOW DO I REDEEM MY TICKET?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: If you purchase online, follow these steps to get your paper ticket:<br>
                        1. Check our confirmation email at your registered mailbox for an e-ticket which includes a unique QR code.<br>
                        2. Show your printed e-ticket, or that e-mail on your mobile device to our official staff on the BonBon Bus to exchange for a physical paper ticket.
                    </div>
                </div>

                <div class="q-a" id="ticket-qa-3">
                    <div class="q">
                        Q: IS THERE A DISCOUNT FOR PURCHASING IN ADVANCE?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: We currently offer an any-time 10% discount for online purchases, sign up and subscribe to our newsletter to be the first to find out about our exclusive deals, promotions and give aways.
                    </div>
                </div>

                <div class="q-a" id="ticket-qa-4">
                    <div class="q">
                        Q: IS THERE A DISCOUNT AVAILABLE FOR GROUPS?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A:  We do offer packages for traveling families of 4. If you are traveling in a big group and would like to know our current promotions, please contact us so an agent can assist you.
                    </div>
                </div>

                <div class="q-a" id="ticket-qa-5">
                    <div class="q">
                        Q: IS THERE A DISCOUNT AVAILABLE FOR CHILDREN?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: Yes.<br>
                        A child ticket is available for children under the age of 15 and we offer free service for children under 3 years old, as long as the child does not occupy a seat to the exclusion of a fare-paying passenger. Please be noted that a child needs to be accompanied by his/her parents to use our services.
                    </div>
                </div>

                <div class="q-a" id="ticket-qa-6">
                    <div class="q">
                        Q: HOW CAN I CANCEL MY TICKET?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: For ticket cancellation please contact us through email or phone so that an agent can assist you with the procedure. Remember to cancel your ticket 14 days prior to its expiration date.
                    </div>
                </div>

                <div class="q-a" id="ticket-qa-7">
                    <div class="q">
                        Q: DOES THE BONBON TICKET INCLUDE ENTRANCE TO ATTRACTIONS ON THE ROUTE?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: Please be noted that BonBon City Tours offers 3 packages with different benefits:<br>
                        - Classic Ticket: 10% discount voucher for Vietnam Rewind Experience Tour<br>
                        - Premium Ticket: 3 attraction passes AND 15% discount voucher for Vietnam Rewind Experience Tour<br>
                        - Deluxe Ticket: All-in-one attraction pass AND 15% discount voucher for Vietnam Rewind Experience Tour
                    </div>
                </div>

                <div class="q-a" id="ticket-qa-8">
                    <div class="q">
                        Q: IS IT POSSIBLE TO REDEEM THE TICKET IF MY PHONE CRASHES?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: We recommend our customers to print out a copy of the confirmation email with the QR code visible to exchange the ticket to make sure ease of our service use.
                    </div>
                </div>
            </div>
        </div>
        <!-- /.ticket-questions -->

        <!-- Tour related questions -->
        <div class="tour-questions detail-list" id="tour-detail-qa">
            <div class="header_1">
                <div class="icon">
                    <i class="fa fa-bus"></i>
                </div>
                <div class="title">Tour Related Questions</div>
            </div>
            <div class="list">
                <div class="q-a" id="tour-qa-1">
                    <div class="q">
                        Q: WHERE CAN I START THE TOUR?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: The principal starting point of our tour is the Stop 01 (Imperial Citadel of Thang Long). But you can start YOUR tour at any of our 9 stops.
                    </div>
                </div>

                <div class="q-a" id="tour-qa-2">
                    <div class="q">
                        Q: ON WHICH DAYS DOES THE TOURS OPERATE?<br>WHEN DO THE FIRST BUS AND THE LAST BUS START? HOW OFTEN DO THE BUSES RUN?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: BonBon City Tour operates every day (with some exception of national holidays and other extremely occasional events) following this schedule:<br>
                        First Bus: 09:00 from Stop 01 (Imperial Citadel of Thang Long)<br>
                        Last Full-Circuit Bus: 16:30 from Stop 01 (Imperial Citadel of Thang Long)
                    </div>
                </div>

                <div class="q-a" id="tour-qa-3">
                    <div class="q">
                        Q: HOW CAN I KNOW WHEN THE NEXT BUS IS COMING?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: We value the quality of our service as well as we respect your time value, we vow for the departure of the bus every 30 minute from 9 am everyday. So if you are in between, the next bus will come your way on the next half hour mark.
                    </div>
                </div>

                <div class="q-a" id="tour-qa-4">
                    <div class="q">
                        Q: WHAT IS YOUR LOST AND FOUND POLICY?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: All of your private items should be taken with care, as the BonBon Bus is a public attraction itself. In the case our staff finds any lost and found, this item will be reported to our admins and will be taken back to our headquarter at 12 Ngo Tram Street for safe-keeping. Please contact us to check the status of your lost and found, as items will be donated to charity every 30 days.
                    </div>
                </div>

                <div class="q-a" id="tour-qa-5">
                    <div class="q">
                        Q: HOW FAR IN ADVANCE DO I NEED TO BOOK FOR THE TICKET?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: Since our ticket holds value for 6 months and can be easily purchased online, there is really no concern on how far out you need to book our ticket, but hey, if you're into us, might as well get it now.
                    </div>
                </div>

                <div class="q-a" id="tour-qa-6">
                    <div class="q">
                        Q: IS IT POSSIBLE TO CHECK THE INFORMATION ABOUT ANY OF THE ATTRACTIONS AFTER I LEAVE THE BUS?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: You can always check the information we provide through our exclusive mobile application activated by your unique code within our confirmation email, available on both IOS and Android. Otherwise, our brochure can do you good if you don't have a smartphone.
                    </div>
                </div>
            </div>
        </div>
        <!-- /.tour-questions -->

        <!-- Other FAQS -->
        <div class="other-questions detail-list" id="other-detail-qa">
            <div class="header_1">
                <div class="icon">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="title">Other FAQs</div>
            </div>
            <div class="list">
                <div class="q-a" id="other-qa-1">
                    <div class="q">
                        Q: IN WHICH LANGUAGE IS COMMENTARY AVAILABLE?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: BonBon currently offers a pre-recorded commentary in your choice of the following languages: Vietnamese, English, Chinese. We will be adding up to 6 languages to our system in the near future.
                    </div>
                </div>

                <div class="q-a" id="other-qa-2">
                    <div class="q">
                        Q: DO I NEED TO SPECIFY A DATE OF TRAVEL?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: BonBon currently offers a pre-recorded commentary in your choice of the following languages: Vietnamese, English, Chinese. We will be adding up to 6 languages to our system in the near future.
                    </div>
                </div>

                <div class="q-a" id="other-qa-3">
                    <div class="q">
                        Q: HOW CAN I FIND THE STOP NEAREST TO ME?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: Download the BonBon City Tour app and you'll be able find your nearest stop, with your location service and data mode of course.
                    </div>
                </div>

                <div class="q-a" id="other-qa-4">
                    <div class="q">
                        Q: HOW TO USE THE HOP-ON HOP-OFF FEATURE AT ITS BEST?
                    </div>
                    <div class="underline"></div>
                    <div class="a">
                        A: If you are unfamiliar with Hanoi, you should take one complete circuit and listen to the full commentary, then decide which places to visit. Don't forget you can take as many loops with BonBon as you wish within your ticket validation.
                    </div>
                </div>
            </div>
        </div>
        <!-- /.other-questions -->
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
                <button type="submit" class="right">SEND</button>
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

<!-- Content -->
<script src="frontend/dist/js/faq.js"></script>
<!-- UI -->
<script src="frontend/dist/js/navbar.js"></script>
</body>