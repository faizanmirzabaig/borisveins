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
  <!-- Mirrored from flexcode.xyz/BorisVeins/careers-home-2-col_dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 08:56:17 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Borisveins | Careers</title>

    <!-- fav icon -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="icon" href="assets/Images/fav-icon/fav-icon.png" />

    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- bootstarp -->
    <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css" />

    <!-- animate.css file -->
    <link rel="stylesheet" href="assets/css/vendors/animate.css" />

    <!-- fontAwesome -->
    <link rel="stylesheet" href="assets/css/vendors/all.min.css" />

    <!-- vegas -->
    <link rel="stylesheet" href="assets/css/vendors/vegas.min.css" />
    <link rel="stylesheet" href="assets/css/admin.css" />

    <!-- Font Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@100;300;400;500;700;800;900&amp;family=Nunito:wght@100;300;400;500;600;700;800;900&amp;display=swap" />

    <!-- main-LTR -->
    <link rel="stylesheet" href="assets/css/main-LTR.css" />
  </head>

  <body class="dark-theme rounded-btns" style="background-color: #121212">
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
                <img src="assets/img/boris_logo.png" class="ml-3" style="margin-right: 10px;max-height: unset; margin-top: -6px;" alt />
              </a>
              <a href="index.html" style="
                  color: white;
                  margin-left: -6px;
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
                  <a class="menu-link" href="contact-us.html">contact us </a>
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
    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero" id="page-hero" style="position: relative; z-index: unset;">
      <!-- <div class="overlay-color"></div> -->
      <div class="overlay-blur "></div>

      <div class="vegas-slider-content " data-vegas-slide-1="assets/img/careers.png" data-vegas-slide-2="" data-vegas-slide-3="">
        <div class="container">
          <div class="row">
            <div class="col-12 hero-text-area">
              <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">
                careers
              </h1>
              <nav aria-label="breadcrumb ">
                <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                  <li class="breadcrumb-item">
                    <a class="breadcrumb-link" href="#0"><i class="fas fa-home icon"></i>home</a>
                  </li>
                  <li class="breadcrumb-item active">careers</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->

    <!-- Recents jobs start here -->
    <!-- <div class="job-post-area ptb-120"> -->
    <section class="benefits" id="benefits" style="background-color: #fff; ">
      <div class="container" style="padding: 2rem 0rem"></div>
      <div class="section-heading center-heading">
        <h2 class="section-title wow fadeInUp section-title-custom" data-wow-delay=".2s">
          Recent <span class="hollow-text">Jobs</span><span class="title-design-element"></span>
        </h2>
        <div class="line line-on-center wow fadeIn" data-wow-delay=".7s"></div>
      </div>

      <div class="container-fluid careers_extra_padding">

        <?php
        if (mysqli_num_rows($result) > 0) {
          foreach ($result as $row) { ?>
            <div class="row dyanmic_assets dynamicheightrow">
        
            <div class="col-md-3 dynamicheight1" >
                <div style="display: flex; align-items: center">
                  <div>
                    <img style="width: 72px; height: 72px" src="layouts/image/careers main backend/graphic.png" alt="" />
                  </div>
                  <div class="dynamicdiv" style="margin-left: 20px;">
                  <div class="title uppercase " style="text-align: left; padding-bottom: 17px;">
                  <span>Job Postion </span>
                  </div>
                    <h4 style="font-size: 22px; color: #000">
                      <?php echo $row['title'] ?>


                    </h4>
                    <h5 style="color: #000; color: 18px"> <?php echo $row['posting'] ?></h5>
                  </div>
                </div>
              </div>

            
             
              <div class="col-md-3 dynamicheight2">
              <span class="title uppercase " style="text-align: left; padding-bottom: 17px;">
                  <span>Job Description </span>
              </span>
                <span class="mtb-30 block arrangement_desc" style="    color: #000; 

              ">
                  <?php echo $row['description'] ?>
                </span>
              </div>

              <div class="col-md-3 dynamicheight3">
                
                
                <div style="display: flex; align-items: center;flex-direction: row; justify-content: space-between; text-align: center;">
              
                <div>
                <div class="title uppercase " style="text-align: center; padding-bottom: 17px;">
                  <span>Experience</span>
                  </div>
                  <h5 style="color: #000;
      font-size: 18px;
      line-height: 24px;"><?php echo $row['no_of_exp'] ?></h5>
                </div>
                <div>
                <div class="title uppercase " style="text-align: left; padding-bottom: 17px;">
                  <span>Job Location </span>
                  </div>
                  <h5 style="color: #000;
      font-size: 18px;
      line-height: 24px;"><?php echo $row['job_pos'] ?></h5>
                </div>
                </div>
              </div>

              <div class="col-md-3 admincol dynamicheight4" id="dynamicheight">
              <div class="title uppercase " style="text-align: center; padding-bottom: 17px;">
                  <span>no of vacancy</span>
                  </div> 
                <div class="hiddendiv">
                  <div style="    margin-bottom: 6px;
                ">
                   
                    <span class="block " style="color: #000;
      font-size: 18px;
      line-height: 24px;"><?php echo $row['no_of_vacancy'] ?></span>
                  </div>
                  <div>
                    <a href="view.php" class="button button-red"> View </a>
                  </div>
                </div>

              </div>

            </div>
        <?php
          }
        } ?>
      </div>
    </section>
    <!-- </div> -->

    <!-- recents jobs end here -->

    <!-- careers jobs -->
    <!-- Start  Services Section-->
    <section class="services-bg-img flip-cards has-shifted-down-stats mega-section text-center" id="services">
      <div class="overlay-photo-image-bg"></div>


      <div class="stats stats-counter shifted-down">
        <div class="container">
          <div class="stats-inner">
            <div class="overlay-photo-image-bg"></div>
            <div class="overlay-color"></div>
            <div class="row no-gutters">
              <!--Info One-->
              <div class="col-6 col-lg-3 stat-box">
                <div class="stat-box-inner">
                  <i class="fas fa-cogs stat-icon"></i>
                  <p class="stat-num">
                    <span class="counter" data-from="10" data-to="2000" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span>
                  </p>
                  <h5 class="stat-desc">Jobs</h5>
                </div>
              </div>
              <!--Info Two-->
              <div class="col-6 col-lg-3 stat-box">
                <div class="stat-box-inner">
                  <i class="fas fa-business-time stat-icon"></i>
                  <p class="stat-num">
                    <span class="counter" data-from="0" data-to="999" data-speed="3000" data-refresh-interval="50"></span><span class="sign"></span>
                  </p>
                  <h5 class="stat-desc">Members</h5>
                </div>
              </div>
              <!--Info Three-->
              <div class="col-6 col-lg-3 stat-box">
                <div class="stat-box-inner">
                  <i class="fas fa-users stat-icon"></i>
                  <p class="stat-num">
                    <span class="counter" data-from="0" data-to="700" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span>
                  </p>
                  <h5 class="stat-desc">Resume</h5>
                </div>
              </div>
              <!--Info Four-->
              <div class="col-6 col-lg-3 stat-box">
                <div class="stat-box-inner">
                  <i class="fas fa-layer-group stat-icon"></i>
                  <p class="stat-num">
                    <span class="counter" data-from="0" data-to="2000" data-speed="3000" data-refresh-interval="50"></span><span class="sign"> </span>
                  </p>
                  <h5 class="stat-desc">Company</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  Services Section-->

    <!-- careers jobs -->

    <!-- thousand of companies -->
    <section class="benefits" id="benefits" style="background-color: #fff ;padding-top: 120px;
      padding-bottom: 120px;">
      <div class="container"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/placements.png" alt="">
          </div>
          <div class="col-md-6">
            <div class="advertise-content pl-15">
              <h3 class="uppercase pb-10 mb-20">
                Join Thousands of
                <br>
                Companies That Rely on borisveins
              </h3>
              <!-- <p class="pr-50">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. available,
                but the majority have suffered alteration in some form,
              </p> -->
              <a href="#" class="button large-button mt-9">
                Get Started
              </a>
            </div>


          </div>
        </div>
      </div>
    </section>


    <!-- thousanf of companies end here -->

    <!-- blog -->
    <!-- Start _3-col-left-sidebar-->
    <!-- <section class="blog blog-home mega-section">
        <div class="container ">
          <div class="row ">
            <div class="col-12 "> 
              <div class="posts-grid">
                <div class="row">
                  <div class="col-12 col-lg-4 ">
                    <div class="post-box">     <a class="post-link" href="post-single_dark.html"> 
                        <div class="post-img-wrapper">
                          <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="1.jpg" alt=""/>
                        </div></a>
                      <div class="post-summary">
                        <h4 class="post-date"><span class="day">05 </span>oct, 2021      </h4>
                        <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>cloud</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>Allan Moore</a></div>
                        <div class="post-text"><a class="post-link" href="post-single_dark.html"> 
                            <h2 class="post-title"> as a rule love what you do to do what you love</h2></a>
                          <p class="post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae</p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 ">         
                    <div class="post-box">     <a class="post-link" href="post-single_dark.html"> 
                        <div class="post-img-wrapper">
                          <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="2.jpg" alt=""/>
                        </div></a>
                      <div class="post-summary">
                        <h4 class="post-date"><span class="day">15 </span>sep, 2021      </h4>
                        <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>design</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>mhmd amin</a></div>
                        <div class="post-text"><a class="post-link" href="post-single_dark.html"> 
                            <h2 class="post-title"> stories of our great fathers lights our pathes</h2></a>
                          <p class="post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae</p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 ">         
                    <div class="post-box">     <a class="post-link" href="post-single_dark.html"> 
                        <div class="post-img-wrapper">
                          <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="3.jpg" alt=""/>
                        </div></a>
                      <div class="post-summary">
                        <h4 class="post-date"><span class="day">27 </span>aug, 2021      </h4>
                        <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>life style</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>yusuf amin</a></div>
                        <div class="post-text"><a class="post-link" href="post-single_dark.html"> 
                            <h2 class="post-title"> our goal is making your fancy thoughts exist</h2></a>
                          <p class="post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae</p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 ">         
                    <div class="post-box">     <a class="post-link" href="post-single_dark.html"> 
                        <div class="post-img-wrapper">
                          <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="4.jpg" alt=""/>
                        </div></a>
                      <div class="post-summary">
                        <h4 class="post-date"><span class="day">15 </span>aug, 2021      </h4>
                        <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>design</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>mhmd amin</a></div>
                        <div class="post-text"><a class="post-link" href="post-single_dark.html"> 
                            <h2 class="post-title"> we are able to building your dream houses</h2></a>
                          <p class="post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae</p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 ">         
                    <div class="post-box">     <a class="post-link" href="post-single_dark.html"> 
                        <div class="post-img-wrapper">
                          <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="5.jpg" alt=""/>
                        </div></a>
                      <div class="post-summary">
                        <h4 class="post-date"><span class="day">02 </span>aug, 2021      </h4>
                        <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>features</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>fairouz amin</a></div>
                        <div class="post-text"><a class="post-link" href="post-single_dark.html"> 
                            <h2 class="post-title"> asking big questions on your mind?</h2></a>
                          <p class="post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae</p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 ">         
                    <div class="post-box">     <a class="post-link" href="post-single_dark.html"> 
                        <div class="post-img-wrapper">
                          <div class="overlay-color"></div><i class="fas fa-arrow-right icon ">             </i><img class="post-img" src="6.jpg" alt=""/>
                        </div></a>
                      <div class="post-summary">
                        <h4 class="post-date"><span class="day">21 </span>jul, 2021      </h4>
                        <div class="post-info"><a class="info post-cat" href="#"> <i class=" fas fa-list-alt icon"></i>cloud</a><a class="info post-author" href="#"> <i class=" fas fa-user icon"></i>yusuf amin</a></div>
                        <div class="post-text"><a class="post-link" href="post-single_dark.html"> 
                            <h2 class="post-title"> helping others can boost you happiness</h2></a>
                          <p class="post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae</p><a class="read-more" href="post-single_dark.html">read more<i class="fas fa-arrow-right icon "></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    <!-- End _3-col-left-sidebar-->
    <!-- Start  page-footer Section-->

    <!-- blog end here -->
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
                <img src="assets/img/bv_bwhite.png" width="50" height="30%" class="ml-3" style="margin-right: 10px" alt />
              </a>
              <a href="index.html" style="
                    color: white;
                    margin-left: -6px;
                    font-family: 'Raleway', sans-serif;
                  ">Boris
                <span class="headerspan" style="font-family: 'Raleway', sans-serif">veins</span></a>
              <!-- logo end here -->
            </div>
            <div class="footer-col-content-wrapper">
              <p class="footer-text-about-us" style="font-size: 14px">
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
                        <a
                          class="sc-link"
                          href="https://www.facebook.com/borisveins/"
                          ><i class="fab fa-facebook-f sc-icon"></i
                        ></a>
                      </li>
                    
                      <li class="sc-item" title="instagram">
                        <a
                          class="sc-link"
                          href="https://www.instagram.com/borisveins/"
                          ><i class="fab fa-instagram sc-icon"></i
                        ></a>
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

            <div class="col-12 col-md-6 footertextalign">
              <!--<p class="creadits">-->
              <!--  Designed by-->
              <!--  <a href="https://sanjaresolutions.com/" style="color: #3ec1d5">Sanjar E Solutions</a>-->

              <!-- <a class="link" href="#0">sanjaresolutions</a> -->
              <!--</p>-->
            </div>
            <div class="col-12 col-md-6">
              <div class="terms-links"></div>
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
    <script>
      let dynamicheight=document.getElementById('dynamicheight');
      if (dynamicheight.style.maxHeight='303px') {
        // dynamicheight.style.overflowY='scroll';
        
      }
    </script>

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
  </body>

  <!-- Mirrored from flexcode.xyz/BorisVeins/careers-home-2-col_dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 08:56:18 GMT -->

  </html>