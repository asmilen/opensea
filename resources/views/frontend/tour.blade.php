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
	<meta name="csrf-token" content="{{ csrf_token() }}">

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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Bootstrap 4 -->
	<!-- <script src="frontend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Theme styles -->
	<link rel="stylesheet" href="frontend/dist/css/tours.css">
	<!-- <link rel="stylesheet" type="text/css" media="screen and (min-width: 1367px)" href="frontend/dist/css/tours_min_1367px.css"> -->
	<!-- <link rel="stylesheet" type="text/css" media="screen and (max-width: 1024px)" href="frontend/dist/css/tours_max_1024px.css"> -->
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 768px)" href="frontend/dist/css/tours_max_768px.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="frontend/plugins/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
	<!-- Theme style -->
	<!-- <link rel="stylesheet" href="frontend/dist/css/adminlte.min.css"> -->
	<!-- iCheck -->
	<!-- <link rel="stylesheet" href="frontend/plugins/iCheck/flat/blue.css"> -->

	<!-- bootstrap wysihtml5 - text editor -->
	<!-- <link rel="stylesheet" href="frontend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
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
		<a class="item" href="frontend/index.html">
			HOME
			<div class="underline"></div>
		</a>
		<a class="item" href="bus.html">
			HOP ON HOP OFF
			<div class="underline"></div>
		</a>
		<a class="item active" href="#">
			HANOI RETREAT
			<div class="underline"></div>
		</a>
		<a class="item" href="faq.html">
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
			<img src="frontend/dist/img/banner.png" alt="banner">
		</section>
		<!-- /.banner -->

		<!-- Tours -->
		<section class="tours">
			<div class="title">
				<div class="dash"></div>
				<span class="text">Tours</span>
			</div>
			<div class="list">
				<div class="list-row">
					<!-- <li class="list-item left">
                        <img src="frontend/dist/img/tour-image.png">
                        <div class="tour-info">
                            <div class="name">HANOI'S SECRETS WITH FILM CAMERAS HANOI'S SECRETS WITH FILM CAMERAS</div>
                            <div class="underline"></div>
                            <ul class="descriptions">
                                <li class="description">Professional guide from experience film photographers and travellers film photographers and travellers film photographers and travellers film photographers and travellers</li>
                                <li class="description">Film camera renting</li>
                                <li class="description">1 film roll and film developing package with digital files</li>
                                <li class="description">Free coffee and snacks</li>
                            </ul>
                            <div class="book">
                                <div class="cost">FROM $<span>75</span></div>
                                <button class="book-now">BOOK NOW</button>
                            </div>
                        </div>
                    </li>
                    <li class="list-item center">
                        <img src="frontend/dist/img/tour-image.png">
                        <div class="tour-info">
                            <div class="name">HANOI'S SECRETS WITH FILM CAMERAS</div>
                            <div class="underline"></div>
                            <ul class="descriptions">
                                <li class="description">Professional guide from experience film photographers and travellers</li>
                                <li class="description">Film camera renting</li>
                                <li class="description">1 film roll and film developing package with digital files</li>
                                <li class="description">Free coffee and snacks</li>
                            </ul>
                            <div class="book">
                                <div class="cost">FROM $<span>75</span></div>
                                <button class="book-now">BOOK NOW</button>
                            </div>
                        </div>
                    </li>
                    <li class="list-item coming-soon right">
                        <img src="frontend/dist/img//coming-soon.png">
                        <div class="tour-info">
                            <div class="name">COMING SOON</div>
                            <div class="underline"></div>
                        </div>
                    </li>
                    <li class="list-item coming-soon left">
                        <img src="frontend/dist/img/coming-soon.png">
                        <div class="tour-info">
                            <div class="name">COMING SOON</div>
                            <div class="underline"></div>
                        </div>
                    </li>
                    <li class="list-item coming-soon center">
                        <img src="frontend/dist/img/coming-soon.png">
                        <div class="tour-info">
                            <div class="name">COMING SOON</div>
                            <div class="underline"></div>
                        </div>
                    </li> -->
				</div>

				<!-- Indicator -->
				<div class="indicator">
				</div>
				<!-- /.indicator -->

				<!-- Slider -->
				<div class="prev"><i class="fa fa-chevron-circle-left"></i></div>
				<div class="next"><i class="fa fa-chevron-circle-right"></i></div>
				<!-- /Slider -->
			</div>
		</section>
		<!-- /.tours -->

		<!-- Testinomial -->
		<section class="testinomial">
			<div class="title">
				<div class="dash"></div>
				<span class="left-dash">-----------------------------------------</span>
				<span class="text">Testinomial</span>
				<span class="right-dash">-----------------------------------------</span>
			</div>
			<div class="list">
				<div class="left item active myfade" id="0">
					<div class="avatar"><img src="frontend/dist/img/testinomial1.png"></div>
					<div class="testinomial-info">
						<div class="name">Ong Nguyen Van A</div>
						<div class="description"> Photoshop CS6 Portable ( Chạy ngay không cần cài đặt ) Do nhu cầu download phần mềm Photoshop luôn rất lớn, nhưng không phải bạn nào Photoshop CS6 Portable ( Chạy ngay không cần cài đặt ) Do nhu cầu download phần mềm Photoshop luôn rất lớn, nhưng không phải bạn nào</div>
					</div>
				</div>
				<div class="vertical-bar"></div>
				<div class="center item myfade" id="1">
					<div class="avatar"><img src="frontend/dist/img/testinomial1.png"></div>
					<div class="testinomial-info">
						<div class="name">Ong Nguyen Van Hung</div>
						<div class="description"> Photoshop CS6 Portable ( Chạy ngay không cần cài đặt ) Do nhu cầu download phần mềm Photoshop luôn rất lớn, nhưng không phải bạn nào Photoshop CS6 Portable ( Chạy ngay không cần cài đặt ) Do nhu cầu download phần mềm Photoshop luôn rất lớn, nhưng không phải bạn nào</div>
					</div>
				</div>
				<div class="vertical-bar"></div>
				<div class="right item myfade"  id="2">
					<div class="avatar"><img src="frontend/dist/img/testinomial1.png"></div>
					<div class="testinomial-info">
						<div class="name">Ong Nguyen Van Hung</div>
						<div class="description"> Photoshop CS6 Portable ( Chạy ngay không cần cài đặt ) Do nhu cầu download phần mềm Photoshop luôn rất lớn, nhưng không phải bạn nào Photoshop CS6 Portable ( Chạy ngay không cần cài đặt ) Do nhu cầu download phần mềm Photoshop luôn rất lớn, nhưng không phải bạn nào</div>
					</div>
				</div>

				<!-- Indicator -->
				<div class="indicator">
					<div class="dot active" id="0"></div>
					<div class="dot" id="1"></div>
					<div class="dot" id="2"></div>
				</div>
				<!-- /.indicator -->

				<!-- Slider -->
				<div class="prev"><i class="fa fa-chevron-circle-left"></i></div>
				<div class="next"><i class="fa fa-chevron-circle-right"></i></div>
				<!-- /Slider -->
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
<!-- /.main -->

