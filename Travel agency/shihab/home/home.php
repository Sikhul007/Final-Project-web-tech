<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        header {
            background-color: #1c1c1c;
            color: #fff;
            padding: 5px 0;
            text-align: center;
            position: relative;
        }

        nav {
            background-color: #333;
            text-align: center;
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 15px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ff6600;
            text-decoration: underline;
        }


        .logo {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 180px;
        }

        h1 {
            text-shadow: 0px 0px 10px white,
                0px 0px 20px white,
                0px 0px 40px white,
                0px 0px 80px white;
            font-size: 40px;
            color: white;
        }

        .btn {
            background-color: #ff6600;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 30px;
            font-size: 20px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #e55e00;
        }

        .signin-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .signin-btn:hover {
            background-color: #555;
        }

        .section {
            padding: 50px 0;
            text-align: center;
            background-color: #fff;
            color: #333;
        }

        .section h2,
        .section h3 {
            color: #1c1c1c;
            margin: 20px 0;
        }

        .team,
        .company-info,
        .awards {
            text-align: center;
            margin-top: 20px;
        }

        .team-member {
            display: inline-block;
            margin: 10px;
            text-align: center;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 75px;
            margin-bottom: 10px;
        }

        .team-member h4 {
            margin-top: 5px;
            color: #333;
        }

        .team-member p {
            font-size: 14px;
            color: #666;
        }

        .social-media {
            margin-top: 20px;
        }

        .social-media img {
            width: 40px;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }

        .social-media img:hover {
            transform: scale(1.2);
        }

        html {
            scroll-behavior: smooth;
        }


        .cBtn {
    text-align: center; 
    margin-top: 20px;   
}

.cBtn button {
    background-color: #4CAF50; 
    border: none;             
    color: white;              
    padding: 15px 32px;        
    text-align: center;        
    text-decoration: none;     
    display: inline-block;     
    font-size: 16px;           
    margin: 4px 2px;           
    cursor: pointer;           
    border-radius: 12px;       
    transition-duration: 0.4s; 
}

