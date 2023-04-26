<?php
require('connection_d.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestWizard | About | Our Team</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="more-about.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> TestWizard </a>

        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="home.php">Home</a>
            <a href="subject.php">Subject</a>
            <a href="leet.php">Leet</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>

        </nav>

        <div class="icons">
            <!-- <div id="account-btn" class="fas fa-user"></div> -->
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>


        <!-- <button type='button' onclick=\"popup('register-popup')\">Register</button> -->

    </header>

    <!-- header section ends -->

    <section class="heading-link">
        <h3>Our Team</h3>
        <p> <a href="home.php">home</a> / <a href="about.php">about</a> / our team </p>
    </section>

    <!-- content section starts -->
    <section class="content">
        <section class="us-section">

            <h1 class="heading">our team</h1>

            <div class="box-us-section">
                <img src="images/manas-madhukar.jpg" alt="">
                <h3>Manas Madhukar</h3>
                <p class="skill">Front-end Developer</p>
                <p class="about-me">Hello and welcome to my about page! I am a front-end developer who is passionate about creating visually stunning and engaging web experiences. From a young age, I have been drawn to the world of design and technology, and I have found my calling in the field of web development. As a front-end developer, I specialize in creating the user-facing side of websites, using HTML, CSS, and JavaScript to bring designs to life. I have experience working on a variety of projects, from small business websites to complex web applications. When I'm not coding, you can find me exploring new coffee shops, hiking in the mountains, or playing video games. I am excited to continue growing my skills and collaborating with others in the industry. Thanks for stopping by!</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <!-- <button class="box-button">More</button> -->
            </div>

            <div class="box-us-section">
                <img src="images/aditya-kumar.jpg" alt="">
                <h3>Aditya Kumar</h3>
                <p class="skill">Full-Stack Web Developer</p>
                <p class="about-me">Hello and welcome to my about page! I am a full-stack developer with a passion for creating dynamic and interactive web applications. My expertise spans both front-end and back-end development, allowing me to design and implement end-to-end solutions that meet the needs of users and businesses alike. With a strong foundation in programming languages such as JavaScript, Python, and Java, I am experienced in building responsive user interfaces, integrating databases, and creating server-side logic. I enjoy collaborating with other developers, designers, and stakeholders to bring projects to life. When I'm not coding, you can find me playing guitar, practicing yoga, or exploring the great outdoors. I am excited about the endless possibilities of full-stack development and the potential for innovation it brings. Thanks for stopping by my page!</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box-us-section">
                <img src="images/bipanshu-kumar.jpg" alt="">
                <h3>Bipanshu Kumar</h3>
                <p class="skill">Backend Developer</p>
                <p class="about-me">Hello and welcome to my about page! I am a back-end developer who is passionate about building robust and scalable web applications. With a strong background in programming languages such as Python, Java, and PHP, I specialize in developing the server-side of websites, creating APIs, and integrating databases. I enjoy working on complex projects that require creative problem-solving and attention to detail. My experience in the industry has allowed me to collaborate with other developers, designers, and stakeholders to deliver high-quality software solutions. When I'm not coding, I enjoy playing basketball, reading science fiction novels, and exploring new cities. I am excited about the future of web development and the opportunities it brings for innovation and creativity. Thanks for stopping by my page!</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

        </section>
    </section>

    <!-- teachers section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3 class="h3-link">our info</h3>
                <a href="https://goo.gl/maps/nwqCFEoekM7s3FJ2A" class="link"> &#x21aa; India</a>
                <a href="https://goo.gl/maps/r3oSCoMUpr9RpK976" class="link"> &#x21aa; Sliet</a>
                <a href="http://academic.sliet.ac.in/bacholar-of-engineering/" class="link"> &#x21aa; Programmes</a>
                <a href="http://library.sliet.ac.in/e-resources/e-books/" class="link"> &#x21aa; E-Lib</a>
                <a href="#" class="link"> &#x21aa; Webiste Team</a>
            </div>

            <div class="box">
                <h3 class="h3-link">quick links</h3>
                <a href="home.php" class="link"> &#x21aa; Home</a>
                <a href="subject.php" class="link"> &#x21aa; Subject</a>
                <a href="leet.php" class="link"> &#x21aa; Leet</a>
                <a href="#" class="link"> &#x21aa; About</a>
                <a href="contact.php" class="link"> &#x21aa; Contact</a>
            </div>

            <div class="box">
                <h3 class="h3-link">extra links</h3>
                <a href="http://sliet.ac.in/" class="link"> &#x21aa; Sliet</a>
                <a href="http://academic.sliet.ac.in/bacholar-of-engineering/" class="link"> &#x21aa; Sliet-Leet</a>
                <a href="https://wa.me/+917004817946" class="link"> &#x21aa; Ask questions</a>
                <a href="mailto:testwizardsliet@gmail.com" class="link"> &#x21aa; Send feedback</a>
                <a href="https://thebridge.in/terms-and-conditions/quiz/" class="link"> &#x21aa; Terms and
                    conditions</a>
            </div>

            <div class="box">
                <h3><i class="fas fa-lightbulb"></i> TestWizard </h3>
                <p class="p-box"> Start your preparation today.</p>
                <a href="mailto:testwizardsliet@gmail.com" class="link"> &#x21aa; testwizardsliet@gmail.com </a>
                <a href="https://wa.me/+917004817946" class="link"> &#x21aa; +91 70048-17946 </a>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

        <div class="credit"> Created by <span>Team Manas Madhukar</span> | All rights reserved ! </div>

    </section>

    <!-- footer section ends -->

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 50,
            // loop: true,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script src="js/script.js"></script>

</body>

</html>