<?php 

    include 'connection.php';
    session_start();

    if (isset($_POST['submit-btn'])) {
      // Escaping user inputs for security
      $name = mysqli_real_escape_string($conn, $_POST['c_fname']);
      $email = mysqli_real_escape_string($conn, $_POST['c_email']);
      $phone_number = mysqli_real_escape_string($conn, $_POST['c_phone_number']);
      $message = mysqli_real_escape_string($conn, $_POST['c_message']);
  
      // Checking if the message already exists
      $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$phone_number' AND message = '$message'") or die('query failed');
  
      if(mysqli_num_rows($select_message) > 0) {
          echo '<p style="color: solid black; font-size: 20px;  text-align: center;">Message already sent!</p>';
      } else {
          //Inserting the message into the database
          $insert_message = "INSERT INTO `message`(`name`, `email`, `number`, `message`) VALUES ('$name', '$email', '$phone_number', '$message')";
          if(mysqli_query($conn, $insert_message)) {
              echo '<p style="color: black; font-size: 20px; text-align: center;">Message sent successfully!</p>';
          } else {
              echo 'Error: ' . mysqli_error($conn);
          }
      }
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

	
	<!-- contact us -->
	<div class="contact-us pages section-padding">
		<div class="container">
			<div class="pages-head">
				<h2>CONTACT US</h2>
			</div>
			<div class="row">
				<div class="col s12">
					<form method="post">
					<div class="p-3 p-lg-5 border">
						<div class="form-group row">
						<div class="col-md-6">
							<label for="c_fname" class="text-black">Your Name</label>
							<input type="text" class="form-control" id="c_fname" name="c_fname" placeholder="Full names" required>
						</div>
						
						</div>
						<div class="form-group row">
						<div class="col-md-12">
							<label for="c_email" class="text-black">Email</label>
							<input type="email" class="form-control" id="c_email" name="c_email" placeholder="example@gmail.com" required>
						</div>
						</div>
						<div class="form-group row">
						<div class="col-md-12">
							<label for="c_subject" class="text-black">Number</label>
							<input type="number" class="form-control" id="c_subject" name="c_phone_number" placeholder="0748***823" required>
						</div>
						</div>

						<div class="form-group row">
						<div class="col-md-12">
							<label for="c_message" class="text-black">Your Message</label>
							<textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control" placeholder="Write your message here" required></textarea>
						</div>
						</div>
						<div class="form-group row">
						<div class="col-lg-12">
							<input name="submit-btn" type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
						</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="about-us-foot">
				<h6><span>Naicer</span>Crotchets</h6>
				<p>Elegant fashion with a twist of.</p>
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
	<script src="js/contact-form.js"></script>
	<script src="js/main.js"></script>

</body>
</html>