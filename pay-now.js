function showPaymentFields() {
    const paymentMethod = document.getElementById("payment-method").value;

    // Hide all payment fields
    document.getElementById("paypal-fields").style.display = "none";
    document.getElementById("mpesa-fields").style.display = "none";
    document.getElementById("card-fields").style.display = "none";

    // Show selected payment field
    if (paymentMethod === "paypal") {
        document.getElementById("paypal-fields").style.display = "block";
    } else if (paymentMethod === "mpesa") {
        document.getElementById("mpesa-fields").style.display = "block";
    } else if (paymentMethod === "card") {
        document.getElementById("card-fields").style.display = "block";
    }
}

function processPayment() {
    const paymentMethod = document.getElementById("payment-method").value;

    if (!paymentMethod) {
        alert("Please select a payment method.");
        return;
    }

    // Handle payment process based on selected method
    if (paymentMethod === "paypal") {
        const paypalPin = document.getElementById("paypal-pin").value;
        if (!paypalPin) {
            alert("Please enter your PayPal PIN.");
            return;
        }
        // Simulate PayPal payment processing
        alert("Processing PayPal payment...");
        setTimeout(() => {
            alert("PayPal payment successful! Thank you for your purchase.");
            completeOrder();
        }, 2000);

    } else if (paymentMethod === "mpesa") {
        const mpesaNumber = document.getElementById("mpesa-number").value;
        if (!mpesaNumber) {
            alert("Please enter your Mpesa phone number.");
            return;
        }
        // Simulate Mpesa payment prompt
        alert("Sending Mpesa prompt to your phone...");
        setTimeout(() => {
            const confirm = window.confirm("Enter your Mpesa PIN on your phone to complete the payment.");
            if (confirm) {
                alert("Mpesa payment successful! Thank you for your purchase.");
                completeOrder();
            } else {
                alert("Mpesa payment failed. Please try again.");
            }
        }, 3000);

    } else if (paymentMethod === "card") {
        const cardNumber = document.getElementById("card-number").value;
        if (!cardNumber) {
            alert("Please enter your card number.");
            return;
        }
        // Simulate Card payment processing
        alert("Processing card payment...");
        setTimeout(() => {
            alert("Card payment successful! Thank you for your purchase.");
            completeOrder();
        }, 2000);
    }
}

function completeOrder() {
    // Redirect to an order confirmation page or show a receipt
    window.location.href = "order_confirmation.html";
}
