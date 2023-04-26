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
   <title>TestWizard | Home</title>

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
         <a href="#">Home</a>
         <a href="subject.php">Subject</a>
         <a href="leet.php">Leet</a>
         <a href="about.php">About</a>
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
            <p class="para-login" style="font-size: 1.5rem;">Don't have an account? <button type="button" onclick="popup('register-popup')" style="font-size: 1.6rem; color: #0eb582;">Create One</button></p><br>
            <button type="submit" class="login-btn" name="login">LOGIN</button>
         </form>
      </div>
   </div>

   <div class="popup-container" id="register-popup">
      <div class="register popup">
         <form name="register_form" method="POST" action="login_register.php" onsubmit="return validateRegisterform()">
            <h2>
               <span>USER REGISTER</span>
               <button type="reset" onclick="popup('register-popup'), popup('login-popup')">X</button>
            </h2>

            <input type="text" required placeholder="Full Name" name="fullname">
            <input type="text" required placeholder="Username" name="username">
            <input pattern="[A-Za-z0-9._+]+@[A-Za-z0-9 -]+\.[a-z]{2,}" type="email" required placeholder="E-mail" name="email">
            <input title="Must be at least 5 characters" pattern="[A-Za-z0-9]{5,}" type="password" required placeholder="Password" name="password">
            <p class="para-login" style="font-size: 1.5rem;">Already have an account? <button type="button" onclick="popup('register-popup')" style="font-size: 1.7rem; color: #0eb582; background: transparent;">Login</button></p><br>
            <button type="submit" class="register-btn" name="register">REGISTER</button>
         </form>
      </div>
   </div>

   <!-- login and register code ends -->

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
               <div class="content">
                  <h3>It's Preparation Time</h3>
                  <p>The only purpose of developing this website is to help the SLIETIANS to preapare for the
                     Examinations. We've added LEET and subject section separately and you can choose the subjects and
                     also there're sets available for every subjects.</p>
                  <a href="subject.php" class="btn">get started</a>
               </div>
            </section>

         </div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- subjects section starts  -->

   <section class="subjects">

      <h1 class="heading">our popular subjects</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/subject-icon (1).jpg" alt="">
            <h3>computer <br> fundamentals</h3>
            <p>4 modules</p>
            <button class="test_button" style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000;" href="01_set_c_funda.php?subject1=Computer Fundamentals">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="subject.php">Visit</a>
            </button>
         </div>

         <div class="box">
            <img src="images/subject-icon (2).jpg" alt="">
            <h3>operating <br> system</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000;" href="02_set_os.php?subject2=Operating System">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="subject.php">Visit</a>
            </button>
         </div>

         <div class="box">
            <img src="images/subject-icon (3).jpg" alt="">
            <h3>internet and web technology</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000;" href="03_set_int_wt.php?subject3=Internet And Web Technology">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="subject.php">Visit</a>
            </button>
         </div>

         <div class="box">
            <img src="images/subject-icon (4).jpg" alt="">
            <h3>computer <br> programming</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000;" href="./04_set_c_program.php?subject4=Computer Programming">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="subject.php">Visit</a>
            </button>
         </div>

         <div class="box">
            <img src="images/subject-icon (5).jpg" alt="">
            <h3>data <br> structure</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000;" href="./05_set_data_str.php?subject5=Data Structure">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="subject.php">Visit</a>
            </button>
         </div>

      </div>
      <br>

      <div class="view">
         <a href="subject.php" class="view-more-sub"><button>View More</button></a>
      </div>
      <br><br>

      <h1 class="heading">our popular sets</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/leet 2012.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2012</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/01_SET_GROUP_A_2012.html">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="leet.php">Visit</a>
            </button>
         </div>

         <div class="box">
            <img src="images/leet 2013.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2013</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/02_SET_GROUP_A_2013.html">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="leet.php">Visit</a>
            </button>
         </div>

         <div class="box">
            <img src="images/leet 2014.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2014</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/03_SET_GROUP_A_2014.html">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="leet.php">Visit</a>
            </button>
         </div>

         <div class="box">
            <img src="images/leet 2015.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2015</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/04_SET_GROUP_A_2015.html">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="leet.php">Visit</a>
            </button>
         </div>

         <div class="box">
            <img src="images/leet 2016.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2016</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <!-- <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/05_SET_GROUP_A_2016.html">Visit</a> -->
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="leet.php">Visit</a>
            </button>
         </div>

      </div>
      <br>

      <div class="view">
         <a href="leet.php" class="view-more-sub"><button>View More</button></a>
      </div>

   </section>

   <!-- subjects section ends -->

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
            <a href="#" class="link"> &#x21aa; Home</a>
            <a href="subject.php" class="link"> &#x21aa; Subject</a>
            <a href="leet.php" class="link"> &#x21aa; Leet</a>
            <a href="about.php" class="link"> &#x21aa; About</a>
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
   <script src="js/script.js"></script>

   <!-- ionicons imported icons -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>