<!-- Tour detail background -->
<div class="tour-detail-background"></div>
<!-- /.tour-detail-background -->

<!-- Tour detail modal -->
<div class="tour-detail ">
	<!-- Images and description -->
	<div class="full-info left">
		<!-- Images -->
		<div class="images-slider">
			<div class="images">
				<img src="frontend/dist/img/tour-detail-image.png" class="fade">
				<img src="frontend/dist/img/tour-detail-image.png" class="hidden fade">
				<img src="frontend/dist/img/tour-detail-image.png" class="hidden fade">
			</div>
			<!-- Dots -->
			<div class="dots">
				<div class="dot" id="0"></div>
				<div class="dot" id="1"></div>
				<div class="dot" id="2"></div>
			</div>
			<!-- /.dots -->
		</div>
		<!-- /.images -->

		<!-- Info -->
		<div class="info">
			<div class="name">HANOI'S SECRETS WITH FILM CAMERAS</div>
			<div class="underline"></div>
			<div class="description">
				This site uses cookies to deliver our services and to show you relevant ads and job listings. By using our site, you acknowledge that you have read and understand our Cookie Policy, Privacy Policy, and our Terms of Service. Your use of Stack Overflow’s Products and Services, including the Stack Overflow Network, is subject to these policies and terms.<br>
				This site uses cookies to deliver our services and to show you relevant ads and job listings. By using our site, you acknowledge that you have read and understand our Cookie Policy, Privacy Policy, and our Terms of Service. Your use of Stack Overflow’s Products and Services, including the Stack Overflow Network, is subject to these policies and terms.<br>
				This site uses cookies to deliver our services and to show you relevant ads and job listings. By using our site, you acknowledge that you have read and understand our Cookie Policy, Privacy Policy, and our Terms of Service. Your use of Stack Overflow’s Products and Services, including the Stack Overflow Network, is subject to these policies and terms.
			</div>
		</div>
		<!-- /.info -->
	</div>
	<!-- /.full-info -->

	<!-- Book -->
	<div class="book right">
		<!-- Price -->
		<div class="price">
			<label>PRICE</label>
			<div class="underline"></div>
			<ul>
				<li class="single">
					<div class="type">SINGLE BOOKING</div>
					<div>
						<span class="cost">$<span class="number">85</span></span>
						<span class="pax">/PAX</span>
					</div>
				</li>
				<li class="group2">
					<div class="type">GROUP 2</div>
					<div>
						<span class="cost">$<span class="number">85</span></span>
						<span class="pax">/PAX</span>
					</div>
				</li>
				<li class="group5">
					<div class="type">GROUP 3-5</div>
					<div>
						<span class="cost">$<span>85</span class="number"></span>
						<span class="pax">/PAX</span>
					</div>
				</li>
			</ul>
			<div class="max">MAXIMUM: GROUP OF 5</div>
		</div>
		<!-- /.price -->

		<!-- What's include -->
		<div class="include">
			<label>WHATS'S INCLUDE</label>
			<div class="underline"></div>
			<ul>
				<li>Professional guide from exprienced film photographers and travellers</li>
				<li>Film camera renting</li>
				<li>1 film roll and film developing package with digital files</li>
				<li>Free coffee and snacks</li>
			</ul>
		</div>
		<!-- /.include -->

		<!-- Add-on fees -->
		<div class="addon">
			<label>ADD-ON FEES</label>
			<div class="underline"></div>
			<ul>
				<li>Film camera renting (200,000) VND</li>
				<li>Extra film roll and film development</li>
				<li>Transportation if needed</li>
			</ul>
		</div>
		<!-- /.addon -->

		<!-- Booking -->
		<div class="booking">
			<div class="title">BOOKING INFO</div>
			<div class="underline"></div>
			<form>
				<input type="hidden" name="tour_id" id="backend_id">
				<ul>
					<div class="input full-name">
						<label>Full Name (*)</label><br>
						<input type="text" name="name" required>
						<div class="underline"></div>
					</div>

					<div class="input email">
						<label>Email (*)</label><br>
						<input type="email" name="email" required>
						<div class="underline"></div>
					</div>

					<div class="input phone">
						<label>Phone/WhatsApp/Kacaotalk(*)</label><br>
						<input type="text" name="contact" required>
						<div class="underline"></div>
					</div>

					<div class="nationality input row">
						<!-- <label class="col-md-5 col-xs-12">Nationality&nbsp;&nbsp;</label> -->
						<label class="">Nationality&nbsp;&nbsp;</label>
						<select class="">
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

					<div class="date input row">
						<label class="">Choose Date</label>
						<input class="" type="date" name="date">
					</div>

					<div class="amount input">
						<label>Number of people&nbsp;&nbsp;</label>
						<input type="number" max="5" min="1" name="number_people">
					</div>

					<div class="other input">
						<label>Special Request</label><br>
						<textarea rows="2" name="special_request"></textarea>
					</div>
				</ul>
				<button type="submit">BOOK NOW</button>
			</form>
			<div style="color: red; font-size: 12px; padding-top: 10px;" id="error"></div>
		</div>
		<!-- /.booking -->
	</div>
	<!-- /.book -->

	<!-- Slider -->
	<div class="prev"><i class="fa fa-chevron-circle-left"></i></div>
	<div class="next"><i class="fa fa-chevron-circle-right"></i></div>
	<!-- /.slider -->

	<!-- Close -->
	<div class="close-detail">&times;</div>
	<!-- /.close-detail -->
</div>
<!-- /.tour-detail -->

<!-- jQuery -->
<script src="frontend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Content -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="frontend/dist/js/tours_data.js"></script>
<script src="frontend/dist/js/tours.js"></script>
<!-- UI -->
<script src="frontend/dist/js/tours_ui.js"></script>
</body>
</html>