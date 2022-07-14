<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Menu Details</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/about_css.css">
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
              <span class="glyphicon glyphicon-shopping-cart"></span>
            </li>
            <li>
              <span class="glyphicon glyphicon-user"></span>
            </li>
          </ul>
         </div>
       </div>
       </div>
     </div>
   </div>
 </header>
 <!-- header -->
    
<!-- banner -->

<section>
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <img src="images/HeaderImg.png">
        <div class="about_head">
          <h1>Menu Details</h1>
          
        </div>
      </div>
      
    </div>
    
  </div>
  </section>

<!-- banner -->
  
<!-- Deatails content -->
<div class="container">

<?php
include('connection.php');
$sql = "select * from `productinfo` where id='".intval($_GET['id'])."'";
$data = $conn->query($sql);
if($data->num_rows > 0){
  while($row = $data->fetch_assoc()){
    echo "
    <div class='row'>
      <div class='col-md-6'>
          <img src='{$row["file"]}'/>
      </div>
      <div class='col-md-6'>
          <div class='details_items'>
           <h1>{$row["name"]} &nbsp {$row["price"]}</h1>
            <span class='glyphicon glyphicon-star'></span>
            <span class='glyphicon glyphicon-star'></span>
            <span class='glyphicon glyphicon-star'></span>
            <span class='glyphicon glyphicon-star-empty'></span>
            <span class='glyphicon glyphicon-star-empty'></span>
            <p class='text-left'>{$row["details"]}</p>
            <h3>Quantity <span class='glyphicon glyphicon-plus-sign'></span><select type='select'>1</select> <span class='glyphicon glyphicon-minus-sign'></span></h3>
           <p> <span class='glyphicon glyphicon-tag'></span>&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
           <p> <span class='glyphicon glyphicon-modal-window'></span>&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href='Cart.html'>
           <button type='button' class='btn btn-danger'><strong>Shop Now</strong></button> 
           </a>
          </div>
        </div>
  </div>
<div class='container'>
    <div class='row'>
        <div class='col-md-7'>
            <div class='details_toggle'>
                <ul class='nav nav-tabs nav-justified'>
                    <li class='active'><a>Descriptions</a></li>
                    <li><a>Reviews</a></li>
                    <li><a>Additional Info</a></li>
                  </ul>
        </div>
    </div>
    <div class='col-md-12'>
        <p>
        {$row["description"]}
        </p>
    </div>
</div>
";
}
}
$conn->close();
?>
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