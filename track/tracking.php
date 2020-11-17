 <?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><?php $num="8123026473";?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RED ROCKET DELIVERY TRACKING &mdash; Freight Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="red/fonts/icomoon/style.css">

    <link rel="stylesheet" href="red/css/bootstrap.min.css">
    <link rel="stylesheet" href="red/css/magnific-popup.css">
    <link rel="stylesheet" href="red/css/jquery-ui.css">
    <link rel="stylesheet" href="red/css/owl.carousel.min.css">
    <link rel="stylesheet" href="red/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="red/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="red/fonts/flaticon/font/flaticon.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="red/css/aos.css">

    <link rel="stylesheet" href="red/css/style.css">
    <style>
    .bs-example{
        margin: 20px;        
    }
</style
  </head>
  <body>
  
  
  <div class="bs-example">
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $_SESSION['senderc'];?>%">PACKAGE DELIVERY PROCESSING... </div>
    </div>
</div>
  
  
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(red/images/1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">YOUr PACKAGE CURRENT LOCATION :<strong><?php echo $_SESSION['curl'];?> </strong></h1>
       
          </div>
        </div>
      </div>
    </div>  

    

    <div class="site-section bg-image overlay" style="background-image: url('red/images/1.jpg');">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary" data-aos="fade"> </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="how-it-work-item">
              <span class="number">1</span>
              <div class="how-it-work-body">
                <h2>STAGE ONE</h2>
                <p class="mb-5">Verified Sender Details </p>
                <ul class="ul-check list-unstyled white">
                  <li class="text-white">Package is being sent by <?php echo $_SESSION['name'];?> <?php echo $_SESSION['lname'];?> </li>
                  <li class="text-white">Sender's Location: <?php echo $_SESSION['sendera'];?> </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="how-it-work-item">
              <span class="number">2</span>
              <div class="how-it-work-body">
                <h2>STAGE TWO</h2>
                <p class="mb-5">Package Identification and sterilization </p>
                <ul class="ul-check list-unstyled white">
                  
               <h2><?php echo $_SESSION['details'];?></h2>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="how-it-work-item">
              <span class="number">3</span>
              <div class="how-it-work-body">
                <h2>STAGE THREE</h2>
                <p class="mb-5">Awaiting Delivery To Location </p>
                <ul class="ul-check list-unstyled white">
                <h2>Delivery Location <?php echo $_SESSION['investment'];?> </h2>
                                 <h2> To Be Delivered To  <?php echo $_SESSION['sendern'];?> </h2>

                 
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    
    

    
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-3">
                <h2 class="footer-heading mb-4"><a href="logout.php">GO HOME</a></h2>
                <ul class="list-unstyled">
                  
                </ul>
              </div>
              <div class="col-md-3">
                
                </ul>
              </div>
              <div class="col-md-3">
            
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4"><a href="mailto:support@redrocketdelivery.com?Subject=Hello%20Support%20&body=anyone available to assist me ?" target="_top">Send A mail</a></h2>
                
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4"><a href="tel://<?php echo $num;?>">Call Office </h2>
            
              </div>
           
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | RED ROCKET DELIVERY SERVICE
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="red/js/jquery-3.3.1.min.js"></script>
  <script src="red/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="red/js/jquery-ui.js"></script>
  <script src="red/js/popper.min.js"></script>
  <script src="red/js/bootstrap.min.js"></script>
  <script src="red/js/owl.carousel.min.js"></script>
  <script src="red/js/jquery.stellar.min.js"></script>
  <script src="red/js/jquery.countdown.min.js"></script>
  <script src="red/js/jquery.magnific-popup.min.js"></script>
  <script src="red/js/bootstrap-datepicker.min.js"></script>
  <script src="red/js/aos.js"></script>

  <script src="red/js/main.js"></script>
    
  </body>
</html>



<?php } ?>