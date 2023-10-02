<?php  
session_start();
?>
<?php
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<style>
    
</style>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
<!-- show hide -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <!-- =======================================================
  * Template Name: Logis - v1.2.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>ZEPTAR.</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active':NULL ?>">Home</a></li>
          <li><a href="form.php" class="<?php echo $current_page == 'form.php' ? 'active':NULL ?>">Booking</a></li>
          <!-- <li><a href="cities.php">cities</a></li> -->
          <li><a href="cities.php" class="<?php echo $current_page == 'cities.php' ? 'active':NULL ?>">Zeptar Cities</a></li>
       <li><a href="shipmentrate.php" class="<?php echo $current_page == 'shipmentrate.php' ? 'active':NULL ?>">Shipment Rates</a></li> 
          <li><a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active':NULL ?>">Contact</a></li>
          <!-- <li><a class="get-a-quote" href="get-a-quote.html">Get a Quote</a></li> -->
          <?php  if(!isset($_SESSION['USER_IMAGE'])) { ?>
                                <li><a class="<?php echo $current_page == 'login_form.php' ? 'active':NULL ?>" href="login_form.php" >Sign in</a></li>
                                <li ><a  class="btn btn-primary btn-round get-a-quote" class="class="<?php echo $current_page == 'sign_form.php' ? 'active':NULL ?> href="sign_form.php">Sign Up</a>
                                <?php  } else { ?>

 </li>
          
            
  <div class="dropdown mx-5">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    <?php echo  $_SESSION['USER_NAME'] ?>
    </button>
    <ul class="dropdown-menu ">
      <li><a class="dropdown-item" href="profile.php">Update Profile</a></li>
      <li><a class="dropdown-item" href="logout.php">Logout</a></li>

    </ul>
  </div>
            <?php } ?>
       
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
