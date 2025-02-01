<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding-top: 0px 0px 10px 10px;
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
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            margin-bottom: 60px;
        }

        .form {
            color: #333;
            width: 500px;
            height: 500px;
            padding: 20px 0px 20px 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            padding-top: 30px;
        }


        input[type=text],
        input[type=email],
        input[type=password],
        input[type=date],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 8px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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

        button:hover {
            background-color: #838383;
        }


        .sign-up-text {
            margin-top: 20px;
            text-align: center;
            width: 100%;
            margin-top: 10px;
            font-size: 14px;
        }

        .sign-up-text a {
            color: #333;
            text-decoration: none;

        }

        .sign-up-text a:hover {
            text-decoration: underline;
        }



        .terms {
            margin-top: 7px;
            font-size: 12px;
        }

        .terms a {
            color: #333;
            text-decoration: none;
        }

        .terms a:hover {
            text-decoration: underline;
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


    <script>


// Validation function for the registration form
function validateForm() {
            let nameInput = document.getElementById('name').value;
            let emailInput = document.getElementById('email').value;
            let dobInput = document.getElementById('dob').value;
            let passwordInput = document.getElementById('password').value;
            let rePasswordInput = document.getElementsByName('re-password')[0].value;
            let maleChecked = document.getElementById('male').checked;
            let femaleChecked = document.getElementById('female').checked;
            let otherChecked = document.getElementById('other').checked;
            let userType = document.getElementById('user_type').value;
            let termsChecked = document.getElementById('terms').checked;

            // Validate Name
            if (nameInput.trim() === '') {
                alert("Don't keep Name empty");
                return false;
            } else {
                let wordCount = countWords(nameInput);
                if (!(wordCount >= 2 && isValidName(nameInput))) {
                    alert("Please ensure it contains at least two words,\nstarts with a letter and only contains letters, period, and dash.");
                    return false;
                }
            }

            function countWords(name) {
                return name.trim().split(' ').filter(function(word) {
                    return word !== '';
                }).length;
            }

            function isValidName(name) {
                for (let i = 0; i < name.length; i++) {
                    let char = name[i];
                    if (!(isLetter(char) || char === '.' || char === '-' || char === ' ')) {
                        return false;
                    }
                }
                return isLetter(name[0]);
            }

            function isLetter(char) {
                let lowerChar = char.toLowerCase();
                return lowerChar >= 'a' && lowerChar <= 'z';
            }

            //Validate Email
            if (emailInput.trim() === '') {
                alert('Please enter a valid email address');
                return false;
            } else {
                let atIndex = emailInput.indexOf('@');
                let dotIndex = emailInput.lastIndexOf('.');
                if (atIndex > 0 && dotIndex > atIndex + 2) {
                    let domain = emailInput.substring(atIndex + 1);
                    if (domain === 'gmail.com' || domain === 'yahoo.com' || domain === 'hotmail.com') {} else {
                        alert('Only Gmail, Yahoo, and Hotmail domains are allowed');
                        return false;
                    }
                } else {
                    alert('Please enter a valid email address');
                    return false;
                }
            }

            // Validate Date of Birth
            if (dobInput.trim() === '') {
                alert('Please enter your date of birth');
                return false;
            } else {
                let dob = new Date(dobInput);
                let today = new Date();
                let age = today.getFullYear() - dob.getFullYear();
                let monthDiff = today.getMonth() - dob.getMonth();
                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                    age--;
                }
                if (age < 18) {
                    alert('You must be at least 18 years old to sign up');
                    return false;
                }
            }

            // Validate Gender
            if (!(maleChecked || femaleChecked || otherChecked)) {
                alert("Please select a gender");
                return false;
            }

            //Validate User Type
            if (userType === "") {
                alert("Please select a user type");
                return false;
            }

            // Validate Password
            if (passwordInput.trim() === '') {
                alert("Password fields cannot be empty");
                return false;
            } else if (passwordInput.length < 8) {
                alert('Password must be at least 8 characters long');
                return false;
            } else {
                let hasUppercase = false;
                let hasLowercase = false;
                let hasDigit = false;
                let hasSpecialChar = false;

                for (let i = 0; i < passwordInput.length; i++) {
                    let char = passwordInput.charAt(i);
                    if (char >= 'A' && char <= 'Z') {
                        hasUppercase = true;
                    } else if (char >= 'a' && char <= 'z') {
                        hasLowercase = true;
                    } else if (char >= '0' && char <= '9') {
                        hasDigit = true;
                    } else if (
                        char === '!' || char === '@' || char === '#' || char === '$' || char === '%' || char === '^' || char === '&' || char === '*' ||
                        char === ')' || char === '-' || char === '_' || char === '=' || char === '+' || char === '[' || char === ']' || char === '{' ||
                        char === '}' || char === '|' || char === ';' || char === ':' || char === "'" || char === '"' || char === ',' || char === '.' ||
                        char === '/' || char === '?' || char === '<' || char === '>' || char === '`' || char === '~' || char === '('
                    ) {
                        hasSpecialChar = true;
                    }
                }

                if (!hasUppercase) {
                    alert('Password must contain at least one uppercase letter');
                    return false;
                } else if (!hasLowercase) {
                    alert('Password must contain at least one lowercase letter');
                    return false;
                } else if (!hasDigit) {
                    alert('Password must contain at least one digit');
                    return false;
                } else if (!hasSpecialChar) {
                    alert('Password must contain at least one special character');
                    return false;
                }
            }

            if (passwordInput !== rePasswordInput) {
                alert("Passwords do not match");
                return false;
            }


            // Validate Terms and Conditions
            if (!termsChecked) {
                alert("Please accept the terms and conditions");
                return false;
            }

            return true; // Form validation successful
        }


        function ajax() {

            let name = document.getElementById('name').value;
            let password = document.getElementById('password').value;
            let email = document.getElementById('email').value;
            let dob = document.getElementById('dob').value;
            let maleChecked = document.getElementById('male').checked;
            let femaleChecked = document.getElementById('female').checked;
            let otherChecked = document.getElementById('other').checked;
            let termsChecked = document.getElementById('terms').checked;
            let userType = document.querySelector('select[name="user_type"]').value;

            // Validate form inputs
            if (!validateForm()) {
                return;
            }

            let user = {
                'name': name,
                'password': password,
                'email': email,
                'dob': dob,
                'gender': maleChecked ? 'male' : (femaleChecked ? 'female' : 'other'),
                'user_type': userType
            };

            let data = JSON.stringify(user);

            let xhttp = new XMLHttpRequest();
            xhttp.open("POST", 'register_process.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('data=' + data);

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let response = JSON.parse(this.responseText);
                    if (response.hasOwnProperty('id')) {
                        alert("Registration successful. User ID is: " + response.id);
                        // if (response.hasOwnProperty('error')) {
                        //     alert("Registration failed. Error: " + response.error); 
                        // } else {
                        //     alert("Registration failed. An unknown error occurred.");
                        // }
                    }
                }
            };
            console.log('AJAX request sent');
        }
    </script>



