<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Opensea Rewind</title>
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
	<link rel="stylesheet" href="./css/rewind-header.css" type='text/css'>
	<link rel="stylesheet" href="./css/nav.css" type='text/css'>
	<link rel="stylesheet" href="./css/rewind-nav.css" type='text/css'>
	<link rel="stylesheet" href="./css/footer.css" type='text/css'>
	<link rel="stylesheet" href="./css/rewind.css" type='text/css'>
	<link rel="stylesheet" href="./css/rewind-popup.css" type='text/css'>
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
<!-- Tour popup -->
<!-- <div class="modal" tabindex="-1" role="dialog" id="tour-popup-test">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="tour-popup">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="inner">
          <div class="row">
            <div class="col-md-6">
              <div class="name">
                <h1>Hanoi's secrets</h1>
                <h2>WITH FILM CAMERAS</h2>
              </div>
              <div class="images">
                <div class="carousel slide" id="imagesCarousel" data-ride="carousel" data-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./images/rewind_popup_image.png" style="width: 100%;">
                    </div>
                    <div class="carousel-item">
                      <img src="./images/rewind_popup_image.png" style="width: 100%;">
                    </div>
                    <div class="carousel-item">
                      <img src="./images/rewind_popup_image.png" style="width: 100%;">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#imagesCarousel" role="button" data-slide="prev">
                    <span class="icon">
                      <i class="fa fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#imagesCarousel" role="button" data-slide="next">
                    <span class="icon">
                      <i class="fa fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="price">
                <div>
                  <span class="currency">VND</span>
                  <span class="number">1,400,000</span>
                </div>
                <span class="text">per pax - maximum group of 5</span>
              </div>
              <div class="row">
                <div class="col-md-6 include included">
                  <div class="title">Included</div>
                  <ul>
                    <li>Professional guide from experienced film photographers and travellers</li>
                    <li>Film camera renting</li>
                    <li>01 film roll and film developing package with digital files</li>
                    <li>01 free coffee and snacks</li>
                  </ul>
                </div>
                <div class="col-md-5 offset-md-1 include not-included">
                  <div class="title">Does not included</div>
                  <ul>
                    <li>Extra film roll and film development</li>
                    <li>Extra drinks and snacks</li>
                    <li>Transportation if needed</li>
                  </ul>
                </div>
              </div>
              <div class="book-info">
                <div class="title">Booking info</div>
                <form>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <input type="text" class="form-control" id="full-name" name="fullName" placeholder="* Full name" required>
                      </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="* Email address" required>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="* Phone / WhatsApp" required>
                      </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                      <div class="form-group">
                        <select id="nationality" name="nationality" class="form-control" required>
                          <option>Afghanistan</option>
                          <option>Albania</option>
                          <option>Algeria</option>
                          <option>Andorra</option>
                          <option>Angola</option>
                          <option>Antigua and Barbuda</option>
                          <option>Argentina</option>
                          <option>Armenia</option>
                          <option>Aruba</option>
                          <option>Australia</option>
                          <option>Austria</option>
                          <option>Azerbaijan</option>
                          <option>Bahamas, The</option>
                          <option>Bahrain</option>
                          <option>Bangladesh</option>
                          <option>Barbados</option>
                          <option>Belarus</option>
                          <option>Belgium</option>
                          <option>Belize</option>
                          <option>Benin</option>
                          <option>Bhutan</option>
                          <option>Bolivia</option>
                          <option>Bosnia and Herzegovina</option>
                          <option>Botswana</option>
                          <option>Brazil</option>
                          <option>Brunei</option>
                          <option>Bulgaria</option>
                          <option>Burkina Faso</option>
                          <option>Burma</option>
                          <option>Burundi</option>
                          <option>Cambodia</option>
                          <option>Cameroon</option>
                          <option>Canada</option>
                          <option>Cabo Verde</option>
                          <option>Central African Republic</option>
                          <option>Chad</option>
                          <option>Chile</option>
                          <option>China</option>
                          <option>Colombia</option>
                          <option>Comoros</option>
                          <option>Congo, Democratic Republic of the</option>
                          <option>Congo, Republic of the</option>
                          <option>Costa Rica</option>
                          <option>Cote d'Ivoire</option>
                          <option>Croatia</option>
                          <option>Cuba</option>
                          <option>Curacao</option>
                          <option>Cyprus</option>
                          <option>Czechia</option>
                          <option>Denmark</option>
                          <option>Djibouti</option>
                          <option>Dominica</option>
                          <option>Dominican Republic</option>
                          <option>East Timor</option>
                          <option>Ecuador</option>
                          <option>Egypt</option>
                          <option>El Salvador</option>
                          <option>Equatorial Guinea</option>
                          <option>Eritrea</option>
                          <option>Estonia</option>
                          <option>Eswatini</option>
                          <option>Ethiopia</option>
                          <option>Fiji</option>
                          <option>Finland</option>
                          <option>France</option>
                          <option>Gabon</option>
                          <option>Gambia, The</option>
                          <option>Georgia</option>
                          <option>Germany</option>
                          <option>Ghana</option>
                          <option>Greece</option>
                          <option>Grenada</option>
                          <option>Guatemala</option>
                          <option>Guinea</option>
                          <option>Guinea-Bissau</option>
                          <option>Guyana</option>
                          <option>Haiti</option>
                          <option>Holy See</option>
                          <option>Honduras</option>
                          <option>Hong Kong</option>
                          <option>Hungary</option>
                          <option>Iceland</option>
                          <option>India</option>
                          <option>Indonesia</option>
                          <option>Iran</option>
                          <option>Iraq</option>
                          <option>Ireland</option>
                          <option>Israel</option>
                          <option>Italy</option>
                          <option>Jamaica</option>
                          <option>Japan</option>
                          <option>Jordan</option>
                          <option>Kazakhstan</option>
                          <option>Kenya</option>
                          <option>Kiribati</option>
                          <option>Korea, North</option>
                          <option>Korea, South</option>
                          <option>Kosovo</option>
                          <option>Kuwait</option>
                          <option>Kyrgyzstan</option>
                          <option>Laos</option>
                          <option>Latvia</option>
                          <option>Lebanon</option>
                          <option>Lesotho</option>
                          <option>Liberia</option>
                          <option>Libya</option>
                          <option>Liechtenstein</option>
                          <option>Lithuania</option>
                          <option>Luxembourg</option>
                          <option>Macau</option>
                          <option>Macedonia</option>
                          <option>Madagascar</option>
                          <option>Malawi</option>
                          <option>Malaysia</option>
                          <option>Maldives</option>
                          <option>Mali</option>
                          <option>Malta</option>
                          <option>Marshall Islands</option>
                          <option>Mauritania</option>
                          <option>Mauritius</option>
                          <option>Mexico</option>
                          <option>Micronesia</option>
                          <option>Moldova</option>
                          <option>Monaco</option>
                          <option>Mongolia</option>
                          <option>Montenegro</option>
                          <option>Morocco</option>
                          <option>Mozambique</option>
                          <option>Namibia</option>
                          <option>Nauru</option>
                          <option>Nepal</option>
                          <option>Netherlands</option>
                          <option>New Zealand</option>
                          <option>Nicaragua</option>
                          <option>Niger</option>
                          <option>Nigeria</option>
                          <option>North Korea</option>
                          <option>Norway</option>
                          <option>Oman</option>
                          <option>Pakistan</option>
                          <option>Palau</option>
                          <option>Palestinian Territories</option>
                          <option>Panama</option>
                          <option>Papua New Guinea</option>
                          <option>Paraguay</option>
                          <option>Peru</option>
                          <option>Philippines</option>
                          <option>Poland</option>
                          <option>Portugal</option>
                          <option>Qatar</option>
                          <option>Romania</option>
                          <option>Russia</option>
                          <option>Rwanda</option>
                          <option>Saint Kitts and Nevis</option>
                          <option>Saint Lucia</option>
                          <option>Saint Vincent and the Grenadines</option>
                          <option>Samoa</option>
                          <option>San Marino</option>
                          <option>Sao Tome and Principe</option>
                          <option>Saudi Arabia</option>
                          <option>Senegal</option>
                          <option>Serbia</option>
                          <option>Seychelles</option>
                          <option>Sierra Leone</option>
                          <option>Singapore</option>
                          <option>Sint Maarten</option>
                          <option>Slovakia</option>
                          <option>Slovenia</option>
                          <option>Solomon Islands</option>
                          <option>Somalia</option>
                          <option>South Africa</option>
                          <option>South Korea</option>
                          <option>South Sudan</option>
                          <option>Spain</option>
                          <option>Sri Lanka</option>
                          <option>Sudan</option>
                          <option>Suriname</option>
                          <option>Swaziland (See Eswatini)</option>
                          <option>Sweden</option>
                          <option>Switzerland</option>
                          <option>Syria</option>
                          <option>Taiwan</option>
                          <option>Tajikistan</option>
                          <option>Tanzania</option>
                          <option>Thailand</option>
                          <option>Timor-Leste</option>
                          <option>Togo</option>
                          <option>Tonga</option>
                          <option>Trinidad and Tobago</option>
                          <option>Tunisia</option>
                          <option>Turkey</option>
                          <option>Turkmenistan</option>
                          <option>Tuvalu</option>
                          <option>Uganda</option>
                          <option>Ukraine</option>
                          <option>United Arab Emirates</option>
                          <option>United Kingdom</option>
                          <option>Uruguay</option>
                          <option>Uzbekistan</option>
                          <option>Vanuatu</option>
                          <option>Venezuela</option>
                          <option>Vietnam</option>
                          <option>Yemen</option>
                          <option>Zambia</option>
                          <option>Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="date"><span style="color: red;">*</span>Choose your date</label>
                        <input class="form-control" type="date" name="date" id="date" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <div class="time">
                          <label><span style="color: red;">*</span>Time</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="time" id="time1" value="1">
                            <label class="form-check-label" for="time1">9 a.m - 1 p.m</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="time" id="time2" value="2">
                            <label class="form-check-label" for="time2">1 p.m - 5 p.m</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="amount"><span style="color: red;">*</span>Number of people</label>
                        <input class="form-control" type="number" min="1" max="5" name="amount" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea class="form-control" id="note" rows="4" placeholder="Special requests"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="sub-total">
                        <div class="line"></div>
                        <div class="title">Sub-total</div>
                        <div class="price">
                          <span class="currency">VND</span>
                          <span class="number">1,400,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="submit-buttons">
                    <button type="submit" class="add-to-cart">ADD TO CART</button>
                    <button type="submit" class="buy-now">BUY NOW</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- /.tour-popup -->

