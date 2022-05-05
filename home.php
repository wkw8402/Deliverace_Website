<?php
    session_start();
$con = mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($con,'IA');
?>
<!DOCTYPE html>
<html>
<head>

     <title>Deliverace Korea Restaurant</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link
            rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
            crossorigin="anonymous"
     />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
    
</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php"><image><img src="images/brand.png"/></image></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#team" class="smoothScroll">Aces</a></li>
                         <li><a href="#menu" class="smoothScroll">Menu</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Order</a></li>
                         <li><a href="#contact" class="smoothScroll">Location</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Call Now! <i class="fa fa-phone"></i> 200 021 223</a></li>
                         <li><a href="signin.php" class="#" ><button class = "section-btn">Sign In</button></a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Deliverace Korea Restaurant</h3>
                                             <h1>Our mission is to provide an unforgettable experience</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our aces</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Your Perfect Dinner</h3>
                                             <h1>The best dinning quality can be here too!</h1>
                                             <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>New Korean Restaurant in Town</h3>
                                             <h1>Enjoy our special traditional menus every Wednesday and Saturday</h1>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">We are here</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


    <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Read our story</h4>
                                   <h2>We've been Making The Delicious Foods Since 1999</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Kyung-Wan WOO, CEO of Deliverace Korea, believes that all his customers will definitely be surprised of his foods  for three times: one from the fantastic visual appearance, another from killing smell and the other from the unique and traditional taste that they could never experience in their life. . </p>
                                   <p>Moreover, Kyung-Wan has been thriving to revive the markets in Lomas de Chapultepec by attracting busy officer workers and making customer loyalty even during the COVID-19 quarantine in 2020. His efforts has been extended until the gift coupons and membership nowadays. In addition, he has also provided the service of the best quality such as takeout/delivery services, online orders for customers and free-feedbacks.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/ceoimage.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- Ace -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Meet our aces</h2>
                              <h4>They are professionals &amp; Specialists</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/mainingredient.jpg" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Hanwoos(korean beef) and Handons(korean pork) are USDA graded, hand-trimmed and cooked to order.</h4> 
                                             <ul class="social-icon">
                                                  <li><a class="fa fa-paw"></a></li>
                                                  <li><a class="fa fa-heart"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>Cow and Pig</h3>
                              <p>Main Ingredients</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/mainchef.jpg" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Selects choice ingredients and cook dishes the best flavour</h4>
                                             <ul class="social-icon">
                                                  <li><a class="fa fa-user"></a></li>
                                                  <li><a class="fa fa-cutlery"></a></li>
                                                  <li><a class="fa fa-star"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>Kyung-Wan WOO</h3>
                              <p>Owner &amp; Manager &amp; Main Chef</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/mainemployee.jpg" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4>Fastest and Safest delivery ever</h4>
                                             <ul class="social-icon">
                                                  <li><a class="fa fa-car"></a></li>
                                                  <li><a class="fa fa-motorcycle"></a></li>
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         <div class="team-info">
                              <h3>E.T</h3>
                              <p>Main Delivery Man</p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Menus</h2>
                              <h4>Dining &amp; Catering</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/menu1.jpg" class="image-popup" title="Roasted Beef and Soybean Paste Stew">
                                   <img src="images/menu1.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Roasted Beef and Soybean Paste Stew</h3>
                                             <p>Beef / Soybean / #SideDish Included</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>$480</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/menu2.jpg" class="image-popup" title="Roasted Pork Belly and Kimchi Stew">
                                   <img src="images/menu2.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Roasted Pork Belly and Kimchi Stew</h3>
                                             <p>Pork / Spicy / #SideDish Included</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>$480</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/menu3.jpg" class="image-popup" title="Bibimbap">
                                   <img src="images/menu3.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Bibimbap</h3>
                                             <p>Special Sauce / Vegetables / #SideDish Included</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>$420</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/menu4.jpg" class="image-popup" title="Rice and Beef-Rib Soup">
                                   <img src="images/menu4.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Rice and Beef-Rib Soup</h3>
                                             <p>Beef-Rib / Refreshing / #SideDish Included</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>$440</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/menu5.jpg" class="image-popup" title="Pork Cutlet">
                                   <img src="images/menu5.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Pork Cutlet</h3>
                                             <p>Fried / Crispy / #Rice and SideDish Included</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>$440</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/menu6.jpg" class="image-popup" title="Seafood Pancake and Makgeoli">
                                   <img src="images/menu6.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Seafood Pancake and Makgeolli</h3>
                                             <p>Pepper / Calamary / #SideDish Included</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>$420</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>


               </div>
          </div>
     </section>


     <!-- Order -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Start Your Order Now!</h2>
                         </div>
                    </div>  

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <li><a href="ordertakeoutn.php" class="#" ><img src="images/takeout.jpg" class="img-responsive" alt=""></a></li>
                         </div>
                    </div>
                   
                   <div class="col-md-4 col-sm-4">
                              <img src="images/or.jpg" class="img-responsive" alt="">
                    </div>
                   
                   <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <li><a href="orderdeliveryn.php" class="#" ><img src="images/delivery.jpg" class="img-responsive" alt=""></a></li>
                         </div>
                    </div>

               </div>
          </div>
     </section>  


     <!-- Location -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d599.2733809678027!2d-99.20396076737575!3d19.423757537465534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201f99f7f93d9%3A0x172ccb8f1e751de7!2sMidam!5e0!3m2!1ses-419!2smx!4v1591754291099!5m2!1ses-419!2smx" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                         </div>
                    </div>    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Please Leave Your Opinion About Us!</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Your message has been sent successfully.</h6>
                              
                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>
                              
                             <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>
                             
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="phonenumber" placeholder="Phone number">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject (ex. Had an excellent meal)">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your problem"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>


               </div>
          </div>
     </section>   
    
    <?php
    if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
        
            $query= "insert into contacttable values('$email','$phonenumber','$subject','$message')";
            $query_run = mysqli_query($con,$query);
            
            echo '<script type="text/javascript"> alert("Thank you very much for feedback!")</script>';
        }
    ?>

     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">We are here</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Pedregal 49, Lomas - Virreyes,<br>Lomas de Chapultepec,<br>Miguel Hidalgo,<br>11000 Ciudad de México, CDMX</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Contact</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>55-1591-0865 | 010-4083-0418</p>
                                   <p><a href="https://www.greengates.edu.mx/">7067@greengates.edu.mx</a></p>
                                   <p>Instagram: kyungww.1223 </p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <div>
                                        <strong>Monday to Friday</strong>
                                        <p>1:00 PM - 12:00 PM</p>
                                   </div>
                                   <div>
                                        <strong>Saturday to Sunday</strong>
                                        <p>12:00 AM - 12:00 PM</p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                              <p><br>Copyright &copy; 2018 <br>Deliverace Korea
                              
                              <br><br>Design Aid: TemplateMo</p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
<!-- Source Code : Eatery Cafe Template http://www.templatemo.com/tm-515-eatery-->