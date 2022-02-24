<?php



// $conn = mysqli_connect('localhost', 'sanjares_borisveins', 'OzW2MIEp8y?v', 'sanjares_borisveins');

// $conn = mysqli_connect('localhost', 'root', '', 'borisveins');
include 'layouts/localhostcon.php';


// Die if connection was not successful
if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
  // Submit these to a database
  // Sql query to be executed 
}
$sql = "SELECT * FROM careerss WHERE status=1 ";
$result = mysqli_query($conn, $sql) or die('query unsuccessfull');

?>


<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from flexcode.xyz/BorisVeins/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 08:56:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Borisveins | View</title>

  <!-- fav icon -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <link rel="icon" href="assets/Images/fav-icon/fav-icon.png" />

  <!-- bootstarp -->
  <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css" />

  <!-- animate.css file -->
  <link rel="stylesheet" href="assets/css/vendors/animate.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- Fancybox -->
  <link rel="stylesheet" href="assets/css/vendors/jquery.fancybox.min.css" />

  <!-- Swiper -->
  <link rel="stylesheet" href="assets/css/vendors/swiper.min.css" />

  <!-- vegas -->
  <link rel="stylesheet" href="assets/css/vendors/vegas.min.css" />

  <!-- fontAwesome -->
  <link rel="stylesheet" href="assets/css/vendors/all.min.css" />
  <link rel="stylesheet" href="assets/css/vendors/custom.css" />


  <!-- Font Family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@100;300;400;500;700;800;900&amp;family=Nunito:wght@100;300;400;500;600;700;800;900&amp;display=swap" />

  <!-- main-LTR -->
  <link rel="stylesheet" href="assets/css/main-LTR.css" />
  <!-- modal start here -->
  <link rel="stylesheet" href="assets/css/modal.css" />

</head>

<body class="dark-theme rounded-btns" style="background-color: #121212;">
  <!--Start Page Header-->
  <header class="page-header dark-header menu-on-end header-basic" id="page-header">
    <div class="header-search-box">
      <div class="close-search"></div>
      <form class="nav-search search-form" role="search" method="get" action="#">
        <div class="search-wrapper">
          <label class="search-lbl">Search for:</label>
          <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus" />
          <button class="search-btn" type="submit">
            <i class="fas fa-search icon"></i>
          </button>
        </div>
      </form>
    </div>
    <!--start navbar-->
    <!--start navbar-->
    <div class="bar-bottom">
      <div class="container customcontainer">
        <nav class="menu-navbar">
          <div class="header-logo" id="header">
            <!-- <a class="logo-link" href="#"><img class="logo-img light-logo" src="assets/Images/logo/logo-light.png" alt="logo"/><img class="logo-img  dark-logo" src="assets/Images/logo/logo-dark.png" alt="logo"/></a> -->
            <!-- logo start here -->
            <a href="#">
              <img src="assets/img/boris_logo.png" class="ml-3" style="margin-right: 10px;max-height: unset;     margin-top: -14px;
                  " alt />
            </a>
            <a href="index.html" style="
                  color: white;
                  margin-left: -2px;
                  font-family: 'Raleway', sans-serif;
                ">Boris
              <span class="headerspan" style="font-family: 'Raleway', sans-serif">veins</span></a>
            <!-- logo end here -->
          </div>
          <div class="links menu-wrapper">
            <ul class="list-js links-list">
              <li class="menu-item has-sub-menu">
                <a class="menu-link " href="index.html">home </a>
              </li>
              <li class="menu-item has-sub-menu">
                <a class="menu-link " href="about-us.html">about us</a>
              </li>
              <li class="menu-item has-sub-menu">
                <a class="menu-link" href="services.html">services</a>
              </li>

              <li class="menu-item has-sub-menu">
                <a class="menu-link active" href="careers.php">careers</a>
              </li>

              <li class="menu-item">
                <a class="menu-link " href="contact-us.html">contact us </a>
              </li>
            </ul>
          </div>
          <div class="controls-box">
            <div class="control info-toggler">
              <span> </span><span> </span><span></span>
            </div>
            <div class="control menu-toggler">
              <span></span><span></span><span></span>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!--End navbar-->
    <!--End navbar-->
  </header>
  <!--End Page Header-->
  <!-- social media icon start here -->
  <div style=" position: fixed;bottom: 24%;right: 3.3%;z-index: 20000;">
    <a href="tel:+918130882662">
      <img src="assets/img/phone.png" alt="call us" style="width:45px; height:45px">
    </a>
  </div>

  <div class="data" id="data">
    <a href="https://wa.me/+918130882662">
      <img src="assets/img/whatsapp.svg" alt width="45px" style="width: 45px;">
    </a>
  </div>

  <!-- social media end here -->

  <!-- Start inner Page hero-->
  <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero" id="page-hero">
    <!-- <div class="overlay-color"></div> -->
    <div class="vegas-slider-content" data-vegas-slide-1="assets/Images/hero/vegas-slider/2.jpg" data-vegas-slide-2="assets/Images/hero/vegas-slider/3.jpg" data-vegas-slide-3="assets/Images/hero/vegas-slider/1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12 hero-text-area">
            <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">
              Job Details
            </h1>
            <nav aria-label="breadcrumb ">
              <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                <li class="breadcrumb-item">
                  <a class="breadcrumb-link" href="#0"><i class="fas fa-home icon"></i>home</a>
                </li>
                <li class="breadcrumb-item active">Job Details</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End inner Page hero-->
  <!-- Start  about Section-->

  <!-- almost complete start here -->
  <section class="benefits" id="benefits" style="background-color: rgba(0,0,0,0.4) ;padding-top: 0px; z-index:unset;
       padding-bottom: 39px;
