<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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

        h1 {
            text-align: center;
            margin-top: 80px;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        textarea,
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            font-size: 17px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
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
        <a href="../../home/home.php#">Destinations</a>
        <a href="../../home/home.php#about-us">About Us</a>
        <a href="../../home/home.php#contact-us">Contact Us</a>
    </header>


    <h1>Add Service</h1>
    <form action="../process_add_service.php" method="POST" onsubmit="return validateForm();">
        <label for="service_name">Service Name:</label><br>
        <textarea id="service_name" name="service_name" rows="4" cols="50" ></textarea><br>
        <label for="validity_start">Validity Start Date:</label><br>
        <input type="date" id="validity_start" name="validity_start" ><br>
        <label for="validity_end">Validity End Date:</label><br>
        <input type="date" id="validity_end" name="validity_end" ><br>
        <input type="hidden" name="provider_id" value="<?php echo $_GET['id']; ?>">
        <input type="submit" value="Add Service">
    </form>

    <script>
    function validateForm() {
        var serviceName = document.getElementById('service_name').value;

        // Check if service name is empty
        if (serviceName.trim() === '') {
            alert('Service Name cannot be empty.');
            return false;
        }

        

// Manually count words
var wordCount = countWords(serviceName);

// Define the word limit
var wordLimit = 200;

// Check if word count exceeds the limit
if (wordCount > wordLimit) {
    alert('Service Name cannot exceed ' + wordLimit + ' words.');
    return false;
}

return true; // Allow form submission if validation passes
}

// Function to count words in a string
function countWords(str) {
var wordArray = str.split(' ');
var count = 0;
for (var i = 0; i < wordArray.length; i++) {
    if (wordArray[i].trim() !== '') {
        count++;
    }
}
return count;
}
</script>

    <footer>© 2024 Travel Agency. All Rights Reserved.</footer>
</body>
</html>
