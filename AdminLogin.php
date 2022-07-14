<?php

include('connection.php');

if(isset($_POST['email'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

$sql = "select * from admin where email='".$email."' AND password='".$password."' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "You have successfully logged in";
    header('Location: https://localhost/ArishaAbid/Menu.html');
    exit();
  }
  else{
    echo "You have entered incorrect input";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/astyle.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <!-- <link rel="stylesheet" type="text/css" href="css/about_css.css"> -->
  </head>
  <body>
  	<div>


 <!-- header -->

 <header>
   <div class="container">
     <div class="row">
       <div class="col-md-2">
         <div class="logo">
           <img src="images/logo.png" alt="logo">
         </div>
       </div>
       <div class="col-md-6">
         <div class="navigation">
           <ul>
             <li><a href="#">Home</a></li>
             <li><a href="#">About us</a></li>
             <li><a href="#">Shop</a></li>
             <li><a href="#">Contact</a></li>
           </ul>
         </div>
       </div>

       <div class="row">
       <div class="col-md-3">
         <div class="icons">
          <ul>
            <li>
              <a href="#"><img src="images/cart_logo.png"></a>
            </li>
            <li>
               <a href="#"><img src="images/user_logo.jfif"></a>
            </li>
          </ul>
         </div>
       </div>
       </div>
     </div>
   </div>
 </header>
 <!-- header -->
  
<!-- contact content -->
<div class="container">
<div class="row">
            <div class="col-md-12">
              <div class="form_c">
                <div class="form_text">
                <h4>Login</h4>
              </div>
              <div class="form1">
                <form method="POST">
                  <label for="" id="name_label">Your Email</label>
                  <label for="" id="mail_label">Password</label> 
                  <br>
                  <input type="text" placeholder="Email" id="name_input" name="email">
                  <input type="password" placeholder="******" id="email_input" name="password"> <br>

                  <button id="send_btn">Login</button>
                </form>
              </div>
              </div>
            </div>
        </div>
</div>

 

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-4">
        <div class="delivery">
        <img src="images/truck.png">
        <h3>Free Shipping</h3>
        <p>Sign Up for Updates and get free Shipping</p>
     </div>
      </div>

      <div class="col-md-4">
        <div class="delivery2">
        <img src="images/box.png">
        <h3>30 Minutes Delivery</h3>
        <p>Everything you order will be quickly delivered to your door  </div>
      </div>
      <div class="col-md-4">
        <div class="delivery">
        <img src="images/quality.png">
        <h3>Best Quality Guarantee</h3>
        <p>Lorem ipsum dolo</p>
     </div>
      </div>
    </div>
  </div>
  
</div>
</div>
</div>
<!-- about content -->

<!-- Footer -->
<footer>
  <div class="row">
    <div class="col-md-12">
      <div class="footer">
        <p>@2022 <b>Domain</b>.All Rights Reserved</p>
        <div class="row">
        <div class="col-md-6">
          <div class="footer_links">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Product</a></li>
              <li><a href="#">Contact</a></li>
            </ul><br>
            <img src="images/soc_med_icon.png">

          </div>

        </div>
      </div>
      </div>

    </div>

  </div>
</footer>
<!-- Footer -->

    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>