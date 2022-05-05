<?php
    session_start();
$con = mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($con,'IA');
?>
<!DOCTYPE html>
<html>
<head>

     <title>Contact Page</title>
<!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
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
    <link rel="stylesheet" href="css/preloader.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link
            rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
            crossorigin="anonymous"
     />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style2.css">
    
</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>
    
<!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <img src = "images/simpson.gif">
                    </div>    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Don't worry. We will help you out!</h2>
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
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject (ex. Forgot my password)">
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
            
            $query= "select * from membertable WHERE email='$email' AND phonenumber ='$phonenumber';";
            $result = mysqli_query($con,$query);
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0)
            {
                while ($row = mysqli_fetch_assoc($result)){
                    echo '<script type="text/javascript"> alert("We successfully found your password : ' . $row['password'] . '")</script>';
                }
            }
            else
            {
                echo '<script type="text/javascript"> alert("Invalid Credentials")</script>';
            }
    }
    ?>
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