.cBtn button:hover {
    background-color: white; 
    color: black;            
    border: 2px solid #4CAF50; 
}




        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #333;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #838383;
        }

        .contact-content {
            display: flex;
            justify-content: space-between;
        }

        /* .contact-info {
            width: 45%;
        }

        .contact-form form {
            padding-right: 10px;
        }

        .contact-form {
            width: 45%;
        } */

        .hero {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 15px;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .hero:hover>:not(:hover) {
            opacity: 0.3;
        }

        .box {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: opacity 0.6s ease;
        }

        .box img {
            width: 100%;
            height: auto;
            transition: transform 0.5s ease-in-out;
            display: block;
        }

        .box:hover img {
            transform: scale(1.13);
        }

        .box a {
            text-decoration: none;
            display: block;
        }

        .caption {
            position: absolute;
            bottom: 8%;
            left: 50%;
            transform: translateX(-50%) translateY(50px);
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            width: 100%;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: all 0.3s ease-in-out;
        }

        .box:hover .caption {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        @media (max-width: 600px) {
            .hero {
                padding: 10px;
            }

            .caption {
                font-size: 16px;
            }
        }

        footer {
            background-color: #1c1c1c;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>



    <script>
        function validateForm() {
            let nameInput = document.getElementById('name').value;
            let emailInput = document.getElementById('email').value;
            let messageInput = document.getElementById('message').value;

            // Validate Name
            if (nameInput.trim() === '') {
                alert('Please enter your name');
                return false;
            }

            // Validate Email
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

            // Validate Message
            if (messageInput.trim() === '') {
                alert('Please enter your message');
                return false;
            }
            return true;
        }
    </script>


</head>

<body>

    <header>
        <a href="home.php"><img src="logo.png" alt="Logo" class="logo"></a>
        <h1>Travel Agency</h1>
        <p>Your ultimate destination for memorable journeys</p>
    </header>

    <form action="../Auth/login.php"><button class="signin-btn">Sign In</button></form>

    <nav>
        <a href="#">Home</a>
        <a href="#">Destinations</a>
        <a href="#about-us">About Us</a>
        <a href="#contact-us">Contact Us</a>
        <a href="../../nibraj/view/blog.php">Blog</a>
    </nav>

    <div class="hero">
        <div class="box">
            <a href="../location/view/index.php">
                <img src="Bandarban.jpeg" alt="Destination 1">
                <span class="caption">BNADARBAN</span>
            </a>
        </div>
        <div class="box">
            <a href="../location/view/index.php">
                <img src="chittagong.jpg" alt="Destination 2">
                <span class="caption">CHITTAGANG</span>
            </a>
        </div>
        <div class="box">
            <a href="../location/view/index.php">
                <img src="cox.jpg" alt="Destination 3">
                <span class="caption">COX'S BAZAR</span>
            </a>
        </div>

        <div class="box">
            <a href="../location/view/index.php">
                <img src="sajek.jpeg" alt="Destination 1">
                <span class="caption">SAJEK VELLY</span>
            </a>
        </div>
        <div class="box">
            <a href="../location/view/index.php">
                <img src="sylhet.jpeg" alt="Destination 2">
                <span class="caption">Tea world STLHET</span>
            </a>
        </div>
        <div class="box">
            <a href="../location/view/index.php">
                <img src="Bandarban.jpeg" alt="Destination 3">
                <span class="caption">Ancient Egypt</span>
            </a>
        </div>
    </div>


    <div class="section" id="about-us">
        <h2>About Us</h2>
        <p>Founded in 2010, Travel Agency has been dedicated to bringing our clients the best in value and quality travel arrangements. We are passionate about travel and sharing the world's wonders with you.</p>

        <div class="team">
            <h3>Meet Our Team</h3>
            <div class="team-member">
                <img src="pp.png">
                <h4>MD. Sikhul Islam Shihab</h4>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="pp.png">
                <h4>MD. Hasan Al Mahmud</h4>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="pp1.png">
                <h4>Marishat Tasmim</h4>
                <p>Founder & CEO</p>
            </div>
        </div>

        <div class="company-info">
            <h3>Our Mission</h3>
            <p>Our mission is to provide unique and enriching travel experiences to our clients through our deep understanding of the destinations we serve.</p>
        </div>

        <div class="awards">
            <h3>Awards & Recognition</h3>
            <p>We are proud to have received multiple awards for our outstanding customer service and innovative packages, including the 'Best Travel Agency' award in 2023.</p>
        </div>
    </div>



    <div class="section" id="contact-us">
        <div class="contact-content">
            <div class="contact-info">
                <h2>Contact Us</h2>
                <p><b>Important-</b> It is highly recommended to you that you talk to us about your tours and travels. We have our experienced tour experts who will guide you with all the valid information that you need to know about your tours. You can ask questions and can have a clear idea about your tour. Accommodations, foods, visas, pricing of packages, all information should be discussed beforehand to avoid any misunderstanding in the future. You can reach us through email. Send us a mail and we will get back to you right away. Or you can call us directly at the given phone number and talk to us. The best way is to come to visit us, have a cup of tea and talk to our expert guides in person and book your package right away!</p>
                <p><b>Email: travel@gmail.com || Phone: +880123456789</b></p>
                <div class="social-media">
                    <a href="https://www.facebook.com/" target="_blank"><img src="facebook.png" alt="Facebook"></a>
                    <a href="https://www.youtube.com/" target="_blank"><img src="youtube.png" alt="Youtube"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="instagram.png" alt="Instagram"></a>
                </div>
            </div>

            <div class="cBtn">
            <form action="../../marishat/view/contact us.php" method="post">
                <button type="submit">Get in Touch</button>
            </form>
            </div>

            <!-- <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form action="submit_contact.php" method="post" onsubmit="return validateForm();">
                    <input type="text" name="name" id="name" placeholder="Your Name"><br>
                    <input type="email" name="email" id="email" placeholder="Your Email"><br>
                    <textarea name="message" id="message" rows="4" placeholder="Your Message"></textarea><br>
                    <button type="submit">Send Message</button>
                </form>
            </div> -->
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Travel Agency. All rights reserved.</p>
    </footer>

    </script>
</body>


</html>