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
   <title>TestWizard | Contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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
         <a href="#">Contact</a>

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
      <h3>contact us</h3>
      <p> <a href="home.php">home</a> / contact </p>
   </section>

   <!-- contact section starts  -->

   <section class="contact">

      <h1 class="heading"> get in touch </h1>

      <div class="icons-container">

         <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>phone :</h3>
            <p>+91 70048 17946</p>
            <p>+91 92629 65776</p>
         </div>

         <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3> email : </h3>
            <p>testwizardsliet@gmail.com</p>
            <p>bipashukumarroy@gmail.com</p>
            <!-- <p>adityashahi286@gmail.com</p> -->
         </div>

         <div class="icons">
            <i class="fas fa-map"></i>
            <h3>address :</h3>
            <p>SLIET Longowal Punjab</p>
         </div>

      </div>

   </section>

   <!-- contact section ends -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3 class="h3-link">our info</h3>
            <a href="https://goo.gl/maps/nwqCFEoekM7s3FJ2A" class="link"> &#x21aa; India</a>
            <a href="https://goo.gl/maps/r3oSCoMUpr9RpK976" class="link"> &#x21aa; Sliet</a>
            <a href="http://academic.sliet.ac.in/bacholar-of-engineering/" class="link"> &#x21aa; Programmes</a>
            <a href="http://library.sliet.ac.in/e-resources/e-books/" class="link"> &#x21aa; E-Lib</a>
            <a href="about.php" class="link"> &#x21aa; Webiste Team</a>
         </div>

         <div class="box">
            <h3 class="h3-link">quick links</h3>
            <a href="home.php" class="link"> &#x21aa; Home</a>
            <a href="subject.php" class="link"> &#x21aa; Subject</a>
            <a href="leet.php" class="link"> &#x21aa; Leet</a>
            <a href="about.php" class="link"> &#x21aa; About</a>
            <a href="#" class="link"> &#x21aa; Contact</a>
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

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>

<!-- write a para on a website with takes quizzes and and provides notes for the preparation of examination of diploma engineering and leet examinations. the name of the website should be "testwizard". -->