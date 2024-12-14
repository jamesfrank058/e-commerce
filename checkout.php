<?php 

    include 'connection.php';
    session_start();

    if (isset($_POST['pay Now-btn'])) {
      // Escaping user inputs for security
      $name = mysqli_real_escape_string($conn, $_POST['c_fname']);
      $email = mysqli_real_escape_string($conn, $_POST['c_email']);
      $phone = mysqli_real_escape_string($conn, $_POST['c_phone']);
      $totalprice = mysqli_real_escape_string($conn, $_POST['c_total price']);
	  $location = mysqli_real_escape_string($conn, $_POST['c_location']);
	  $notes = mysqli_real_escape_string($conn, $_POST['c_notes']);

      // Checking if the message already exists
	  $stmt = $conn->prepare("INSERT INTO checkout (name, phone, location, total_price, notes) VALUES (?, ?, ?, ?, ?)");
	  $stmt->bind_param("ssssd", $name, $phone, $location, $total_price, $notes);
  
	  // Execute SQL statement
	  if ($stmt->execute()) {
		header('Location: pay-Now.php');
	  } else {
		  echo "Error: " . $stmt->error;
	  }
  
	  // Close statement and connection
	  $stmt->close();
	  $conn->close();
  }
        
  
  // Close connection
  mysqli_close($conn);
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

	
	<!-- checkout -->
	<div class="checkout pages section-padding">
		<div class="container">
			<div class="pages-head">
				<h2>CHECKOUT</h2>
			</div>
			<div class="checkout-content">
				<div class="row">
					<div class="col s12">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
								<div class="collapsible-header active"><h5>1 - Checkout Method</h5></div>
								<div class="collapsible-body">
									<h6>Checkout as a Guest</h6>
									<form action="#" class="checkout-radio">
										<p>
											<input type="radio" class="with-gap" id="guest-checkout" name="group1">
											<label for="guest-checkout"><span>Guest Checkout</span></label>
										</p>
									</form>
								</div>
							</li>
							<li>
								<div class="collapsible-header"><h5> Billing Information</h5></div>
								<div class="collapsible-body">
									<div class="billing-information">
										<form action="#">
											<div class="input-field">
												<h5>Name*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>Email*</h5>
												<input type="email" class="validate" required>
											</div>
											<div class="input-field">
												<h5>Phone</h5>
												<input type="text" class="validate">
											</div>
											
											<div class="input-field">
												<h5>location*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>tatal price*</h5>
												<input type="text" class="validate" required>
											</div>
											
											<div class="input-field">
												<h5>notes*</h5>
												<input type="number" class="validate" required>
											</div>
											<a href="" class="btn button-default">Pay Now</a>
										</form>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	
	<!-- scripts -->
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>