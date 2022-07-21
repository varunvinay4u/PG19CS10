<?php 
session_start();

	 include("assets/connection.php");
	 include("assets/functions.php"); 

	 #$user_data = check_login($con);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindBuddy</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="images/logo_temp.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/main.js"> </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <style>
        header{
                background-image: url('assets/images/mblogo.png');
        }
    </style>
</head>
<body>


    <div class="wrapper">
        <header>
           <nav class="navbar">
              <div class="menu-icon">
                 <i class="fa fa-bars fa-2x"></i>
              </div>
              <div class="logo">
                 <img src="assets/images/logo_temp.png" alt="" width="60" height="48">
              </div>
              <div class="menu">
                 <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a class="btn" href="assets/login.php">Sign In</a></li>
                 </ul>
              </div>
           </nav>
        </header>
	  <div class="content" >
		
            <h1>MindBuddy : Your Mental Health Partner</h1>
            <p>Don't Worry, We're Here to Help You</p> <br>
            <a href="assets/bookappoinment.html" class="hero-btn btn-main">Book Appoinment</a>
        </div>
    </div>
	
	
	
	
	
	<section id="services" class="services">
        <h1>Our Services</h1>
        <span class="heading-underline solid">
            <span></span>
        </span>
        <p>We provide three major services: </p>
        <div class="row">
            <div class="service-col">
                <img src="assets/images/Educational-Counselling-1.jpg" alt="">
                <div class="layer">
                    <h3>Adult Counselling</h3>
                </div>
            </div>
            <div class="service-col">
                <img src="assets/images/depressed-boy-talking-to-child-psychologist-about-vector-17941152.jpg" alt="">
                <div class="layer">
                    <h3>Child Counselling</h3>
                </div>
            </div>
            <div class="service-col">
                <img src="assets/images/Corporate-Wellness-Strategies.png" alt="">
                <div class="layer">
                    <h3>Corporate Wellness</h3>
                </div>
            </div>
        </div>
    </section>
	
	
	
	
	
    <section id="features" class="features">
        <h1>Features</h1>
        <span class="heading-underline solid">
            <span></span>
        </span>
        <p>Try out our various features to <br>help you relax and calm down! <br>or just to have some fun!!</p>
        <div class="row">
            <div class="features-col features-btn">
                <a href="assets/meditation.html" style="text-decoration: none;">
                    <img src="assets/images/meditation_timer.png" alt="">
                    <div class="layer">
                        <h3>Meditation <i class="bi bi-stopwatch"></i></h3>
                    </div>
                </a>
            </div>
             
            <!-- <div class="features-col features-btn">
                <a href="#" style="text-decoration: none;">
                    <img src="/assets/images/calm_music.jpg" alt="">
                    <div class="layer">
                        <h3>Calm Music <i class="bi bi-music-note-beamed"></i></h3>
                    </div>
                </a>
            </div> -->

            <div class="features-col features-btn" style="text-align: center; border: transparent; background: linear-gradient(120deg, #b04c637c, #b270697c, #b04c637c);">
                <h3> <br><br>
                    Sit <br>
                    Relax <br>
                    Take a deep breath, <br>
                    and just enjoy your life <br>
                    <i class="bi bi-heart-fill" style="color: #b21b1b; font-size: 16px;"></i>
                </h3>
            </div>
             
            <div class="features-col features-btn">
                <a href="assets/relaxationactivity.html" style="text-decoration: none;">
                    <img src="assets/images/meditation_activities.png" alt="">
                    <div class="layer">
                        <h3>Relaxation <i class="bi bi-emoji-smile"></i></h3>
                    </div>
                </a>
            </div>
             
        </div>
    </section>





    <section class="review" id="review">
        <h1>What our customers have to say about us</h1>
        <span class="heading-underline solid">
            <span></span>
        </span>
        <p>read our reviews to see how MindBuddy has been useful for others like you!</p>
        <div class="row">
            <div class="review-col">
                <img src="/assets/images/user-icon.png" alt="">
                <div>
                    <p> Very useful and helpful. the activities and meditation features always helps me relax
                    </p>
                    <h3>Swathi</h3>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
            </div>
            <div class="review-col">
                <img src="/assets/images/user-icon.png" alt="">
                <div>
                    <p>One of the best platforms I've come across that acts as a companion and helps with improving your mental health
                    </p>
                    <h3>Thabsheera</h3>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>
        </div>
    </section>
	
	
	
	
	
    <section class="bookslot">
        <h1>Book A Slot Now</h1>
        <a href="assets/login.php" class="hero-btn">Join with Us</a>
    </section>
	
	
	




    <section class="footer">
        <section id="contact" class="contact-us">
            <h1>Contact Us</h1>
            <span class="heading-underline solid">
                <span></span>
            </span>
            <p class="footer-abt">feel free to contact us if you have any queries or issues!! <br> We are here to help you 24/7</p>
            <div class="row">
                <div class="contact-col">
                    <a href="" class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </a>
                    <h3>Phone Number</h3>
                    <p>
                        8792878758 <br>
                        8547552799 <br>
                        9383402154 <br>
                        9539583596
                
                    </p>
                </div>
                <div class="contact-col">
                    <a href="" class="contact-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                    <h3>Email</h3>
                    <p>varunvinay@mindbuddy.com <br>
                        thabsheerack@mindbuddy.com <br>
                        swathik@mindbuddy.com <br>
                        sreeharips@mindbuddy.com
                    </p>
                </div>
                <div class="contact-col">
                    <a href="" class="contact-icon">
                        <i class="bi bi-chat-right-text-fill"></i>
                    </a>
                    <h3>Social Network</h3>
                    <div class="row">
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-linkedin"></i>
                    </div>
                </div>
            </div>
        </section>
        <p style="color: #000; font-size: 13px;">© 2022 MindBuddy</p>
    </section>
    



    
</body>
</html>
