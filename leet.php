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
   <title>TestWizard | LEET</title>

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
         <a href="index.php">Home</a>
         <a href="subject.php">Subject</a>
         <a href="#">Leet</a>
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
      <h3>LEET</h3>
      <p> <a href="index.php">home</a> / LEET </p>
   </section>

   <!-- leet section starts  -->

   <section class="subjects">

      <!-- leet division starts  -->

      <h1 class="heading">Syllabus</h1>

      <div class="box-container">

         <!-- <div class="box">
            <img src="images/Physics.jpg" alt="">
            <h3>Physics</h3>
            <p>12 modules</p>
         </div> -->

         <a href="" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Chemistry.jpg" alt="">
               <h3>Physics & Chemistry</h3>
               <p>Syllabus</p>
            </div>
         </a>

         <a href="" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Mathematics.jpg" alt="">
               <h3>Mathematics</h3>
               <p>Syllabus</p>
            </div>
         </a>

         <a href="" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Group-A.jpg" alt="">
               <h3>Group-A</h3>
               <p>Syllabus</p>
            </div>
         </a>

         <a href="" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Group-B.jpg" alt="">
               <h3>Group-B</h3>
               <p>Syllabus</p>
            </div>
         </a>

         <a href="" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Group-C.jpg" alt="">
               <h3>Group-C</h3>
               <p>Syllabus</p>
            </div>
         </a>

      </div>
      <br><br>

      <!-- leet division ends  -->

      <!-- leet division starts  -->

      <h1 class="heading">Physics, Chemistry and Mathematics</h1>

      <!-- 20 mathematics, 15 physics and 15 chemistry -->
      <!-- 50 minutes for 50 questions -->

      <div class="box-container">

         <div class="box">
            <img src="images/leet 2012.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2012</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/01_SET_PCM_2012.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2013.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2013</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/02_SET_PCM_2013.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2014.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2014</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/03_SET_PCM_2014.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2015.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2015</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/04_SET_PCM_2015.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2016.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2016</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/05_SET_PMC_2016.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2017.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2017</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/06_SET_PCM_2017.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2018.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2018</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/07_SET_PCM_2018.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2019.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2019</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/08_SET_PCM_2019.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2020.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2020</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/09_SET_PCM_2020.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2021.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2021</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/10_SET_PCM_2021.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2022.jpg" alt="">
            <h3>LEET PCM</h3>
            <p>Year 2022</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/11_SET_PCM_2022.html">Take Test</a></button>
         </div>

      </div>
      <br><br>

      <!-- leet division ends  -->

      <!-- leet division starts  -->

      <h1 class="heading">Group A (Electric, Electronic and Computer Group)</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/leet 2012.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2012</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/01_SET_GROUP_A_2012.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2013.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2013</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/02_SET_GROUP_A_2013.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2014.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2014</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/03_SET_GROUP_A_2014.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2015.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2015</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/04_SET_GROUP_A_2015.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2016.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2016</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/05_SET_GROUP_A_2016.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2017.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2017</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/06_SET_GROUP_A_2017.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2018.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2018</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/07_SET_GROUP_A_2018.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2019.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2019</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/08_SET_GROUP_A_2019.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2020.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2020</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/09_SET_GROUP_A_2020.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2021.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2021</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/10_SET_GROUP_A_2021.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2022.jpg" alt="">
            <h3>LEET Group-A</h3>
            <p>Year 2022</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/11_SET_GROUP_A_2022.html">Take Test</a></button>
         </div>

      </div>
      <br><br>

      <!-- leet division ends  -->

      <!-- leet division starts  -->

      <h1 class="heading">Group B (Mechanical Group)</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/leet 2012.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2012</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2013.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2013</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2014.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2014</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2015.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2015</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2016.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2016</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2017.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2017</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2018.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2018</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2019.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2019</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2020.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2020</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2021.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2021</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2022.jpg" alt="">
            <h3>LEET Group-B</h3>
            <p>Year 2022</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

      </div>
      <br><br>

      <!-- leet division ends  -->

      <!-- leet division starts  -->

      <h1 class="heading">Group C (Chemical and Food Group)</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/leet 2012.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2012</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2013.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2013</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2014.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2014</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2015.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2015</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2016.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2016</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2017.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2017</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2018.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2018</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2019.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2019</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2020.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2020</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2021.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2021</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2022.jpg" alt="">
            <h3>LEET Group-C</h3>
            <p>Year 2022</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;" disabled>
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="#">Take Test</a></button>
         </div>

      </div>
      <br><br>

      <!-- leet division ends  -->

      <!-- leet division starts  -->

      <h1 class="heading">General Knowledge, Mental Aptitude & English</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/leet 2012.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2012</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/01_SET_APTITUDE_2012.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2013.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2013</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/02_SET_APTITUDE_2013.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2014.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2014</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/03_SET_APTITUDE_2014.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2015.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2015</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/04_SET_APTITUDE_2015.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2016.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2016</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/05_SET_APTITUDE_2016.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2017.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2017</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/06_SET_APTITUDE_2017.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2018.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2018</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/07_SET_APTITUDE_2018.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2019.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2019</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/08_SET_APTITUDE_2019.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2020.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2020</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/09_SET_APTITUDE_2020.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2021.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2021</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/10_SET_APTITUDE_2021.html">Take Test</a></button>
         </div>

         <div class="box">
            <img src="images/leet 2022.jpg" alt="">
            <h3>LEET Aptitude</h3>
            <p>Year 2022</p>
            <button style="display: inline-block; margin-top: 1rem; padding: .5rem 2rem; font-size: 1.8rem; border: 0.1rem solid #0eb582; border-radius: 8px; background: transparent; color: #fff; cursor: pointer; text-transform: capitalize;">
               <a style="text-decoration: none; color: #000; font-weight: 600;" href="./LEET-Sets/11_SET_APTITUDE_2022.html">Take Test</a></button>
         </div>

      </div>
      <br><br>

      <!-- leet division ends  -->

      <!-- leet division starts  -->

      <h1 class="heading">Notes Section</h1>

      <div class="box-container">

         <a href="https://drive.google.com/drive/folders/1Ncz89i-4MrVUTME_P_b1VyfSRpKXKa8E?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Physics.jpg" alt="">
               <h3>Physics</h3>
               <p>Notes of Physics</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1DCSFZ9557TqcF9C4MHusZeHaO6LutDz9?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Chemistry.jpg" alt="">
               <h3>Chemistry</h3>
               <p>Notes of Physics</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1GNC9QehvttZdr3k__XJ3Bm9O880EVGpR?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Mathematics.jpg" alt="">
               <h3>Mathematics</h3>
               <p>Notes of Physics</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1FcKxDhyBbtLEBtmkPNl9Mp0R3UCENo9I?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Group-A.jpg" alt="">
               <h3>Group-A</h3>
               <p>Notes of Group-A</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1UBFiIc1PD1kViHkFpFhddX1J1mndvTsB?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Group-B.jpg" alt="">
               <h3>Group-B</h3>
               <p>Notes of Group-B</p>
            </div>
         </a>

         <a href="https://drive.google.com/drive/folders/1UCEt2UMLtQdSE4zMCtit6ebO8whd9jFC?usp=share_link" target="_blank" rel="noopener noreferrer">
            <div class="box">
               <img src="images/Group-C.jpg" alt="">
               <h3>Group-C</h3>
               <p>Notes of Group-C</p>
            </div>
         </a>

      </div>

      <!-- leet division ends  -->
   </section>

   <!-- leet section ends  -->

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
            <a href="#" class="link"> &#x21aa; Leet</a>
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