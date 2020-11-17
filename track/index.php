<?php 
session_start();
require('dbconnection.php');
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="tracking.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$_SESSION['lname']=$num['lname'];
$_SESSION['contactno']=$num['contactno'];
$_SESSION['investment']=$num['investment'];
$_SESSION['details']=$num['details'];
$_SESSION['senderc']=$num['senderc'];
$_SESSION['sendera']=$num['sendera'];
$_SESSION['sendern']=$num['sendern'];
$_SESSION['curl']=$num['curl'];
$_SESSION['posting_date']=$num['posting_date'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
   header("Refresh: 0; url=index.php");
echo "<script>alert('INVALID TRACKNG NUMBER');</script>";
exit();
}
}



?>


<?php $num="+18123026473";?>
<!doctype html>
<html lang="en">

  <head>
    <title> Red Rocket Delivery Service</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="icon" href="../img/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">support@redrocketdelivery.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block"><?php echo $num;?></span></a>


          

            </div>

          </div>

        </div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="../" class="text-black"><span class="text-primary">RDDS</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="../" class="nav-link">Home</a></li>
                  <li><a href="#services-section" class="nav-link">Services</a></li>


                  <li>
                    <a href="#about-section" class="nav-link">About Us</a>

                  </li>

                  <li><a href="#why-us-section" class="nav-link">Why Us</a></li>

                  <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>

      <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/depot_hero_1.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
              <div class="col-lg-6">
                <h1>Speed &amp;Reliablity</h1>
                <p class="mb-5">Use Secure Code to Track Package in real time Easily with Rocket Delivery Service private networks </p>
							<form name="login" action="" method="post">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Your tracking number" name="uemail" >
                    <input type="submit" class="btn btn-primary text-white px-4" value="Track Now" name="login">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- END .ftco-cover-1 -->
        <div class="site-section ftco-service-image-1 pb-5">
          <div class="container">
            <div class="owl-carousel owl-all">
              <div class="service text-center">
                <a href="#"><img src="images/depot_img_1.jpg" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                  <h3>Cargo Insurance</h3>
                  <p>We Provide Insurance on all shipments as it is recommened by the company policy to always protect goods</p>
                </div>
              </div>
              <div class="service text-center">
                <a href="#"><img src="images/depot_img_2.jpg" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                  <h3>Great solution for business</h3>
                  <p>Speed is essential for business , here at RRDS (Red Rocket Delivery Service) we make sure your packages arrives on time </p>
                </div>
              </div>
              <div class="service text-center">
                <a href="#"><img src="images/depot_img_3.jpg" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                  <h3><a href="#">Sea Freight</a></h3>
                  <p> At RDDS , we provide a team that will help you with all your inquires, our staffs would gladly have a phone conversation with you or send us a mail </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section bg-light" id="services-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1">
                <h2>Services</h2>
              </div>
            </div>
          </div>
          <div class="owl-carousel owl-all">
            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span class="flaticon-ferry"></span>
              </div>
              <h3 class="mb-3">Sea Freight</h3>
              <p>We provide world wide cargo shipping at a very affordable rate and , we provide delivery to all countries except except North Korea </p>
            </div>

            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span class="flaticon-airplane"></span>
              </div>
              <h3 class="mb-3">Air Freight</h3>
              <p>it is very vital to get your pacakage to locations that are outside of your current position , we provide all the help and support needed to make efficent results. </p>
            </div>

            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span class="flaticon-box"></span>
              </div>
              <h3 class="mb-3">Package Forwarding</h3>
              <p>We provide door to door delivery and assitance  </p>
            </div>

            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span class="flaticon-lorry"></span>
              </div>
              <h3 class="mb-3">Truck </h3>
              <p>What ever size , we have trucks to suit all size requirements for both business and personal use . </p>
            </div>

            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span class="flaticon-warehouse"></span>
              </div>
              <h3 class="mb-3">Warehouse</h3>
              <p>Packages are stored in safe ware houses and are accounted for before leaving for its destination. </p>
            </div>

            <div class="block__35630 text-center">
              <div class="icon mb-0">
                <span class="flaticon-add"></span>
              </div>
              <h3 class="mb-3">Delivery</h3>
              <p>We provide a fast and accurate delivery system that makes your goods reach you right on time without any delay and is on schedule </p>
            </div>

          </div>
        </div>
      </div>




      <div class="site-section" id="about-section">

        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>About Us</h2>
              </div>
            </div>
          </div>
        </div>

      </div>



    
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="19">0</span>+</span>
                    <span class="caption">Years in Service</span>
                  </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="2332">0</span>+</span>
                    <span class="caption">Employees</span>
                  </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="231">0</span>+</span>
                    <span class="caption">Covered Countries</span>
                  </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="block-counter-1">
                    <span class="number"><span data-number="827">0</span>+</span>
                    <span class="caption">Couriers</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     

    

      <div class="site-section" id="faq-section">
        <div class="container">
          <div class="row mb-5">
            <div class="block-heading-1 col-12 text-center">
              <h2>Frequently Asked Questions</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">how long does shipping from america to asia take?</h3>
                <p>Packages take 12 hours to reach asia and pick up location and confirmation is verified  </p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">Are my business goods safe ?</h3>
                <p>yes they are , we provide insurance on all packages to completly stop risk of loss of property. </p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">how much do i pay?</h3>
                <p>it depends on your package details , contact us and we would tell you the price after doing a estimation, our support email would email you all the necessary information you need . </p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"> how much is tax fee?</h3>
                <p>Tax fee varies from counties to countries  </p>
              </div>
            </div>
            <div class="col-lg-6">

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">can i ask for a refund?</h3>
                <p>yes you can ask for a refund , provided its within ten minutes of payments  </p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">Can i call anytime?</h3>
                <p>please call only during office hours , our email  support is avaiable 24/7
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">What do i need to be verified as a business ?</h3>
                <p>No documents are required, all you have to do is contact us over mail </p>
              </div>

              <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4">what can i do if i dont get the package ?</h3>
                <p>send a mail with your tracking number and we would look into it. </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block__73694 site-section border-top" id="why-us-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/depot_delivery_1.jpg');" data-aos="fade-left" data-aos-delay="">
            </div>



            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-4 text-black">Why RDDS</h2>
              <p>We do our best to make your time with us worth it, we promise to always put in a lot of effort to satisfy you . </p>

              <ul class="ul-check primary list-unstyled mt-5">
                <li>Cargo Insurance</li>
                <li>Secure Code Tracking </li>
                <li>Secure Warehouseing</li>
                <li>Cost savings</li>
                <li>fast and Reliable</li>
              </ul>

            </div>

          </div>
        </div>
      </div>


      <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
        <div class="container">

          <div class="text-center mb-5">
            <div class="block-heading-1">
              <h2>Happy Clients</h2>
            </div>
          </div>

          <div class="owl-carousel nonloop-block-13">
            <div>
              <div class="block-testimony-1 text-center">

                <blockquote class="mb-4">
                  <p>&ldquo;Amazingly fast service , i used red rocket to recieve items i bought online , the clothes were so nice and the shipping cost of the website was outragious , thankfully my sister told me about red rocket andthe cost was very much lower than i expected and the speed blew me off , made me feel like i was in control  .&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Ricky Fisher</h3>
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                  <p>&ldquo;Great for business.&rdquo;</p>
                </blockquote>
                <figure>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">


                <blockquote class="mb-4">
                  <p>&ldquo;I am so glad I found out about RDDS , I can easily send Valuables to my loved ones .&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Mellisa Griffin</h3>


              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                  <p>&ldquo;The support email was so helpful and  the people who spoke to me assited me even with a translator .&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

              </div>
            </div>


          </div>

        </div>
      </div>

     



    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>At Red Rocket Delivery here we make it a pirority to make sure every package is delivered to the appropiate location at the right time.</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="../about.php">About Us</a></li>
                  <li><a href="../service.html">Service</a></li>
                  <li><a href="../local.html">local </a></li>
                  <li><a href="../contact.html">Contact Us</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
            </div>


            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | RED ROCKET DELIVERY SERVICE
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>


  </body>

</html>

