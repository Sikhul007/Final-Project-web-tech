<?php

include 'conn.php';


$sql = "SELECT * FROM blog_posts";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Travel Agency - Blog - BTMS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #4d45e4;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        nav ul li a:hover {
            color: lightgrey;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 120px); /* Adjust to leave space for header and footer */
            padding: 20px;
        }

        .home-box {
            text-align: center;
        }

        footer {
            background-color: #4d45e4;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
   
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .like-button, .share-button {
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
        }
        .comment-box {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .comment-button {
            cursor: pointer;
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    
<nav>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="#">Review</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>


<h1 style="text-align: center;">Travel Agency Blog</h1>
    <table>
        <tr>
            <td>Picture</td>
            <td>Place Name and Details</td>
        </tr>
        
        <?php
        include 'conn.php'; 
        
        $sql = "SELECT * FROM blog_posts";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['picture']) . "' alt='Picture'></td>"; // Assuming images are stored as JPEG format
                echo "<td>";
                echo "<h3>" . $row['place_name'] . "</h3>";
                echo "<p>" . $row['place_details'] . "</p>";
                echo "<button class='like-button'>Like</button>";
                echo "<textarea class='comment-box' placeholder='Write a comment...'></textarea>";
                echo "<button class='comment-button'>Comment</button>";
                echo "<button class='share-button'>Share</button>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No posts found</td></tr>";
        }
        ?>
    </table>
</div>

<footer>
    <p>TA &copy; 2024</p>
</footer>

</body>
</html>