</head>

<body>

    <header>
        <a href="../home/home.php">Home</a>
        <a href="../home/home.php#">Destinations</a>
        <a href="../home/home.php#about-us">About Us</a>
        <a href="../home/home.php#contact-us">Contact Us</a>
    </header>

    <div class="main">
        <h1>Registration Form</h1>
        <div class="form">
            <input type="text" id="name" name="name" placeholder="Name"><br>
            <input type="email" id="email" name="email" placeholder="Email"><br>
            <label for="dob">Date of Birth:</label><br>
            <input type="date" id="dob" name="dob"><br>
            <label for="gender">Select your Gender:</label>
            <input type="radio" id="male" name="gender" value="male"> Male
            <input type="radio" id="female" name="gender" value="female"> Female
            <input type="radio" id="other" name="gender" value="other"> Other<br>
            <select id="user_type" name="user_type"><br>
                <option value="" disabled selected>Please select user type</option>
                <option value="user">Tourist</option>
                <option value="service_provider">Service Provider</option>
                <option value="tour_guide">Tour Guide</option>
                <option value="admin">Admin</option>
            </select><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="password" name="re-password" placeholder="Confirm Password" required><br>

            <div class="terms">
                <input type="checkbox" id="terms">
                By signing up, you agree to our <a href="../terms_and_conditions.php"><b>Terms and Conditions</b></a>.
            </div>

            <button onclick="ajax()">Register</button>


            <div class="sign-up-text">
                have an account? <a href="login.php">Sign In</a>
            </div>
            <p id="response"></p>
        </div>
    </div>

    <footer>© 2024 Travel Agency. All Rights Reserved.</footer>
</body>

</html>