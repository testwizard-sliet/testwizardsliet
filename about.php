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
   <title>TestWizard | About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- css for swiper of ratings -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
   <link rel="stylesheet" href="about.css">

   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

   <!-- header section starts  -->

   <header class="header">

      <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> TestWizard </a>

      <nav class="navbar">
         <div id="close-navbar" class="fas fa-times"></div>
         <a href="index.php">Home</a>
         <a href="subject.php">Subject</a>
         <a href="leet.php">Leet</a>
         <a href="#">About</a>
         <a href="contact.php">Contact</a>

      </nav>

      <?php
      if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
         echo "
                <div class='user'>
                    $_SESSION[username] - <a href='logout.php'>Logout</a>
                </div>
            ";
      } else {
         echo "
                <div class='sign-in-up'>
                    <button type='button' onclick=\"popup('login-popup')\">Login</button>
                </div>";
      }
      ?>

      <div class="icons">
         <!-- <div id="account-btn" class="fas fa-user"></div> -->
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>


      <!-- <button type='button' onclick=\"popup('register-popup')\">Register</button> -->

   </header>

   <!-- header section ends -->

   <!-- login and register code starts -->

   <div class="popup-container" id="login-popup">
      <div class="popup">
         <form name="login_form" method="POST" action="login_register.php" onsubmit="return validateLoginform()">
            <h2>
               <span>USER LOGIN</span>
               <button type="reset" onclick="popup('login-popup')">X</button>
            </h2>

            <input type="text" placeholder="E-mail or Username" name="email_username">
            <input type="password" placeholder="Password" name="password">
            <p class="para-login" style="font-size: 1.5rem;">Don't have an account? <button type="button" onclick="popup('register-popup')" style="font-size: 1.7rem; color: #0eb582;">Create One</button></p><br>
            <button type="submit" class="login-btn" name="login">LOGIN</button>
         </form>
      </div>
   </div>

   <div class="popup-container" id="register-popup">
      <div class="register popup">
         <form name="register_form" method="POST" action="login_register.php" onsubmit="return validateRegisterform()">
            <h2>
               <span>USER REGISTER</span>
               <button type="reset" onclick="popup('register-popup'),popup('login-popup')">X</button>
            </h2>

            <input type="text" required placeholder="Full Name" name="fullname">
            <input type="text" required placeholder="Username" name="username">
            <input pattern="[A-Za-z0-9._+]+@[A-Za-z0-9 -]+\.[a-z]{2,}" type="email" required placeholder="E-mail" name="email">
            <input title="Must be at least 5 characters" pattern="[A-Za-z0-9]{5,}" type="password" required placeholder="Password" name="password">
            <button type="submit" class="register-btn" name="register">LOGIN</button>
         </form>
      </div>
   </div>

   <!-- login and register code ends -->

   <section class="heading-link">
      <h3>about us</h3>
      <p> <a href="index.php">home</a> / about </p>
   </section>

   <!-- content section starts -->
   <section class="content">

      <!-- about us section starts -->

      <section class="about-website-sec">

         <div class="about-website">
            <img src="images/logo_testwizard.png" alt="">
            <h3>TestWizard</h3>
            <p class="skill-site">Quiz, learn, excel with us!</p>
            <br>
            <p class="about-site">TestWizard is a website designed to help students prepare for their Diploma Engineering and LEET examinations. The website offers a wide range of quizzes covering various subjects related to the exam, allowing students to test their knowledge and identify areas they need to focus on. Additionally, TestWizard provides comprehensive notes and study materials to help students better understand the concepts covered in the exam. With a user-friendly interface and up-to-date content, TestWizard is the perfect resource for students looking to excel in their Diploma Engineering and LEET exams.</p>
            <br>
            <p class="skill-site">"Test your knowledge, sharpen your skills: Take quizzes, get notes, and excel with us!"</p>

            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <!-- <button class="box-button">More</button> -->
         </div>

      </section>
      <br>

      <!-- teachers section starts  -->

      <section class="about-section">

         <h1 class="heading">our team</h1>
         <section class="us-section">

            <div class="box-us-section">
               <img src="images/manas-madhukar.jpg" alt="">
               <h3>Manas Madhukar</h3>
               <p>Front-end Developer</p>
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div><br>
               <button class="box-button"><a href="more-about.php">More</a></button>
            </div>

            <div class="box-us-section">
               <img src="images/aditya-kumar.jpg" alt="">
               <h3>Aditya Kumar</h3>
               <p>Full-Stack Web Developer</p>
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div><br>
               <button class="box-button"><a href="more-about.php">More</a></button>
            </div>

            <div class="box-us-section">
               <img src="images/bipanshu-kumar.jpg" alt="">
               <h3>Bipanshu Kumar</h3>
               <p>Backend Developer</p>
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div><br>
               <button class="box-button"><a href="more-about.php">More</a></button>
            </div>

         </section>

      </section>

      <br><br>

      <!-- teachers section ends -->

   </section>

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
               <a href="index.php" class="link"> &#x21aa; Home</a>
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
               <a href="https://thebridge.in/terms-and-conditions/quiz/" class="link"> &#x21aa; Terms and conditions</a>
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

      <script src="js/script.js"></script>

</body>

</html>