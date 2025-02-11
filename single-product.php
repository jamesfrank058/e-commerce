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
	
	<link rel="shortcut icon" href="img/favicon.png">

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
						<img src="img/cart1.png" alt="">
					</div>
					<div class="col s5">
						<div class="name-price">
							<ul>
								<li><a href="">T-shirt</a></li>
								<li><span>$23.00</span></li>
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

	
	<!-- single product -->
	<div class="single-product pages section-padding">
		<div class="container">
			<div class="row nomar-bottom">
				<div class="col s12">
					<div class="single-product-content">
						<img src="img/jackets-single-product.png" alt="">
						<h4>Jackets Elegant</h4>
						<span class="price">$15</span>
						<h6><span>Availability: In Stock</span></h6>
						<ul class="product-icon-cart">
							<li><a href=""><i class="fa fa-heart"></i></a></li>
							<li><a href=""><i class="fa fa-exchange"></i></a></li>
							<li><a href=""><i class="fa fa-eye"></i></a></li>
							<li><a href="" class="sp-cart"><i class="fa fa-shopping-cart"></i>ADD TO CART</a></li>
						</ul>
						<ul class="tabs">
							<li class="tab col s4"><a class="active" href="#product-description"><h3>Description</h3></a></li>
							<li class="tab col s4"><a href="#product-review"><h3>Review</h3></a></li>
						</ul>
						<div class="tabs-content">
							<div id="product-description">
								<div class="product-desciption">
								<div class="description-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim hic itaque, placeat deserunt perspiciatis iste minus maxime! Perferendis magni quas dolor suscipit asperiores impedit, numquam ducimus nobis sapiente, non atque.</p>
								</div>
							</div>
							</div>
							<div id="product-review">
								<div class="prodcuct-review">
									<div class="review-content">
										<h5>John Doe</h5>
										<span>2 April, 2016</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sunt dolore, magni. Perferendis molestiae iusto, ipsum iure molestias odio nesciunt ducimus, quas consectetur, adipisci, rerum dicta. Ipsa blanditiis pariatur dolor.</p>
										<div class="write-review">
											<h4>Write Review</h4>
											<div class="row">
												<form class="col s12">
													<div class="input-field">
														<h5>Name</h5>
														<input type="text" class="validate" required>
													</div>
													<div class="input-field">
														<h5>Email</h5>
														<input type="email" class="validate" required>
													</div>
													<div class="input-field">
														<h5>Your Message</h5>
														<textarea name="textarea-message" id="textarea1" cols="30" rows="10" class="materialize-textarea"></textarea>
													</div>
													<div class="btn button-default">SEND REVIEW</div>
												</form>
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
	<!-- end single product -->
	

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="about-us-foot">
				<h6><span>Naicer</span>Crotchets</h6>
				<p>is a lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
			<div class="social-media">
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-google"></i></a>
				<a href=""><i class="fa fa-linkedin"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
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