<!-- Top background -->
<div class="top-background">
	<img src="./images/rewind_banner_bg.png">
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
				<!-- <div class="logo">
                  <img src="./images/bonbon_logo.png">
                </div> -->
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
<nav class="navbar navbar-expand-xl navbar-dark sticky-top">
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
			<div class="header-1 poster-font">An unique way of experiencing Vietnam</div>
			<div class="row">

				<div class="col-md-6">
					<div class="text">
						Our growing collection of exclusive, tailor-made experiences focus on the country heritage with a special feature of craftsmanship ranging from photography, coffee tasting to lacquer and leathery techniques. Starting with Hanoi, schedule your next adventure with ease, and let us take you to its rawest, deepest and also finest secrets, the best way we know how.
					</div>
				</div>
				<div class="col-md-6">
					<div class="video">
						<img src="./images/rewind_video.png">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.intro-video -->

	<!-- Journeys -->
	<section class="journeys">
		<div class="container">
			<div class="header-1 poster-font">Our journeys</div>
			<div class="list">
				<!-- <div class="journey">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="text">
                        <div class="header-2">Hanoi's secrets<br>with film cameras</div>
                        <div class="underline"></div>
                        <div class="description">
                          If you are looking to experience Hanoi’s true beauty through a local perspective, join us and discover the old quarter’s heritage buildings, local life and lesser-known scenery.
                          <br>
                          <ul>
                            <li>Professional guide from exprienced film photographers and travellers</li>
                            <li>Film camera renting Film camera renting Film camera renting</li>
                            <li>01 film roll and film developing package with digital files</li>
                            <li>Free coffee and snacks</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="images">
                        <div class="carousel slide" id="hanoi-secrets" dataride="carousel" data-interval="false">
                          <div class="inner carousel-inner">
                            <div class="carousel-item active">
                              <div class="tour-image">
                                <div class="price">FROM<span>$60</span></div>
                                <h1>Hanoi's secrets</h1>
                                <h2>WITH FILM CAMERAS</h2>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="tour-image">
                                <div class="price">FROM<span>$60</span></div>
                                <h1>Hanoi's secrets</h1>
                                <h2>WITH FILM CAMERAS</h2>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="tour-image">
                                <div class="price">FROM<span>$60</span></div>
                                <h1>Hanoi's secrets</h1>
                                <h2>WITH FILM CAMERAS</h2>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="tour-image">
                                <div class="price">FROM<span>$60</span></div>
                                <h1>Hanoi's secrets</h1>
                                <h2>WITH FILM CAMERAS</h2>
                              </div>
                            </div>
                          </div>

                          <a class="carousel-control-prev" href="#hanoi-secrets" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#hanoi-secrets" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="book-now">
                        <button>BOOK NOW</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="journey">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="images">
                        <div class="carousel slide" id="hanoi-phe-tour" dataride="carousel" data-interval="false">
                          <div class="inner carousel-inner">
                            <div class="carousel-item active">
                              <div class="tour-image">
                                <div class="price">FROM<span>$60</span></div>
                                <h1>Coming soon</h1>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="tour-image">
                                <div class="price">FROM<span>$60</span></div>
                                <h1>Coming soon</h1>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="tour-image">
                                <div class="price">FROM<span>$60</span></div>
                                <h1>Coming soon</h1>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <div class="tour-image">
                                <div class="price">FROM<span>$60</span></div>
                                <h1>Coming soon</h1>
                              </div>
                            </div>
                          </div>

                          <a class="carousel-control-prev" href="#hanoi-phe-tour" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#hanoi-phe-tour" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="text">
                        <div class="header-2">Hanoi Phe tour</div>
                        <div class="underline"></div>
                        <div class="description">
                          If you are looking to experience Hanoi’s true beauty through a local perspective, join us and discover the old quarter’s heritage buildings, local life and lesser-known scenery.
                          <ul>
                            <li>Professional guide from exprienced film photographers and travellers</li>
                            <li>Film camera renting Film camera renting Film camera renting</li>
                            <li>01 film roll and film developing package with digital files</li>
                            <li>Free coffee and snacks</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                      <div class="book-now">
                        <button>BOOK NOW</button>
                      </div>
                    </div>
                  </div>
                </div> -->
			</div>
		</div>
	</section>
	<!-- /.journeys -->

	<!-- Happy customers -->
	<section class="customers">
		<div class="container">
			<div class="header-1 poster-font">Happy customers</div>

			<div class="list">
				<div class="owl-carousel owl-theme">
					<div class="item">
						<div class="customer row" id="1">
							<div class="image col-md-3">
								<img src="./images/rewind_cus_nadia.jpg">
							</div>
							<div class="text col-md-9">
								<div class="quot"><i class="fa fa-quote-left"></i></div>
								<span></span>
								<div class="sign">
									<div class="name">Nadia</div>
									<div class="from">UK</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="customer row" id="2">
							<div class="image col-md-3">
								<img src="./images/rewind_cus_stephanie.jpg">
							</div>
							<div class="text col-md-9">
								<div class="quot"><i class="fa fa-quote-left"></i></div>
								<span></span>
								<div class="sign">
									<div class="name">Stephanie</div>
									<div class="from">USA</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="customer row" id="3">
							<div class="image col-md-3">
								<img src="./images/rewind_cus_yi.jpg">
							</div>
							<div class="text col-md-9">
								<div class="quot"><i class="fa fa-quote-left"></i></div>
								<span></span>
								<div class="sign">
									<div class="name">Yi Sze</div>
									<div class="from">China</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="customer row" id="4">
							<div class="image col-md-3">
								<img src="./images/rewind_cus_david.jpg">
							</div>
							<div class="text col-md-9">
								<div class="quot"><i class="fa fa-quote-left"></i></div>
								<span></span>
								<div class="sign">
									<div class="name">David</div>
									<div class="from">UK</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="customer row" id="5">
							<div class="image col-md-3">
								<img src="./images/rewind_cus_cassandra.jpg">
							</div>
							<div class="text col-md-9">
								<div class="quot"><i class="fa fa-quote-left"></i></div>
								<span></span>
								<div class="sign">
									<div class="name">Cassandra</div>
									<div class="from">UK</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="customer row" id="6">
							<div class="image col-md-3">
								<img src="./images/rewind_cus_duy.jpg">
							</div>
							<div class="text col-md-9">
								<div class="quot"><i class="fa fa-quote-left"></i></div>
								<span></span>
								<div class="sign">
									<div class="name">Duy</div>
									<div class="from">Sweden</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="row">
                  <div class="col-md-4">
                    <div class="customer row">
                      <div class="image col-md-3">
                        <img src="./images/rewind_customer_bg.png">
                      </div>
                      <div class="text col-md-9">
                        <div class="quot"><i class="fa fa-quote-left"></i></div>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                        <div class="sign">
                          <div class="name">Julia</div>
                          <div class="from">London, UK</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="customer row">
                      <div class="image col-md-3">
                        <img src="./images/rewind_customer_bg.png">
                      </div>
                      <div class="text col-md-9">
                        <div class="quot"><i class="fa fa-quote-left"></i></div>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                        <div class="sign">
                          <div class="name">Julia</div>
                          <div class="from">London, UK</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="customer row">
                      <div class="image col-md-3">
                        <img src="./images/rewind_customer_bg.png">
                      </div>
                      <div class="text col-md-9">
                        <div class="quot"><i class="fa fa-quote-left"></i></div>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                        <div class="sign">
                          <div class="name">Julia</div>
                          <div class="from">London, UK</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
			</div>
		</div>
	</section>
	<!-- /.customers -->

	<!-- Bottom banner -->
	<section class="bottom-banner">
		<div class="container">
			<img src="./images/bottom_banner.png">
		</div>
	</section>
	<!-- /.bottom-banner -->
</main>
<!-- /main -->

<!-- Footer -->
@include('frontend.common.footer')
<!-- /footer -->

<script src="./js/common.js"></script>
<script src="./js/rewind_data.js"></script>
<script src="./js/rewind.js"></script>
<script src="./js/lang.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
</body>
