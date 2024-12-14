
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <div class="site-brand">
			<a href="home.php" class="das"><h1><span>Naicer</span>Crotchets</h1></a>
		</div>
    <title>Checkout - Naicer Crochets</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>payment</h1>
    
    <div id="checkout-container">
        <label for="payment-method">Select Payment Method:</label>
        <select id="payment-method" onchange="showPaymentFields()">
            <option value="">--Choose Payment Method--</option>
            <option value="paypal">PayPal</option>
            <option value="mpesa">Mpesa</option>
            <option value="card">Bank/Card Payment</option>
        </select>

        <div id="paypal-fields" class="payment-fields" style="display: none;">
            <label for="paypal-pin">Enter PayPal PIN:</label>
            <input type="password" id="paypal-pin">
        </div>

        <div id="mpesa-fields" class="payment-fields" style="display: none;">
            <label for="mpesa-number">Enter Mpesa Phone Number:</label>
            <input type="text" id="mpesa-number">
            <p>A prompt will be sent to your phone for confirmation.</p>
        </div>

        <div id="card-fields" class="payment-fields" style="display: none;">
            <label for="card-number">Enter Card Number:</label>
            <input type="text" id="card-number">
        </div>

        <button onclick="processPayment()">Pay Now</button>
    </div>

    <script src="pay-Now.js"></script>
</body>
</html>
