
<html>
    <html lang="en">

  <head>
    <title> World Delivery Network</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        table {
          width:100%;
        }
        table, th, td {
          border: 1px solid #FFF;
          border-collapse: collapse;
        }
        th, td {
          padding: 15px;
          text-align: left;
        }
        #t01 tr:nth-child(even) {
          background-color: #eee;
        }
        #t01 tr:nth-child(odd) {
         background-color: #fff;
        }
        #t01 th {
          background-color: #FFF;
          color: white;
        }
        </style>
  </head>
<body>
    
    <div class="site-section" id="faq-section">
        <div class="container">
          <div class="row mb-5">
            <div class="block-heading-1 col-12 text-center">
                <h6></h6>
                <img src="../img/core-img/favicon.png" class="fluid">   <h2>Package Tracking </h2>             
                <table>
                    <tbody><tr>
                      <th>SHiPPING LOCATION</th>
                      <th>RECIEVER NAME/ADDRESS</th> 
                    </tr>
                    <tr>
                      <td><? echo $_SESSION['sendera'];?> </td>
                      <td><?php echo $_SESSION['name'] ;?> </td>
                    </tr>
            
                  
                  </tbody></table>
          <div class="site-section">
          <div class="container">

          <div class="block-heading-1 col-12 text-center">

          <h4>SHIPMENT INFORMATION</h4>
          <table>
            <tbody><tr>
              <th>ORIGIN </th>
              <th>PACKAGE</th> 
              <th>STATUS</th>
            </tr>
            <tr>
              <td><? echo $_SESSION['sendera'];?></td>
              <td>305</td>
              <td>pending</td>
            </tr>
            <tr>
              <td>DESTINATION</td>
              <td>CARRIER</td>
              <td>SHIPMENT TYPE</td>
            </tr>
            <tr>
              <td><? ECHO $_SESSION['investment'];?> </td>
              <td>DHL</td>
              <td>Air frieght</td>
            </tr>   <tr>
                <td>PAYMENT TYPE</td>
                <td> DELIVERY DATE/TIME </td>
                <td>PICKUP DATE/Time</td>
              </tr> <tr>
                <td>DIRECT DEPOSIT</td>
                <td><? ECHO $_SESSION['sendern']; ?></td>
                <td><? ECHO $_SESSION['lname']; ?></td>
              </tr>   <tr>
                <td>WEIGHT(KG)</td>
                <td>CARRIER REF NO.</td>
                <td>COMMENTS</td>
              </tr> <tr>
                <td> <? ECHO $_SESSION['senderc']; ?> </td>
                <td>2963R9767326R</td>
                <td><? echo $_SESSION['contactno'];?> </td>
              </tr>
          </tbody></table></div></div>
          <label for="file">Shipping procress:</label>
          <progress id="file" value="50" max="100">Shipping items </progress>
          <div>
                             <? ECHO $_SESSION{'details'} ;?> </div>
<p>You are yet to pay the sum of <? echo $_SESSION['curl'];?></p>
              <button onclick="window.print()">Print this page</button>
            <p><a  href="logout.php" class="btn btn-primary btn-large">Go Home</a>
</p>
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
