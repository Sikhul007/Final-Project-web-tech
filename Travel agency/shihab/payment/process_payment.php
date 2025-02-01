<!DOCTYPE html>
<html>
<head>
    <title>Payment Processing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
            color: #333;
        }
        .message {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .error {
            border-left: 6px solid #f44336;
        }
        .success {
            border-left: 6px solid #4CAF50;
        }
        a {
            color: #065796;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $_SESSION['$id'] = $id;
    // Validate payment method
    // if (!isset($_POST['payment_method']) || ($_POST['payment_method'] !== "mobile_banking" && $_POST['payment_method'] !== "card_payment")) {
    //     echo '<div class="message error">Please select a payment method.</div>';
    //     exit;
    // }

    // // Validate mobile banking provider
    // if ($_POST['payment_method'] == "mobile_banking") {
    //     if (!isset($_POST['mobile_provider']) || empty($_POST['mobile_provider'])) {
    //         echo '<div class="message error">Please select a mobile banking provider.</div>';
    //         exit;
    //     }
    //     // Validate mobile number
    //     if (empty($_POST['mobile_number'])) {
    //         echo '<div class="message error">Mobile number is required for mobile banking.</div>';
    //         exit;
    //     }
    // }

    // Validate card type
    if ($_POST['payment_method'] == "card_payment") {
        if (!isset($_POST['card_type']) || ($_POST['card_type'] !== "credit_card" && $_POST['card_type'] !== "debit_card")) {
            echo '<div class="message error">Please select a card type.</div>';
            exit;
        }
        // Validate card number
        if (empty($_POST['card_number'])) {
            echo '<div class="message error">Card number is required for card payment.</div>';
            exit;
        }
    }

    require ('model/db.php');

    $payment_method = $_POST['payment_method'];
    $payment_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO transaction_history (ID, NAME, AMOUNT, payment_method, payment_date) VALUES ('$id', '$name', '$amount', '$payment_method', '$payment_date')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="message success">Payment processed successfully</div>';
        echo '<a href="index.php">Back to Home</a><br>';
        echo '<a href="get_transaction_history.php">View Transaction History</a>';
    } else {
        echo '<div class="message error">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }

    $conn->close();
} else {
    echo '<div class="message error">Invalid request.</div>';
}
?>
</body>
</html>
