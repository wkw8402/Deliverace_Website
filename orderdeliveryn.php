<?php
    session_start();
$con = mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($con,'IA');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delivery Order Page</title>
	<link rel="stylesheet" href="css/interactive-style2.css">
    <link rel="stylesheet" href="css/preloader.css">
	<script src="scripts.js"></script>
</head>
<body>
    
    <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

    <div class="wrapper">
        <div class="title">
            Delivery Order Form  
        </div>

        <form method="post" action="" id="form" onsubmit = "return validate();">
            <div class="input_wrap">
                <label for="email">Email Address</label>
                <input name="email" type="email" class="input" id="email" required>
            </div>
            <div class="input_wrap">
                <label for="phone">Phone Number</label>
                <input name="phone" type="text" class="input" id="phone" required>
            </div>
            <div class="input_wrap">
                <label for="street">Street Address</label>
                <input name="street" type="text" class="input" id="street" required>
            </div>
            <div class="input_wrap">
                <label for="apt">Apt/Suite/Floor</label>
                <input name="apt" type="text" class="input" id="apt">
            </div>
            <div class="input_wrap">
                <label for="meal1">Meal Choice 1</label>
                <div class="custom_select">    
                    <select name="meal1" id="meal1">
                      <option value=""></option>
                      <option value="sstew">Roasted Beef and Soybean Paste Stew</option>
                      <option value="kstew">Roasted Pork Belly and Kimchi Stew</option>
                      <option value="bibimbap">BibimBap</option>
                      <option value="ribsoup">Rice and Beef-rib soup</option>
                      <option value="cutlet">Pork Cutlet</option>
                      <option value="pancake">Seafood Pancake</option>    
                    </select>
                </div>
            </div>
            <div class="input_wrap">
                <label for="meal2">Meal Choice 2</label>
                <div class="custom_select">    
                    <select name="meal2" id="meal2">
                      <option value=""></option>
                      <option value="sstew">Roasted Beef and Soybean Paste Stew</option>
                      <option value="kstew">Roasted Pork Belly and Kimchi Stew</option>
                      <option value="bibimbap">BibimBap</option>
                      <option value="ribsoup">Rice and Beef-rib soup</option>
                      <option value="cutlet">Pork Cutlet</option>
                      <option value="pancake">Seafood Pancake</option>    
                    </select>
                </div>
            </div>
            <div class="input_wrap">
                <label for="meal3">Meal Choice 3</label>
                <div class="custom_select">    
                    <select name="meal3" id="meal3">
                      <option value=""></option>
                      <option value="sstew">Roasted Beef and Soybean Paste Stew</option>
                      <option value="kstew">Roasted Pork Belly and Kimchi Stew</option>
                      <option value="bibimbap">BibimBap</option>
                      <option value="ribsoup">Rice and Beef-rib soup</option>
                      <option value="cutlet">Pork Cutlet</option>
                      <option value="pancake">Seafood Pancake</option>    
                    </select>
                </div>
            </div>
            <div class="input_wrap">
                <input name = "submit_btn" type="submit" value="Order Now" class="btn">
            </div>
        </form>
    </div>
        <?php
        $vouchercode = "";
            $chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $charArray = str_split($chars);
            for($i = 0; $i < 7; $i++){
            $randItem = array_rand($charArray);
            $vouchercode .= "".$charArray[$randItem];
            }
        
        $member = "non-registered";
        $totalprice = 0;

    
        if(isset($_POST['submit_btn']))
        {
            //echo '<script type="text/javascript"> alert("sign up button clicked")</script>';
            
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $street = $_POST['street'];
            $apt = $_POST['apt'];
            $meal1 = $_POST['meal1'];
            $meal2 = $_POST['meal2'];
            $meal3 = $_POST['meal3'];
            
            if($meal1 == "sstew" || $meal2 == "sstew" || $meal3 == "sstew"){
                $totalprice = $totalprice + 480;
            }
            if($meal1 == "kstew" || $meal2 == "kstew" || $meal3 == "kstew"){
                $totalprice = $totalprice + 480;
            }
            if($meal1 == "bibimbap" || $meal2 == "bibimbap"|| $meal3 == "bibimbap"){
                $totalprice = $totalprice + 420;
            }
            if($meal1 == "pancake" || $meal2 == "pancake" || $meal3 == "pancake"){
                $totalprice = $totalprice + 420;
            }
            if($meal1 == "ribsoup" || $meal2 == "ribsoup" || $meal3 == "ribsoup"){
                $totalprice = $totalprice + 440;
            }
            if($meal1 == "cutlet" || $meal2 == "cutlet" || $meal3 == "cutlet"){
                $totalprice = $totalprice + 440;
            }
            
            $query= "insert into deliveryordertable values('$vouchercode','$member','$email','$phone','$street','$apt','$meal1','$meal2','$meal3', '$totalprice')";
                    $query_run = mysqli_query($con,$query);
					echo '<script type="text/javascript"> alert("Your order has been taken successfully. Your order code is  [' . $vouchercode . ']. Please show this code to your delivery man when you get your food. Thank you so much for your purchase and hope to serve you again!")</script>';	
        }
    ?>
    <script src="js/main.js"></script>
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
<!--Source code : https://codepen.io/RajRajeshDn/pen/povzogE-->