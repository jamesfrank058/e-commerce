<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Naicer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="HandheldFriendly" content="True">
	
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="css/materialize.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	
	<link rel="shortcut icon" href="img/bg1.jpg">

</head>
<body>

	<!-- navbar top -->
	<div class="navbar-top">
		<div class="side-nav-panel-left">
			<a href="#" data-activates="slide-out-left" class="side-nav-left"><i class="fa fa-bars"></i></a>
		</div>
		<!-- site brand	 -->
		<div class="site-brand">
			<a href="home.php" class="das"><h1><span>Naicer</span>Crotchets</h1></a>
		</div>
		<!-- end site brand	 -->
		<div class="side-nav-panel-right">
			<a href="cart.php" data-activates="slide-out-right" class="side-nav-right"><i class="fa fa-shopping-cart"></i><span>2</span></a>
		</div>
	</div>


	<!-- side nav left-->
	<div class="side-nav-panel-left">
		<ul id="slide-out-left" class="side-nav side-nav-panel">
			<li><a href="home.php"><h1><span>Naicer</span>Crotchets</h1></a></li>
			<li><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
			<li><a href="single-product.php"><i class="fa fa-eye"></i>Single Product</a></li>
			<li><a href="cart.php"><i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
			<li><a href="checkout.php"><i class="fa fa-credit-card"></i>Checkout</a></li>
			<li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
			<li><a href="contact.php"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
			<li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
			<li><a href="register.php"><i class="fa fa-user-plus"></i>Register</a></li>
		</ul>
	</div>


	<!-- side nav right -->
	<div class="side-nav-panel-right">
		<ul id="slide-out-right" class="side-nav side-nav-cart">
			<li>
				<div class="row">
					<div class="col s5">
						<img src="img/top1.jpg" alt="">
					</div>
					<div class="col s5">
						<div class="name-price">
							<ul>
								<li><a href="">summer top</a></li>
								<li><span>kes650.00</span></li>
							</ul>
						</div>
					</div>
					<div class="col s2">
						<div class="remove">
							<a href=""><i class="fa fa-remove"></i></a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="row">
					<div class="col s5">
						<img src="img/cart2.png" alt="">
					</div>
					<div class="col s5">
						<div class="name-price">
							<a href="">Jeans</a>
							<span>$25.00</span>
						</div>
					</div>
					<div class="col s2">
						<div class="remove">
							<a href=""><i class="fa fa-remove"></i></a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="total-price">
					<h5>TOTAL : $48.00</h5>
				</div>
			</li>
			<li>
				<div class="button-cart">
					<a href="checkout.php" class="btn button-default">CHECKOUT</a>
					<a href="cart.php" class="btn button-default">GO TO CART</a>
				</div>
			</li>
		</ul>
	</div>


	<!-- slider -->
	<div class="slider">
		
		<ul class="slides">
			<li>
				<img src="img/yarn1.jpg" alt="">
				<div class="caption slider-content  center-align">
					<h2> ELEGANt FASHION WITH A TWIST OF YARN</h2>
					<h4></h4>
					<a href="" class="btn button-default">SHOP NOW</a>
				</div>
			</li>
			<li>
				<img src="img/yarn2.jpg" alt="">
				<div class="caption slider-content center-align">
					<h2>Eunique and classy</h2>
					<h4></h4>
					<a href="" class="btn button-default">SHOP NOW</a>
				</div>
			</li>
			<li>
				<img src="img/yarn3.jpg" alt="">
				<div class="caption slider-content center-align">
					<h2>HANDMADE WITH LOVE</h2>
					<h4></h4>
					<a href="" class="btn button-default">SHOP NOW</a>
				</div>
			</li>
		</ul>

	</div>
	<!-- end slider -->




	<!-- new and best seller -->
	<div class="new-best-product-shop section-padding">
		<div class="container">
			<div class="row  nomar-bottom">
				<div class="col s12">
					<ul class="tabs">
						<li class="tab col s4"><a class="active" href="#new"><h3>NEW</h3></a></li>
						<li class="tab col s4"><a href="#best-seller"><h3>BEST SELLER</h3></a></li>
					</ul>
					<div class="tabs-content">
						<div id="new">
							<div class="row">
								<div class="col s6">
									<div class="new-best-product-content">
										<img src="img/bandana.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Bandana</a></h5>
											<h4><a href="">kes 450</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="new-best-product-content">
										<img src="img/buckethut.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart" ></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Buckethut</a></h5>
											<h4><a href="">kes 750</a></h4>
										</div>
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col s6">
									<div class="new-best-product-content">
										<img src="img/2peace2.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">2Peace sets</a></h5>
											<h4><a href="">kes 1500</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="new-best-product-content">
										<img src="img/dress1.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Dresses</a></h5>
											<h4><a href="">kes 1300</a></h4>
										</div>
									</div>
								</div>	
							</div>
							<a href="" class="btn button-default">VIEW MORE</a>
						</div>
						<div id="best-seller">
							<div class="row">
								<div class="col s6">
									<div class="new-best-product-content">
										<img src="img/beanies.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Beanies</a></h5>
											<h4><a href="">kes 600</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="new-best-product-content">
										<img src="img/b beanie.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Bunny Beanie</a></h5>
											<h4><a href="">kes 750</a></h4>
										</div>
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col s6">
									<div class="new-best-product-content">
										<img src="img/tops.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Summer Tops</a></h5>
											<h4><a href="">kes 800</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="new-best-product-content">
										<img src="img/cardigan.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Cardigans</a></h5>
											<h4><a href="">kes 3500</a></h4>
										</div>
									</div>
								</div>	
							</div>	
							<a href="" class="btn button-default">VIEW MORE</a>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	
	<!-- promo discount -->
	<div class="promo-discount section-padding">
		<div class="container">
			<h3>See product discount up to 80%</h3>
			<p>DONT MISS OUT!!</p>
			<a href="" class="btn button-default">SEE NOW</a>
		</div>
	</div>


	<!-- product shop -->
	<div class="product-shop section-padding">
		<div class="container">
			<div class="row nomar-bottom">
				<div class="col s12">
					<div class="tabs-content">
						<div id="jackets">
							<div class="row">
								<div class="col s6">
									<div class="product-content">
										<img src="img/tote bag.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Tote Bag</a></h5>
											<h4><a href="">kes 500</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="product-content">
										<img src="img/bow bag.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Bow bags</a></h5>
											<h4><a href="">kes 1000</a></h4>
										</div>
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col s6">
									<div class="product-content">
										<img src="img/headband.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Headbands</a></h5>
											<h4><a href="">KES 350</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="product-content">
										<img src="img/hand warmers.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Hand warmers</a></h5>
											<h4><a href="">kes 350</a></h4>
										</div>
									</div>
								</div>	
							</div>
							<a href="" class="btn button-default">VIEW MORE</a>	
						</div>
						<div id="t-shirt">
							<div class="row">
								<div class="col s6">
									<div class="product-content">
										<img src="img/leg warmers.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Leg warmers</a></h5>
											<h4><a href="">kes 450</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="product-content">
										<img src="img/dress2.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Dresses</a></h5>
											<h4><a href="">kes 1300</a></h4>
										</div>
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col s6">
									<div class="product-content">
										<img src="img/beanie 1.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Beanies</a></h5>
											<h4><a href="">kes 600</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="product-content">
										<img src="img/cardigan2.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Cardigans</a></h5>
											<h4><a href="">kes 3500</a></h4>
										</div>
									</div>
								</div>	
							</div>	
							<a href="" class="btn button-default">VIEW MORE</a>
						</div>
						<div id="jeans">
							<div class="row">
								<div class="col s6">
									<div class="product-content">
										<img src="img/top2.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Tops</a></h5>
											<h4><a href="">kes 800</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="product-content">
										<img src="img/skirt.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Skirts</a></h5>
											<h4><a href="">kes 1000</a></h4>
										</div>
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col s6">
									<div class="product-content">
										<img src="img/hair bow.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Hair Bows</a></h5>
											<h4><a href="">kes 450</a></h4>
										</div>
									</div>
								</div>	
								<div class="col s6">
									<div class="product-content">
										<img src="img/scruncies.jpg" alt="">
										<div class="product-cart">
											<ul class="i-pro-top">
												<li><a href=""><i class="fa fa-heart"></i></a></li>
												<li><a href=""><i class="fa fa-exchange"></i></a></li>
												<li><a href=""><i class="fa fa-eye"></i></a></li>
											</ul>
											<ul class="i-pro-bottom">
												<li><a href=""><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></li>
											</ul>
										</div>
										<div class="product-details">
											<h5><a href="">Scrunchies</a></h5>
											<h4><a href="">kes 250</a></h4>
										</div>
									</div>
								</div>	
							</div>	
							<a href="" class="btn button-default">VIEW MORE</a>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="about-us-foot">
				<h6><span>Naicer</span>Crotchets</h6>
				<p>Elegant fashion with a twist of yarn</p>
			</div>
			<div class="social-media">
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-google"></i></a>
				<a href=""><i class="fa fa-linkedin"></i></a>
				<a href="https://www.instagram.com/naicercrochets_"><i class="fa fa-instagram"></i></a>
			</div>
			<div class="payment">
				<ul>
					<li><img src="img/paypal.png" alt=""></li>
					<li><img src="img/mastercard.png" alt=""></li>
					<li><img src="img/americanexpress.png" alt=""></li>
					<li><img src="img/visaelectron.png" alt=""></li>
				</ul>
			</div>
			<div class="copyright">
				<span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Naicer Crotches | made by Kadot</span>
			</div>
		</div>
	</div>
	
	<!-- scripts -->
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>