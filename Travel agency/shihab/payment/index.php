<!DOCTYPE html>
<html>
<head>
    <title>Payment System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
    padding: 0;
            /* padding: 20px; */
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
        label {
            margin-right: 10px;
        }
        input[type=radio] {
            margin: 0 10px 0 0;
        }
        button {
            width: calc(100% - 22px);
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #333; 
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        form, #userInfo, #paymentForm {
            width: 80%; 
            max-width: 600px; 
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        h2 {
            text-align: center;
            margin-top: 100px;
        }
        input[type="text"], input[type="button"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #838383;
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
    <h2>Enter User ID for Payment</h2>
    <form id="userForm">
        <label for="userId">Enter ID:</label>
        <input type="text" id="userId" name="userId">
        <button type="button" onclick="validateForm()">Get User Info</button>
    </form>

    <div id="userInfo"></div>

    <div id="paymentForm">
        <!-- Payment form will be displayed here -->
    </div>

    <script>
        function validateForm() {
            var userId = document.getElementById('userId').value;

            if (userId.trim() === '' || isNaN(parseInt(userId)) || parseInt(userId) <= 0) {
                alert('User ID cannot be empty and must be a positive number.');
            } else {
                getUserInfo();
            }
        }

        function getUserInfo() {
            let userId = document.getElementById('userId').value;
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "get_user_info.php?id=" + userId, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    let userInfo = JSON.parse(xhr.responseText);
                    document.getElementById('userInfo').innerHTML = "Name: " + userInfo.NAME + "<br>Amount: " + userInfo.AMOUNT;
                    document.getElementById('paymentForm').innerHTML = "<form action='payment.php' method='post'><input type='hidden' name='id' value='" + userId + "'><input type='hidden' name='name' value='" + userInfo.NAME + "'><input type='hidden' name='amount' value='" + userInfo.AMOUNT + "'><button type='submit'>Make Payment</button></form>";
                    document.getElementById('paymentForm').style.display = 'block';
                }
            };
            xhr.send();
        }
    </script>

<footer>© 2024 Travel Agency. All Rights Reserved.</footer>
</body>
</html>
