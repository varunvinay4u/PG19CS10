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
    
    <script src="assets/js/main.js"> </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>


    <div class="wrapper">
        <header>
           <nav>
              <div class="menu-icon">
                 <i class="fa fa-bars fa-2x"></i>
              </div>
              <div class="logo">
                 <img src="assets/images/logo_temp.png" alt="" width="60" height="48">
              </div>
              <div class="menu">
                 <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contacct">Contact</a></li>
                    <li><a href="#facilities">Facilities</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a class="btn" href="/assets/login.php">Sign In</a></li>
                 </ul>
              </div>
           </nav>
        </header>
        <div class="content">
            <h1>HEADINGGGG..........</h1>
            <p>paragra[ph.......................................................
                <br>..........................................................</p>
            <a href="/html/bookappoinment.html" class="hero-btn">Book Appoinment</a>
        </div>
     </div>
  </body>
</html>

    
    <section id="contact" class="contact-us">
        <h1>We Are Here To Help</h1>
        <span class="heading-underline solid">
            <span></span>
        </span>
        <p>qjkqshwjqdv,qwhjvdmqwgdvjqnhwgddddd hgdwqhgdjqdqdqwdjb dhdqhwgy</p>
        <div class="row">
            <div class="contact-col">
                <a href="" class="contact-icon">
                    <i class="bi bi-telephone-fill"></i>
                </a>
                <h3>Phone Number</h3>
                <p>
                    123456789 <br>
                    123456789 <br>
                    123456789
                </p>
            </div>
            <div class="contact-col">
                <a href="" class="contact-icon">
                    <i class="bi bi-envelope-fill"></i>
                </a>
                <h3>Email</h3>
                <p>abcd@gmail.com <br>
                    abcd@gmail.com <br>
                    abcd@gmail.com
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





    <section id="facilities" class="facilities">
        <h1>Our facilities</h1>
        <span class="heading-underline solid">
            <span></span>
        </span>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. accusantium facilis!</p>
        <div class="row">
            <div class="facilities-col">
                <img src="/demo.png" alt="">
                <h3>heading1</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci nesciunt mollitia velit! Maxime, quam
                    dolorum magni accusamus saepe consectetur dolores suscipit ea doloribus necessitatibus ex! Unde recusandae ab
                    odio tempore.</p>
            </div>
            <div class="facilities-col">
                <img src="/demo.png" alt="">
                <h3>heading1</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci nesciunt mollitia velit! Maxime, quam
                    dolorum magni accusamus saepe consectetur dolores suscipit ea doloribus necessitatibus ex! Unde recusandae ab
                    odio tempore.</p>
            </div>
            <div class="facilities-col">
                <img src="/demo.png" alt="">
                <h3>heading1</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci nesciunt mollitia velit! Maxime, quam
                    dolorum magni accusamus saepe consectetur dolores suscipit ea doloribus necessitatibus ex! Unde recusandae ab
                    odio tempore.</p>
            </div>
        </div>
    </section>





    <section id="services" class="services">
        <h1>our services</h1>
        <span class="heading-underline solid">
            <span></span>
        </span>
        <p>asdfghjklpoiuytrewqzxcvbnmwertyuioplk
        jhgfdsazxcvbnm,poiuywqasdfghjkl.,mnbvcxz</p>
        <div class="row">
            <div class="service-col">
                <img src="/Educational-Counselling-1.jpg" alt="">
                <div class="layer">
                    <h3>Counselling</h3>
                </div>
            </div>
            <div class="service-col">
                <img src="/depressed-boy-talking-to-child-psychologist-about-vector-17941152.jpg" alt="">
                <div class="layer">
                    <h3>MindBuddy</h3>
                </div>
            </div>
            <div class="service-col">
                <img src="/Corporate-Wellness-Strategies.png" alt="">
                <div class="layer">
                    <h3>Corporate Wellness</h3>
                </div>
            </div>
        </div>
    </section>






    <section class="bookslot">
        <h1>Book A Slot Now</h1>
        <a href="/assets/login.php" class="hero-btn">Join with Us</a>
    </section>





    <section class="review">
        <h1>What our customers says</h1>
        <p>Lorem ipsum dolor, sit amet eos ipsa maxime recusandae!</p>
        <div class="row">
            <div class="review-col">
                <img src="/logo_temp.png" alt="">
                <div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Omnis voluptatem optio delectus officia beatae aperiam 
                        odit voluptates dolores tenetur maiores minus, 
                        cum eveniet sequi incidunt quam saepe est ex deleniti!
                    </p>
                    <h3>name1</h3>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
            </div>
            <div class="review-col">
                <img src="/logo_temp.png" alt="">
                <div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Omnis voluptatem optio delectus officia beatae aperiam 
                        odit voluptates dolores tenetur maiores minus, 
                        cum eveniet sequi incidunt quam saepe est ex deleniti!
                    </p>
                    <h3>name2</h3>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
            </div>
        </div>
    </section>





    <section class="footer">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Ab doloribus temporibus est ea alias dolorem numquam explicabo, 
            <br> adipisci aspernatur saepe ipsum reprehenderit sit, 
            impedit,excepturi optio ad sapiente.
        </p>
        <div class="icons">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-linkedin"></i>
        </div>
        <p>© 2022 MindBuddy</p>
    </section>
    








    
</body>
</html>
