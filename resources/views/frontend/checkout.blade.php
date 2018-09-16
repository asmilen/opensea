<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Opensea Cart - Checkout</title>
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
	<link rel="stylesheet" href="./css/checkout.css" type='text/css'>

	<!-- JS-->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/persist-js@0.3.1/src/persist.min.js"></script>
	<script src="../plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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
<nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top">
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	@include('frontend.common.navbar')
</nav>
<!-- /nav -->
<!-- </div> -->

<!-- Main -->
<main>
	<!-- Main header -->
	<section class="main-header py-5">
		<div class="container">
			<h1>YOUR DETAILS</h1>
		</div>
	</section>
	<!-- End main header -->

	<!-- Paypal -->
	<section class="paypal pb-5">
		<div class="container">
			<button><i>Checkout with Paypal</i></button>
			<span class="other pl-4">Or fill in your details below to pay by credit/debit card</span>
		</div>
	</section>
	<!-- End paypal -->

	<!-- Checkout form -->
	<section class="checkout-form">
		<form>
			<div class="container">
				<div class="your-details py-4">
					<h2>Your details</h2>
					<div class="row">
						<div class="form-group my-3 col-md-8 row">
							<label for="title" class="col-md-4">Title*</label>
							<select value="male" class="form-control col-md-8" name="gender" id="gender">
								<option value="male">Mr</option>
								<option value="female">Ms</option>
								<option value="female">Mrs</option>
							</select>
						</div>
						<div class="form-group my-3 col-md-8 row">
							<label for="first-name" class="col-md-4">First name*</label>
							<input id="first-name" class="form-control col-md-8" type="text" name="first_name" required>
						</div>
						<div class="form-group my-3 col-md-8 row">
							<label for="last-name" class="col-md-4">Last name*</label>
							<input id="last-name" class="form-control col-md-8" type="text" name="last_name" required>
						</div>
						<div class="form-group my-3 col-md-8 row">
							<label for="email" class="col-md-4">Email*</label>
							<input id="email" class="form-control col-md-8" type="email" name="email" required>
						</div>

						<div class="my-3 col-md-8 row info">
							<div class="col-md-4"></div>
							<div class="col-md-8">
								<div>We'll send you a confirmation email with your tickets</div>
								<div class="form-check py-3">
									<input class="form-check-input" type="checkbox" value="" id="keep-update">
									<label class="form-check-label" for="keep-update">
										Please keep me updated with offers and information
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="your-address py-4">
					<h2>Your address</h2>
					<h3>Please enter the address to which the cart is registered.</h3>
					<div class="row">
						<div class="form-group col-md-8 my-3 row">
							<label for="address-1" class="col-md-4">Address Line 1*</label>
							<input id="address-1" class="form-control col-md-8" type="text" name="address_line_1" required>
						</div>
						<div class="form-group col-md-8 my-3 row">
							<label for="address-2" class="col-md-4">Address Line 2*</label>
							<input id="address-2" class="form-control col-md-8" type="text" name="address_line_2" required>
						</div>
						<div class="form-group col-md-8 my-3 row">
							<label for="city" class="col-md-4">Town/City*</label>
							<input id="city" class="form-control col-md-8" type="text" name="city" required>
						</div>
						<div class="form-group col-md-8 my-3 row">
							<label for="code" class="col-md-4">Postcode/Zip code*</label>
							<input id="code" class="form-control col-md-8" type="text" name="postcode" required>
						</div>

						<div class="form-group col-md-8 my-3 row">
							<label for="state" class="col-md-4">State</label>
							<input id="state" class="form-control col-md-8" type="text" name="state" >
						</div>

						<div class="form-group col-md-8 my-3 row">
							<label for="country" class="col-md-4">Country</label>
							<select class="form-control col-md-8" name="country" id="country">
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

				<div class="read-term py-4">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="read-term" required>
						<label class="form-check-label" for="read-term" >
							I have read and agree to the <span style="color: red;">Term and Conditions</span> and <span style="color: red;">Privacy Policy</span>*
						</label>
					</div>
				</div>

				<div class="buttons row py-4">
					<div class="back col-md-4">
							<button onclick="location.href='/cart';">BACK</button>
					</div>
					<div class="continue col-md-5 offset-md-3">
						<button>CONTINUE TO SECURE PAYMENT</button>
					</div>
				</div>
			</div>
		</form>
	</section>
	<!-- End checkout form -->

	<!-- Main footer -->
	<section class="footer pb-4">
		<div class="container">
			<div class="text py-2">
				<img src="./images/checkout_secure.png" style="width: 20px;">
				<span>Our checkout is secure and your details are protected</span>
			</div>
			<div class="images py-2">
				<img src="./images/checkout_visa.png">
				<img src="./images/checkout_mastercard.png">
			</div>
		</div>
	</section>
	<!-- End main footer -->
</main>
<!-- End main -->

<!-- Footer -->
@include('frontend.common.footer')
<!-- /footer -->

<script src="./js/common.js"></script>
<script src="./js/checkout_data.js"></script>
<script src="./js/checkout.js"></script>
<script src="./js/lang.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
</body>
