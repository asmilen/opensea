<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Opensea Cart</title>
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
	<link rel="stylesheet" href="./css/cart.css" type='text/css'>
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
	<!-- First banner -->
	<section class="first-banner">
		<div class="container">
			<h1>YOUR CART</h1>
			<h2>({{ $cartCount }}) items</h2>
		</div>
	</section>
	<!-- End first banner -->

	<!-- Second banner -->
	<section class="second-banner">
		<div class="container">
			Save 10% when pre-book online with code
		</div>
	</section>
	<!-- End second banner -->

	<!-- Cart info -->
	<section class="cart-info">
		<div class="container">
			<div class="row">
				<div class="col-md-8 list-item">
					<table>
						<thead>
						<tr>
							<th>PRODUCT</th>
							<th>DESCRIPTION</th>
							<th class="price">PRICE</th>
							<th>QUANTITY</th>
							<th>SUBTOTAL</th>
						</tr>
						</thead>
						<tbody>
						<!-- <tr>
                          <td class="product"><img src="./images/bonbon_logo.png"></td>
                          <td class="desc">
                            <div class="name">Classic package</div>
                            <div class="type">Adult</div>
                            <div class="type">Child</div>
                          </td>
                          <td class="prices">
                            <br>
                            <div class="price">
                              <span class="currency">VND</span>
                              <span class="number">350,000</span>
                            </div>
                            <div class="price">
                              <span class="currency">VND</span>
                              <span class="number">350,000</span>
                            </div>
                          </td>
                          <td class="quantities">
                            <br>
                            <div class="quantity">1</div>
                            <div class="quantity">1</div>
                          </td>
                          <td class="subtotal">
                            <div class="price">
                              <span class="currency">VND</span>
                              <span class="number">700,000</span>
                            </div>
                          </td>
                          <td class="action">
                            <a>REMOVE</a>
                          </td>
                        </tr>

                        <tr>
                          <td class="product"><img src="./images/bonbon_logo.png"></td>
                          <td class="desc">
                            <div class="name">Classic package</div>
                            <div class="type">Adult</div>
                            <div class="type">Child</div>
                          </td>
                          <td class="prices">
                            <br>
                            <div class="price">
                              <span class="currency">VND</span>
                              <span class="number">350,000</span>
                            </div>
                            <div class="price">
                              <span class="currency">VND</span>
                              <span class="number">350,000</span>
                            </div>
                          </td>
                          <td class="quantities">
                            <br>
                            <div class="quantity">1</div>
                            <div class="quantity">1</div>
                          </td>
                          <td class="subtotal">
                            <div class="price">
                              <span class="currency">VND</span>
                              <span class="number">700,000</span>
                            </div>
                          </td>
                          <td class="action">
                            <a>REMOVE</a>
                          </td>
                        </tr>

                        <tr>
                          <td class="product"><img src="./images/bonbon_logo.png"></td>
                          <td class="desc">
                            <div class="name">Classic package</div>
                            <div class="type">Adult</div>
                            <div class="type">Child</div>
                          </td>
                          <td class="prices">
                            <br>
                            <div class="price">
                              <span class="currency">VND</span>
                              <span class="number">350,000</span>
                            </div>
                            <div class="price">
                              <span class="currency">VND</span>
                              <span class="number">350,000</span>
                            </div>
                          </td>
                          <td class="quantities">
                            <br>
                            <div class="quantity">1</div>
                            <div class="quantity">1</div>
                          </td>
                          <td class="subtotal">
                            <div class="price">
                              <span class="currency">VND</span>
                              <span class="number">700,000</span>
                            </div>
                          </td>
                          <td class="action">
                            <a>REMOVE</a>
                          </td>
                        </tr> -->

						</tbody>
					</table>
				</div>

				<div class="col-md-4 order">
					<h1>ORDER SUMMARY</h1>

					<div class="row total">
						<div class="col-6 label">ORDER TOTAL</div>
						<div class="col-6">
							<div class="price">
								<span class="currency">VND</span>
								<span class="number">7,300,000</span>
							</div>
						</div>
					</div>

					<!-- <div class="row promotion">
                      <div class="col-6 label">PROMOTION CODE</div>
                      <div class="col-6">
                        <div class="price">
                          <span class="number">-700,000</span>
                        </div>
                      </div>
                      <form>
                        <input type="text" name="promotion_code" placeholder="ENTER CODE">
                        <button type="submit">APPLY</button>
                      </form>
                    </div> -->

					<div class="row actual-total">
						<div class="col-6 label">ESTIMATED TOTAL</div>
						<div class="col-6">
							<div class="price">
								<span class="currency">VND</span>
								<span class="number">7,300,000</span>
							</div>
						</div>
					</div>

					<div class="checkout">
						<button onclick="location.href='/checkout';">CHECKOUT SECURELY</button>
					</div>

					<div class="row payment-methods">
						<div class="col-6 label">PAYMENT METHODS</div>
						<div class="col-6 list">
							<img src="./images/visa.png">
							<img src="./images/mastercard.png">
							<img src="./images/paypal.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End cart info -->
</main>
<!-- End main -->

<!-- Footer -->
@include('frontend.common.footer')
<!-- /footer -->

<script src="./js/common.js"></script>
<script src="./js/cart_data.js"></script>
<script src="./js/cart.js"></script>
<script src="./js/lang.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
</body>
