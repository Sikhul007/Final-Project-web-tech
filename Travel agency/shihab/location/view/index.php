<?php 
    session_start();
    $_session['flag'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inactive Maps</title>
</head>
<body>

    <div style="margin-bottom: 20px;" class="bandarban">
        <div style="float: left; margin-right: 20px;">
            <img src="../asset/cox.jpg" alt="Cox's Bazar Map" style="width: 200px; height: 150px;">
        </div>
        <div>
            <h2 style="margin-top: 0;">Cox's Bazar</h2>
            <p style="margin-bottom: 10px;">Cox's Bazar is a city, fishing port, tourism center, and district headquarters in southeastern Bangladesh. It is famous for its long natural sandy beach.</p>
            <a href= '../controller/details_controller.php' style="text-decoration: none; background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;">View Details</a>
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <div style="float: left; margin-right: 20px;">
            <img src="../asset/bandarban.jpg" alt="Inactive Map" style="width: 200px; height: 150px;">
        </div>
        <div>
        <h2 style="margin-top: 0;">Bandarban</h2>
            <p style="margin-bottom: 10px;">Known for its picturesque landscapes and indigenous communities, Bandarban is a hill district in southeastern Bangladesh, offering stunning natural beauty and cultural richness.</p>
            <a href="../controller/details_controller.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;">View Details</a>
        </div>
    </div>
    
    <div style="margin-bottom: 20px;">
        <div style="float: left; margin-right: 20px;">
            <img src="../asset/sylhet.jpg" alt="Inactive Map" style="width: 200px; height: 150px;">
        </div>
        <div>
            <h2 style="margin-top: 0;">Sylhet</h2>
            <p style="margin-bottom: 10px;"> Renowned for its lush tea gardens, scenic landscapes, and religious sites like Hazrat Shahjalal Mazar Sharif, Sylhet is a northeastern division of Bangladesh, attracting tourists and pilgrims alike.</p>
            <a href="../controller/details_controller.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;">View Details</a>
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <div style="float: left; margin-right: 20px;">
            <img src="../asset/chittagong.jpg" alt="Inactive Map" style="width: 200px; height: 150px;">
        </div>
        <div>
            <h2 style="margin-top: 0;">Chittagong</h2>
            <p style="margin-bottom: 10px;">As the country's major seaport city, Chittagong is a bustling commercial hub with a rich history, vibrant culture, and significant landmarks such as the Shrine of Bayazid Bostami and Patenga Beach.</p>
            <a href="../controller/details_controller.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;">View Details</a>
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <div style="float: left; margin-right: 20px;">
            <img src="../asset/sajek.jpeg" alt="Inactive Map" style="width: 200px; height: 150px;">
        </div>
        <div>
            <h2 style="margin-top: 0;">Sajek</h2>
            <p style="margin-bottom: 10px;">Sajek Valley, nestled in the hills of Rangamati district, offers breathtaking panoramic views and is known for its serene atmosphere and lush greenery, making it a popular tourist destination in Bangladesh.</p>
            <a href="../controller/details_controller.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;">View Details</a>
        </div>
    </div>

</body>
</html>
