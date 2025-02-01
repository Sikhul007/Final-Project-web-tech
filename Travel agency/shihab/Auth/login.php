<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body, html {
            height: 100%; 
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column; 
            justify-content: center; 
        }

        header {
            background-color: #333;
            color: #fff;
            width: 100%;
            padding: 12px 0;
            font-size: 24px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        header a {
            color: #fff;
            text-decoration: none;
            padding: 0 15px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        header a:hover {
            color: #ff6600;
        }

        main {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
            margin-top: 60px; 
            margin-bottom: 60px; 
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="email"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            display: block;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #0056b3;
        }

        button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #333; 
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #838383; 
        }

        .forgot-password {
            align-self: flex-end;
            font-size: 12px;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
            color: #007bff;
        }

        .sign-up-text {
            margin-top: 20px;
            text-align: center;
            width: 100%;
        }

        .sign-up-text a {
            color: #333;
            text-decoration: none;
        }

        .sign-up-text a:hover {
            text-decoration: underline;
        }

        .remember-me {
    display: flex;
    align-items: left; 
    margin-top: 10px;  
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
    <a href="../home/home.php#">Destinations</a>
    <a href="../home/home.php#about-us">About Us</a>
    <a href="../home/home.php#contact-us">Contact Us</a>
</header>
<main>
    <h2>Login to Your Account</h2>
    <form action="login_process.php" method="POST" onsubmit="return validateForm();">
        <input type="email" name="email" placeholder="Email" 
            value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
        <input type="password" name="password" placeholder="Password" 
            value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>">
        <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
        <div class="remember-me" align='left'>
            <input type="checkbox" name="remember_me" value="1" 
                <?php echo isset($_COOKIE['email']) ? 'checked' : ''; ?>>
            <label for="remember_me">Remember Me</label>
        </div>
        <button type="submit">Sign In</button>
        <div class="sign-up-text">
            Don't have an account? <a href="register.php">Sign up</a>
        </div>
    </form>
</main>
<footer>© 2024 Travel Agency. All Rights Reserved.</footer>

<script>
    function validateForm() {
        let emailInput = document.getElementsByName('email')[0].value;
        let passwordInput = document.getElementsByName('password')[0].value;

        // Validate Email
        if (emailInput.trim() === '') {
            alert('Please enter a valid email address');
            return false;
        } else {
            let atIndex = emailInput.indexOf('@');
            let dotIndex = emailInput.lastIndexOf('.');
            if (atIndex > 0 && dotIndex > atIndex + 2) {
                let domain = emailInput.substring(atIndex + 1);
                if (!(domain === 'gmail.com' || domain === 'yahoo.com' || domain === 'hotmail.com')) {
                    alert('Only Gmail, Yahoo, and Hotmail domains are allowed');
                    return false;
                }
            } else {
                alert('Please enter a valid email address');
                return false;
            }
        }

        // Validate Password
        if (passwordInput.trim() === '') {
            alert("Password fields cannot be empty");
            return false;
        }
        return true;
    }
</script>
</body>
</html>