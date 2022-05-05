<?php
    ob_start();
    session_start();
$con = mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($con,'IA');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        
        <link
            rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <!-- MAIN CSS -->    
        <link rel="stylesheet" href="css/interactive-style.css" />
        
        <title>Sign In Page</title>
    </head>
    <body>
        
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="signin.php" method="post">
                <h1>Join Deliverewards</h1>
                <span>Sign up and get a full deliverace service!</span>
                <div class = "input-box">
                    <i class="fa fa-user"></i>
                    <input name = "firstname" type="fname" placeholder="First Name" required/>
                </div>
                <div class = "input-box">
                    <i class="fa fa-user"></i>
                    <input name = "lastname" type="lname" placeholder="Last Name" required/>
                </div>
                <div class = "input-box">
                    <i class="fa fa-envelope-o"></i>
                    <input name = "email" type="email" placeholder="Email" required/>
                </div>
                <div class = "input-box">
                    <i class="fa fa-phone"></i>
                    <input name = "phonenumber" type="phonenumber" placeholder="Phone number" required/>
                </div>
                <div class = "input-box">
                    <i class="fa fa-key"></i>
                    <input name = "password" type="password" placeholder="Password" required/>
                </div>
                <div class = "input-box">
                    <i class="fa fa-key"></i>
                    <input name = "cpassword" type="password" placeholder="Confirm password" required/>
                </div>
                <input name = "signup_btn" type = "submit" id = "button" value = "Sign up">
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="signin.php" method="post">
                <h1>Already our member?</h1>
                <span>Sign in with your email and password</span>
                <div class = "input-box">
                    <i class="fa fa-envelope-o"></i>
                    <input name = "email" type="email" placeholder="Email" required/>
                </div>
                <div class = "input-box">
                    <i class="fa fa-key"></i>
                    <input name = "password" type="password" placeholder="Password" required id="myInput"/>
                    <span class = "eye" onclick="myFunction()">
                        <i id = "hide1" class="fa fa-eye"></i>
                        <i id = "hide2" class="fa fa-eye-slash"></i>
                    </span>
                </div>
                <a href="contact.php">Forgot your password?</a>
                <input name = "signin_btn" type = "submit" id = "button" value = "Sign In">
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Connect with us!</h1>
                    <p>To keep connected with our legendary rewards please login with your email and password</p>
                    <div id = "signIn"><div id = "button" class = "ghost">Sign In</div></div>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Want a full Deliverace experience?</h1>
                    <p>Get your food faster, checkout more quickly, earn rewards and discounts and much more by creating Deliverewards account</p>
                    <div id = "signUp"><div id = "button" class="ghost">Sign Up</div></div>
                </div>
            </div>
        </div>
    </div>
        
    <script>
        function myFunction(){
            var x = document.getElementById("myInput");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");
        
            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>
        
    <?php
        if(isset($_POST['signup_btn']))
        {
            //echo '<script type="text/javascript"> alert("sign up button clicked")</script>';
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            if($password==$cpassword)
            {
                $query= "select * from membertable WHERE email='$email'";
                $query_run = mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0)
                {
                    echo '<script type="text/javascript"> alert("this email has already been registered, please try another email")</script>';
                }
                else
                {
                    $query= "insert into membertable values('$email', '$firstname', '$lastname','$phonenumber', '$password')";
                    $query_run = mysqli_query($con,$query);

                    if($query_run)
                    {
                        echo '<script type="text/javascript"> alert("Thank you for joining us, ' . $firstname. '! Please go back to the page to sign in!")</script>';
                    }
                    else
                    {
                        echo '<script type="text/javascript"> alert("error!")</script>';
                    }
                }
            }
            else{
            echo '<script type="text/javascript"> alert("Please make sure your passwords match")</script>';
            }
        }
        if(isset($_POST['signin_btn']))
        {
            $email=$_POST["email"];
            $password=$_POST["password"];

            $query= "select * from membertable WHERE email='$email' AND password='$password'";

            $query_run = mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                $_SESSION['email']= $email;
                header('location:signinhome.php');
                ob_end_flush();
            }
            else
            {
                echo '<script type="text/javascript"> alert("Invalid Credentials")</script>';
            }
        }
    ?>
        
    <script src="js/main.js"></script>
    </body>
</html>
<!--Source code : https://codepen.io/FlorinPop17/pen/vPKWjd-->

