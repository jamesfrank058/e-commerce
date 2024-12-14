<?php
$servername = "localhost"; // Usually localhost
$username = "your_username"; // Your MySQL username
$password = "your_password"; // Your MySQL password
$dbname = "your_database"; // The name of the database you want to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close connection
$conn->close();
?>
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

	
	<!-- cart -->
	<div class="cart pages section-padding">
		<div class="container">
			<div class="pages-head">
				<h2>CART</h2>
			</div>
			<div class="cart-content-product">
				
			<div class="row">
					<div class="col s12">
						<div class="cart-details">
							
							<div class="col s7">
								<div class="cart-product">
									<img src="img/yarn7.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="cart-details">
							<div class="col s5">
								<div class="cart-product">
									<h5>Name</h5>
								</div>
							</div>
							<div class="col s7">
								<div class="cart-product">
									<a href="">Jackets Men's</a>
								</div>
							</div>
						</div>
						<div class="cart-details">
							<div class="col s5">
								<div class="cart-product">
									<h5>Quantity</h5>
								</div>
							</div>
							<div class="col s7">
								<div class="cart-product">
									<input type="text" value="1">
								</div>
							</div>
						</div>
						<div class="cart-details">
							<div class="col s5">
								<div class="cart-product">
									<h5>Unit Price</h5>
								</div>
							</div>
							<div class="col s7">
								<div class="cart-product">
									<span>$26.00</span>
								</div>
							</div>
						</div>
						<div class="cart-details">
							<div class="col s5">
								<div class="cart-product">
									<h5>Total Pricey</h5>
								</div>
							</div>
							<div class="col s7">
								<div class="cart-product">
									<span>$26.00</span>
								</div>
							</div>
						</div>
						<div class="cart-details">
							<div class="col s5">
								<div class="cart-product">
									<h5>Action</h5>
								</div>
							</div>
							<div class="col s7">
								<div class="cart-product">
									<a href=""><i class="fa fa-trash"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="checkout.php" class="btn button-default button-fullwidth">CHECKOUT</a>
			</div>
			<div class="cart-shipping">
				<h4>Estimate Shipping and Tax</h4>
				<div class="cart-shipping-content">
					<h5>County</h5>
					 <select class="browser-default">
					    <option>Nairobi</option>
						<option>kiambu</option>
						<option>Nakuru</option>
					  </select>
					<h5>pick up </h5>
					<select class="browser-default">
						<option>Nairobi Cbd</option>
						<option>Thika towm</option>
						<option>Nakuru town</option>
					</select>
					<h5>Zip/Portal Code</h5>
					<input type="text">
					
				</div>
			</div>
			<div class="cart-discount">
				<h4>Discount Codes</h4>
				<div class="cart-discount-content">
					<h5>Enter your coupon code in below</h5>
					<input type="text">
					<div class="btn button-default">Apply Coupon</div>
				</div>
			</div>
			<div class="cart-total">
				<h4>Shopping Cart Total</h4>
				<table>
					<thead>
						<tr>
							<td>Subtotal</td>
							<td>Total</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>$43.00</td>
							<td>$43.00</td>
						</tr>
					</tbody>
				</table>
				<div> 
				<a href="checkout.php" class="btn button-default">Proceed to Checkout</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->
	

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="about-us-foot">
				<h6><span>Naicer</span>Crotchets</h6>
				<p>Elegant fashion with a twist of yarn.</p>
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