">
    <div class="overlay-bgabout parallax"></div>

    <div class="container applycontainer">
      <?php
      if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) { ?>
          <div class="row">
            <div class="col-md-12">
              <div class="single-job-content">
                <div class="area-title text-center">
                  <!-- <h2>You have almost finished</h2> -->

                  <div class="single-job-form pt-70">
                    <p style="text-align: left; color: #fff;
    font-size: 23px;
    line-height: 1.75;
    font-weight: 400;">Job Postion :- <?php echo $row['title'] ?></p>

                    <p style="text-align: left; color: #fff;
    font-size: 23px;
    line-height: 1.75;
    font-weight: 400;">Job Short Details :- <?php echo $row['posting'] ?>
                    </p>
                  </div>


                  <div class="single-job-form">
                    <p style="text-align: left; color: #fff;
    font-size: 23px;
    line-height: 1.75;
    font-weight: 400;">Year of Experience Required :- <?php echo $row['no_of_exp'] ?>
                    </p>

                    <p style="text-align: left; color: #fff;
    font-size: 23px;
    line-height: 1.75;
    font-weight: 400;">No of Opening :- <?php echo $row['no_of_exp'] ?>
                    </p>
                  </div>


                  <div class="single-job-form">
                    <p style="text-align: left; color: #fff;
    font-size: 23px;
    line-height: 1.75;
    font-weight: 400;">Year of Experience Required :- <?php echo $row['no_of_exp'] ?>
                    </p>

                    <p style="text-align: left; color: #fff;
    font-size: 23px;
    line-height: 1.75;
    font-weight: 400;">No of Opening :- <?php echo $row['no_of_exp'] ?>
                    </p>
                  </div>




                  <div class="title uppercase pb-26" style="text-align: left; padding-top: 30px;">
                    <span>Description </span>
                    <p style="text-align: left; color: #fff !important;
    font-size: 23px;
    line-height: 1.75;
    font-weight: 400;"><?php echo $row['description'] ?>
                    </p>


                  </div>


                  <div class="single-job-form">
                    <p>
                      <!-- <i class="apply_check">1 .</i> <span class="apply_check_pcolor"> -->
                      <?php echo $row['Job_Req_Desc'] ?>
                    </p>


                  </div>


              <?php
            }
          } ?>


              <div class="title uppercase  pb-26" style="text-align: left; padding-top: 30px;">
                <span id="myBtn">UPLOAD RESUME
                </span>

              </div>


                </div>
              </div>
            </div>
          </div>
    </div>
  </section>

  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <h2>Apply Jobs </h2>
        <span class="close">&times;</span>
      </div>
      <!-- modal-body  start here -->
      <div class="modal-body">
        <form action="uploadresume.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-6">
              <label>
                Your Name (required)
                <br>
                <span class="wpcf7-form-control-wrap your-name">
                  <input type="text" placeholder="Enter Your Name" name="name" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required>
                </span>
              </label>
            </div>
            <div class="col-sm-6">
              <label>
                Your Experience
                <br>
                <span class="wpcf7-form-control-wrap your-name">
                  <input type="text" name="experience" placeholder="Enter Your Experience" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required>
                </span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>
                Contact Number (required)
                <br>
                <span class="wpcf7-form-control-wrap your-name">
                  <input type="tel" name="contact" value size="40" placeholder="Enter Your Contact" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required>
                </span>
              </label>
            </div>
            <div class="col-sm-6">
              <label>
                Your Email
                <br>
                <span class="wpcf7-form-control-wrap your-name">
                  <input type="email" name="email" value size="40" placeholder="Enter Your Email" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required>

                </span>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <label>
                Your Message
                <br>
                <span class="wpcf7-form-control-wrap your-name">
                  <textarea name="message" cols="40" rows="5" placeholder="Enter Your Message" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your cover letter/message to send to the employer" required></textarea>
                </span>
              </label>
            </div>

          </div>

          <div class="row">
            <div class="col-sm-12">
              <label>
                Upload Resume
                <br>
                <span class="wpcf7-form-control-wrap your-name">
                  <input type="file" name="resume" style="outline: unset !important;border: unset !important; margin-top: 10px;" required>
                </span>
              </label>
            </div>

          </div>

          <div class="row" style="margin-top:20px ;">
            <div class="col-sm-12">
              <input type="submit" value="Apply Now" class="wpcf7-form-control wpcf7-submit formbtn">
            </div>

          </div>
        </form>

      </div>
      <!-- modal-body  end here -->


    </div>

  </div>
  <!-- modal end here -->



  <!-- almost complete end here -->


  <!-- Start  page-footer Section-->
  <footer class="page-footer dark-color-footer" id="page-footer" style="right: unset; bottom: unset">
    <div class="overlay-photo-image-bg"></div>
    <div class="container">
      <div class="row footer-cols">
        <div class="col-12 col-md-8 col-lg-4 footer-col wow fadeInUp" data-wow-delay="0.3s">
          <div class="header-logo" id="header">
            <!-- <a class="logo-link" href="#"><img class="logo-img light-logo" src="assets/Images/logo/logo-light.png" alt="logo"/><img class="logo-img  dark-logo" src="assets/Images/logo/logo-dark.png" alt="logo"/></a> -->
            <!-- logo start here -->
            <a href="#">
              <img src="assets/img/boris_logo.png" width="50" height="30%" class="ml-3" style="margin-right: 10px" alt />
            </a>
            <a href="index.html" style="
                    color: white;
                    margin-left: -6px;
                    font-family: 'Raleway', sans-serif;
                  ">boris
              <span class="headerspan" style="font-family: 'Raleway', sans-serif">veins</span></a>
            <!-- logo end here -->
          </div>
          <div class="footer-col-content-wrapper">
            <p class="footer-text-about-us" style="    font-size: 14px;
              ">
              Our deep expertise, powerful insights, and real-world solutions
              help the people and organizations we serve take steps today to
              secure a better tomorrow. We bring the right people together to
              challenge established thinking and drive transformation.
            </p>
            <div class="social-icons">
              <div class="sc-wrapper dir-row sc-size-32">
                <ul class="sc-list">
                  <li class="sc-item" title="linkedin">
                    <a class="sc-link" href="https://www.linkedin.com/company/borisveins/"><i class="fab fa-linkedin sc-icon"></i></a>
                  </li>
                  <li class="sc-item" title="Facebook">
                    <a class="sc-link" href="https://www.facebook.com/borisveins/"><i class="fab fa-facebook-f sc-icon"></i></a>
                  </li>

                  <li class="sc-item" title="instagram">
                    <a class="sc-link" href="https://www.instagram.com/borisveins/"><i class="fab fa-instagram sc-icon"></i></a>
                  </li>
                  <li class="sc-item" title="twitter">
                    <a class="sc-link" href="https://twitter.com/boris_veins"><i class="fab fa-twitter sc-icon"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 footer-col wow fadeInUp" data-wow-delay="0.5s">
          <h2 class="footer-col-title">Services</h2>
          <div class="footer-col-content-wrapper">
            <ul class="footer-menu">
              <li class="footer-menu-item">
                <i class="fas fa-arrow-right icon"></i><a class="footer-menu-link" href="#0">Executive Search</a>
              </li>
              <li class="footer-menu-item">
                <i class="fas fa-arrow-right icon"></i><a class="footer-menu-link" href="#0">Permanent Recruitment</a>
              </li>
              <li class="footer-menu-item">
                <i class="fas fa-arrow-right icon"></i><a class="footer-menu-link" href="#0">
                  Senior & Middle Level Hiring
                </a>
              </li>
              <li class="footer-menu-item">
                <i class="fas fa-arrow-right icon"></i><a class="footer-menu-link" href="#0">
                  Recruitment Process Outsourcing
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-12 col-md-6 col-lg-2 footer-col wow fadeInUp" data-wow-delay=".7s">
            <h2 class="footer-col-title">Resources</h2>
            <div class="footer-col-content-wrapper">
              <ul class="footer-menu">
                <li class="footer-menu-item">
                  <i class="fas fa-arrow-right icon"></i><a class="footer-menu-link" href="#0">support</a>
                </li>
                <li class="footer-menu-item">
                  <i class="fas fa-arrow-right icon"></i><a class="footer-menu-link" href="#0">dashboard</a>
                </li>
                <li class="footer-menu-item">
                  <i class="fas fa-arrow-right icon"></i><a class="footer-menu-link" href="#0">drivers</a>
                </li>
                <li class="footer-menu-item">
                  <i class="fas fa-arrow-right icon"></i><a class="footer-menu-link" href="#0">projects</a>
                </li>
              </ul>
            </div>
          </div> -->
        <div class="col-12 col-md-8 col-lg-4 footer-col wow fadeInUp" data-wow-delay=".9s">
          <h2 class="footer-col-title">contact information</h2>
          <div class="footer-col-content-wrapper">
            <div class="contact-info-card">
              <i class="fas fa-envelope icon"></i><a class="text-lowercase info" href="mailto:info@borisveins.com">info@borisveins.com</a>
            </div>
            <div class="contact-info-card">
              <i class="fas fa-globe-africa icon"></i><a class="text-lowercase info" href="www.borisveins.com">www.borisveins.com</a>
            </div>
            <div class="contact-info-card">
              <i class="fas fa-map-marker-alt icon"></i><span class=" info">N 45 Ground Floor
                Abul Fazal Enclave Part 1 Jamia

                <span style="display: block">
                  Nagar Okhla New Delhi 110025, India.</span></span>
            </div>
            <div class="contact-info-card">
              <i class="fas fa-mobile-alt icon"></i>
              <a class="info" href="tel:8130882662">8130882662 </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyrights">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 footertextalign">
            <p class="creadits">
              &copy;

              <strong>Borisveins Private Limited</strong> All Rights Reserved

              <!-- <a class="link" href="#0">sanjaresolutions</a> -->
            </p>
          </div>
          <div class="col-12 col-md-6 footertextalign">
            <div class="terms-links">
              <a href="#0">Terms of Use </a> | <a href="#0">Privacy Policy</a>
            </div>
          </div>


          <div class="col-12 col-md-6">
            <!--<p class="creadits">-->
            <!--  Designed by <a href="https://sanjaresolutions.com/" style="color: #3EC1D5;">Sanjar E Solutions</a>-->


            <!-- <a class="link" href="#0">sanjaresolutions</a> -->
            <!--</p>-->
          </div>
          <div class="col-12 col-md-6">
            <div class="terms-links">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End  page-footer Section-->
  <!-- Start loading-screen Component-->
  <div class="loading-screen" id="loading-screen">
    <span class="bar top-bar"></span><span class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span>
  </div>
  <!-- End loading-screen Component-->
  <!-- Start back-to-top Component-->
  <div class="back-to-top" id="back-to-top">
    <i class="fas fa-arrow-up icon"></i>
  </div>
  <!-- End back-to-top Component-->

  <!--     JQuery     -->
  <script src="assets/js/vendors/jquery-3.4.1.min.js"></script>

  <!--     bootstrap     -->
  <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>

  <!--     wow     -->
  <script src="assets/js/vendors/wow.min.js"></script>

  <!--     swiper     -->
  <script src="assets/js/vendors/swiper.min.js"></script>

  <!--     fancybox     -->
  <script src="assets/js/vendors/jquery.fancybox.min.js"></script>

  <!--     vegas     -->
  <script src="assets/js/vendors/vegas.min.js"></script>

  <!--     countTo     -->
  <script src="assets/js/vendors/jquery.countTo.js"></script>

  <!--     main     -->
  <script src="assets/js/main.js"></script>

  <!-- modal js -->
  <script src="assets/js/modal.js"></script>

</body>

<!-- Mirrored from flexcode.xyz/BorisVeins/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 08:56:12 GMT -->

</html>