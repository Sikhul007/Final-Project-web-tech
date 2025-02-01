<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 60px;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            padding: 12px 0px;
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

        form {
            max-width: 500px;
            max-height: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px 20px 20px 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="file"],
        button {
            width: calc(100%);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        img {
            margin-top: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
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
        <a href="../../home/home.php">Home</a>
        <a href="../../home/#hero">Destinations</a>
        <a href="../../home/#about-us">About Us</a>
        <a href="../../home/#contact-us">Contact Us</a>
    </header>
    <h2>Edit User Information</h2>

    <form action="../controller/edit.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" id="nameInput" name="name" value="<?php echo $row['name']; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>"><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo $row['dob']; ?>"><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" <?php echo ($row['gender'] == 'male') ? 'checked' : ''; ?>>
        male
        <input type="radio" id="female" name="gender" value="female" <?php echo ($row['gender'] == 'female') ? 'checked' : ''; ?>>
        Female

        <label for="picture">Profile Picture:</label>
        <input type="file" id="picture" name="picture"><br>
        <?php if (!empty($row['picture'])) : ?>
            <img src="../asset<?php echo $row['picture']; ?>" alt="Profile Picture" width="100">
        <?php endif; ?>


        <button type="submit">Save Changes</button>
    </form>

    <script>
        function validateForm() {
            let nameInput = document.getElementById('nameInput').value;
            let emailInput = document.getElementById('email').value;
            let dobInput = document.getElementById('dob').value;
            let maleChecked = document.getElementById('male').checked;
            let femaleChecked = document.getElementById('female').checked;
            let phone = document.getElementsByName("phone")[0].value;

            // Validate Name
            if (nameInput.trim() === '') {
                alert("Name cannot be empty");
                return false;
            } else {
                let wordCount = countWords(nameInput);
                if (!(wordCount >= 2 && isValidName(nameInput))) {
                    alert("Please ensure the name contains at least two words, starts with a letter, and only contains letters, period, and dash.");
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

            // Validate Email
            if (emailInput.trim() === '') {
                alert('Email cannot be empty');
                return false;
            } else {
                let atIndex = emailInput.indexOf('@');
                let dotIndex = emailInput.lastIndexOf('.');
                if (atIndex > 0 && dotIndex > atIndex + 2) {
                    let domain = emailInput.substring(atIndex + 1);
                    if (domain === 'gmail.com' || domain === 'yahoo.com' || domain === 'hotmail.com') {
                        // Continue with further validations
                    } else {
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

            // Validate Mobile Number
            if (phone.length !== 11) {
                alert("Mobile number must be 11 digits.");
                return false;
            }
            for (let i = 0; i < phone.length; i++) {
                if (isNaN(parseInt(phone[i]))) {
                    alert("Mobile number must contain only numbers.");
                    return false;
                }
            }

            // Validate Gender
            if (maleChecked || femaleChecked) {
                return true;
            } else {
                alert('Please select a gender');
                return false;
            }
        }
    </script>


    <footer>© 2024 Travel Agency. All Rights Reserved.</footer>
</body>

</html>