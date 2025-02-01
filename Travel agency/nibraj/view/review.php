<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
    }
    label {
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    textarea {
      height: 150px;
    }
    select {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    button[type="submit"] {
      background-color: #4caf50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button[type="submit"]:hover {
      background-color: #45a049;
    }
    .errors {
      color: #f00;
    }
    .success {
      color: #0a0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Review</h1>
    <?php if (isset($errors)): ?>
      <ul class="errors">
        <?php foreach ($errors as $error): ?>
          <li><?= $error ?></li>
        <?php endforeach; ?>
      </ul>
    <?php elseif (isset($success)): ?>
      <p class="success">Thank you for contacting us! We will get back to you soon.</p>
    <?php endif; ?>

    <form id="contactForm" method="post" action="reviewcontroller.php" onsubmit="return validateForm()">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
      <br>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
      <br>

      <label for="rating">Rating:</label>
      <select name="rating" id="rating">
        <option value="1">1 Star</option>
        <option value="2">2 Stars</option>
        <option value="3">3 Stars</option>
        <option value="4">4 Stars</option>
        <option value="5">5 Stars</option>
      </select>
      <br>

      <label for="review">Review:</label>
      <textarea name="review" id="review"></textarea>
      <br>

      <button type="submit">Submit Review</button>
    </form>
  </div>

  <script>
    function validateForm() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var rating = document.getElementById("rating").value;
      var review = document.getElementById("review").value;
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (name.trim() === "") {
        alert("Name must be filled out");
        return false;
      }
      if (email.trim() === "") {
        alert("Email must be filled out");
        return false;
      }
      if (!emailRegex.test(email)) {
        alert("Invalid email format");
        return false;
      }
      if (rating === "") {
        alert("Please select a rating");
        return false;
      }
      if (review.trim() === "") {
        alert("Review must be filled out");
        return false;
      }
      return true;
    }
  </script>
</body>
</html>
