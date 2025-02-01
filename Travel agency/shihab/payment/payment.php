<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        
        header {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: center;
    padding: 12px 0;
    font-size: 24px;
    position: fixed;
    top: 0;
    width: 100%;
}
header a{
    color: #fff;
            text-decoration: none;
            padding: 0 15px;
            font-size: 18px;
            transition: color 0.3s ease;
}
header a:hover {
            color: #ff6600;
        }
        h1{
            padding-top: 80px;
        }
        form {
            display: inline-block;
            width: 40%;
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        label {
            font-weight: bold;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="radio"] {
            margin-bottom: 10px;
        }
        .payment-option {
            margin-bottom: 20px;
        }
        #mobileOptions, #cardOptions {
            display: none;
            margin-top: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            font-size: 15px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #838383;
        }
        .amount-display {
            font-size: 20px;
            margin-top: 30px ;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 12px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>


<header>
    <a href="../home/home.php">Home</a>
    <a href="../home/#hero">Destinations</a>
    <a href="../home/#about-us">About Us</a>
    <a href="../home/#contact-us">Contact Us</a>
</header>
    <h1>Payment Page</h1>
    <?php
    session_start();
    $amount= $_SESSION['offerdetail'][0]['ammount'];
    ?>
    <div class="amount-display">Amount Due: <?php echo $amount; ?></div>
    <form action="process_payment.php" method="post" onsubmit="return validatePayment();">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="amount" value="<?php echo $amount; ?>">

        <div class="payment-option">
            <input type="radio" id="mobile_banking" name="payment_method" value="mobile_banking" onclick="showMobileOptions()">
            <label for="mobile_banking">Mobile Banking</label>
        </div>
        <div class="payment-option">
            <input type="radio" id="card_payment" name="payment_method" value="card_payment" onclick="showCardOptions()">
            <label for="card_payment">Card Payment</label>
        </div>

        <div id="mobileOptions">
            <label>Select Mobile Banking Provider:</label>
            <input type="radio" name="mobile_provider" value="bkash"> bKash
            <input type="radio" name="mobile_provider" value="nagad"> Nagad
            <input type="radio" name="mobile_provider" value="rocket"> Rocket
            <input type="text" name="mobile_number" placeholder="Enter Mobile Number">
        </div>

        <div id="cardOptions">
            <label>Select Card Type:</label>
            <input type="radio" name="card_type" value="credit_card"> Credit Card
            <input type="radio" name="card_type" value="debit_card"> Debit Card <br>
            <input type="text" name="card_number" placeholder="Enter Card Number">
        </div>

        <button type="submit">Submit Payment</button>
    </form>

    <script>
        // JavaScript functions
        function showMobileOptions() {
            document.getElementById('mobileOptions').style.display = 'block';
            document.getElementById('cardOptions').style.display = 'none';
        }

        function showCardOptions() {
            document.getElementById('mobileOptions').style.display = 'none';
            document.getElementById('cardOptions').style.display = 'block';
        }

        function validatePayment() {
            var paymentMethod = document.querySelector('input[name="payment_method"]:checked');
            if (!paymentMethod) {
                alert("Please select a payment method.");
                return false;
            }

            if (paymentMethod.value === "mobile_banking") {
                return validateMobileNumber();
            } else if (paymentMethod.value === "card_payment") {
                return validateCardNumber();
            }
        }

        function validateMobileNumber() {
    var mobileProvider = document.querySelector('input[name="mobile_provider"]:checked');
    if (!mobileProvider) {
        alert("Please select a mobile banking provider.");
        return false;
    }
    
    var mobileNumber = document.getElementsByName("mobile_number")[0].value;
    if (mobileNumber.length !== 11) {
        alert("Mobile number must be 11 digits.");
        return false;
    }
    for (let i = 0; i < mobileNumber.length; i++) {
        if (isNaN(parseInt(mobileNumber[i]))) {
            alert("Mobile number must contain only numbers.");
            return false;
        }
    }
    
    return true;
}


        function validateCardNumber() {
            var cardType = document.querySelector('input[name="card_type"]:checked');
            if (!cardType) {
                alert("Please select a card type.");
                return false;
            }
            
            var cardNumber = document.getElementsByName("card_number")[0].value;
            if (cardNumber.length < 9 || cardNumber.length > 13) {
                alert("Please enter Card number between 9 and 13 digits.");
                return false;
            }
            for (let i = 0; i < cardNumber.length; i++) {
            if (isNaN(parseInt(cardNumber[i]))) {
            alert("Card number must contain only numbers.");
            return false;
        }
    }
            return true;
        }
    </script>

<footer>© 2024 Travel Agency. All Rights Reserved.</footer>
</body>
</html>
