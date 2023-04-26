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
   <title>TestWizard | Subject</title>

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
         <a href="#">Subject</a>
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
      <h3>Our Subjects</h3>
      <p> <a href="home.php">home</a> / subjects </p>
   </section>

   <!-- subjects section starts  -->

   <section class="subjects">

      <!-- <section class="courses">

      <h1 class="heading"> important subjects </h1>
   
   </section>    -->

      <!-- 
         computer fundamentals
         operating system
         internet and web technology
         computer programming
         data structure
         object oriented programming
         nework operating system
         computer architecture and organization
         computer networks
         system installation and maintenance
         computer graphics
         software engineering
         database management
         system analysis and design
         java programming
         system programming
         microprocessor
         multimedia & animation technique
         network installation and security 
-->

      <!-- subject division starts  -->

      <h1 class="heading">Important subjects</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/subject-icon (1).jpg" alt="">
            <h3>computer <br> fundamentals</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="01_set_c_funda.php?subject1=Computer Fundamentals">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (2).jpg" alt="">
            <h3>operating <br> system</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="02_set_os.php?subject2=Operating System">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (3).jpg" alt="">
            <h3>internet and web technology</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="03_set_int_wt.php?subject3=Internet And Web Technology">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (4).jpg" alt="">
            <h3>computer <br> programming</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="04_set_c_program.php?subject4=Computer Programming">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (5).jpg" alt="">
            <h3>data <br> structure</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="05_set_data_str.php?subject5=Data Structures">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (6).jpg" alt="">
            <h3>object oriented programming</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="06_set_oops.php?subject6=Object Oriented Programming">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (7).jpg" alt="">
            <h3>nework <br> operating system</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="07_set_net_os.php?subject7=Network Operating System">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (8).jpg" alt="">
            <h3>computer architecture and organization</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="08_set_com_ao.php?subject8=Computer Architecture And Organization">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (9).jpg" alt="">
            <h3>computer <br> networks</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="09_set_com_net.php?subject9=Computer Networks">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (10).jpg" alt="">
            <h3>system installation and maintenance</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="10_set_sys_im.php?subject10=System Installation And Maintenance">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (11).jpg" alt="">
            <h3>computer <br> graphics</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="11_set_com_gra.php?subject11=Computer Graphics">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (12).jpg" alt="">
            <h3>software <br> engineering</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="12_set_soft_eng.php?subject12=Software Engineering">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (13).jpg" alt="">
            <h3>database <br> management</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="13_set_database.php?subject13=Database Management">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (14).jpg" alt="">
            <h3>system analysis and design</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="14_set_sys_ad.php?subject14=System Analysis And Design">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (15).jpg" alt="">
            <h3>java <br> programming</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="15_set_java_prog.php?subject15=Java Programming">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (16).jpg" alt="">
            <h3>system <br> programming</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="16_set_sys_prog.php?subject16=System Programming">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (17).jpg" alt="">
            <h3>microprocessor <br> CS-323</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="17_set_micro.php?subject17=Microprocessor">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (18).jpg" alt="">
            <h3>multimedia & animation technique</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="18_set_multi_at.php?subject18=Multimedia And Animation Technique">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (19).jpg" alt="">
            <h3>network installation and security</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="19_net_is.php?subject19=Network Installation And Security">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/subject-icon (20).jpg" alt="">
            <h3>Extra <br> Subjects</h3>
            <p>4 modules</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="20_set_extra.php?subject20=Extra Subjects">Take Test</a></button>
         </div>

      </div>

      <!-- subject division ends -->

      <br><br><br>

      <!-- notes division starts -->

      <h1 class="heading">important subjects notes</h1>

      <div class="box-container">

         <a href="https://drive.google.com/drive/folders/1w9jUus4XBk9YcWBB4X5Pg4te-uwAyPai?usp=sharing" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (1).jpg" alt="">
               <h3>computer <br> fundamentals</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1fLtuiJNwXahmFkSJ3vNlExbuzb1nLLw3?usp=sharing" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (2).jpg" alt="">
               <h3>operating <br> system</h3>
               <p>10 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1MjMEpZPtKve7tq-HzGKogrWWquWPuvS1?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (3).jpg" alt="">
               <h3>internet and web technology</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1QGAr-ZXowiNcsv8qaxtCft5w3TGLs9EW?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (4).jpg" alt="">
               <h3>computer <br> programming</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1aeJzLirKwMlDpHvMNjADOFS3Wrk7NFvt?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (5).jpg" alt="">
               <h3>data <br> structure</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/13yzHmFcx3fOXFSL1tYgvPYFqFXDc4tnZ?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (6).jpg" alt="">
               <h3>object oriented programming</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/19xS-RTKv4kFiAOhl7MWZFgccCY3wReFR?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (7).jpg" alt="">
               <h3>nework <br> operating system</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1TMXQluyK4TNMoI6Dg_A0jFYejcvDuv9h?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (8).jpg" alt="">
               <h3>computer architecture and organization</h3>
               <p>10 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1GOytrVhf5ZRyG-ojXD29UngfewMTlc0J?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (9).jpg" alt="">
               <h3>computer <br> networks</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1kqc75C9PtGqxO8On2NpV0yeU7iMztpNI?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (10).jpg" alt="">
               <h3>system installation and maintenance</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1ppu-6ovkyDulrpHUx7-hUQw-uMFrNQoB?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (11).jpg" alt="">
               <h3>computer <br> graphics</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1HdP__j-ZO-w3bs_-JuALdk_5EjhEp1kQ?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (12).jpg" alt="">
               <h3>software <br> engineering</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1rF9Y-UHcDl5F7sAfjOSinp8S47m-TuFj?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (13).jpg" alt="">
               <h3>database <br> management</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1jm1NVNFxfuOzRsu2Xtj-auBFOXtzmAtT?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (14).jpg" alt="">
               <h3>system analysis and design</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1jm1NVNFxfuOzRsu2Xtj-auBFOXtzmAtT?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (15).jpg" alt="">
               <h3>java <br> programming</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1miOGxc4nA5P4E1hiAs2ELNJgY94Slg93?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (16).jpg" alt="">
               <h3>system <br> programming</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1Zh02NNLrN2jPOi6wIeHstyYDO6YpC3Si?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (17).jpg" alt="">
               <h3>microprocessor <br> CS-323</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1G7430k_HGh0n0qqgRBX0Ylb3ojESr9LE?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (18).jpg" alt="">
               <h3>multimedia & animation technique</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1QRF4bf6vsIl1HjxueSsnVj2fYLmNIw1s?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (19).jpg" alt="">
               <h3>network installation and security</h3>
               <p>12 modules</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1YlNnB0ekDeU8CB1fiAUAdAMmQGZdQJpH?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/subject-icon (20).jpg" alt="">
               <h3>Extra <br> Notes</h3>
               <p>12 modules</p>
            </div>
         </a>

      </div>

      <!-- notes division ends -->

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
            <a href="home.php" class="link"> &#x21aa; Home</a>
            <a href="#" class="link"> &#x21aa; Subject</a>
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

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>