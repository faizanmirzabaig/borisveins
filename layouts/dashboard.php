<?php

include_once 'const.php';

$base_url = BASE_URL;
// echo $base_url;
if($_POST){
$email = $_POST['email'];
$password = $_POST['password'];

include 'localhostcon.php';

if ($conn->connect_error) {
    die('connection failed');
} else {


    // $statement = $conn->prepare("select * from admins where email=? AND password=?");
    // $statement->bind_param('ss', $email,$password);
    // $statement->execute();
    // $statement_result = $statement->get_result();
    $query="select * from admins where username='".$email."' AND password='".$password."'";
    $result=mysqli_query($conn,$query);
    // $row=mysqli_fetch_array($result);
    
    
    if (mysqli_num_rows($result)>0) {
        
        header("Location:$base_url/layouts/dashboard.php");
        } 
     else {
        header("Location:$base_url/layouts/dashboard.php");

    }
    die('i m here');
}


    


    // $statement=$conn->prepare("successfully login(email,password) values(?,?)");
    //    $statement->bind_param($email,$password);
    //  $statement->execute();
    //  echo "login successfully";
    //  $statement->close();
    //  $conn->close(); 

}



?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard | Borisveins</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="icon" type="image/png" href="/assets/images/logo/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/feather.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="summernote/summernote-bs4.css">
    <link rel="stylesheet" href="css/datepicker.css">

    </head>

<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="/borisveins" class="bg-white pl-4 pt-2 pb-2 pr-4">
                            <img class="img-fluid mt-1" src="image/boris_logo.png" alt="Borisveins" width="100px" />
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                                                                <img src="image/boris_logo.png"
                                            alt="borisveins ADMIN"
                                            class="img img-responsive img-circle" width="200px !important">
                                                                                <span>borisveins ADMIN</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="/borisveins/profile">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>

                                        <li>
                                            <a href="../admin.php"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                title="Logout">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                            <form id="logout-form" action="../admin.php" method="POST"
                                                style="display: none;">
                                                <input type="hidden" name="_token" value="q9Tz4sFjuCzJWYsavwbyix4PlNLD4tEZ0uoukOtB">                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Manage Menu</div>
                            <ul class="pcoded-item pcoded-left-item navbar-item">
                                <li class="">
                                    <a href="dashboard.php">
                                        <span class="pcoded-micon"><i class="fa fa-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                               
                                <li class="">
                                    <!-- <a href="/borisveins/manage-admins">
                                        <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                                        <span class="pcoded-mtext">Manage Admin</span>
                                    </a>
                                </li> -->

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-briefcase"></i></span>
                                        <span class="pcoded-mtext">Careers</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="carreerspage.php">
                                                <span class="pcoded-mtext">Careers</span>
                                            </a>
                                            <a href="Views/ViewPage.php">
                                                <span class="pcoded-mtext">Views</span>
                                            </a>
                                        </li>
                                        <!-- <li class="">
                                            <a href="/borisveins/direct-resume">
                                                <span class="pcoded-mtext">Direct Resume</span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </li>

                                <!-- <li>
                                    <a href="/borisveins/manage-enquiries">
                                        <span class="pcoded-micon"><i class="fa fa-envelope"></i></span>
                                        <span class="pcoded-mtext">Enquiries</span>
                                    </a>
                                </li> -->

                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="content-wrapper">
                                                                                  <div class="page-body">
                                            <div class="card borderless-card">
    <div class="card-block inverse-breadcrumb">
        <div class="breadcrumb-header">
            <h5>Administrative Dashboard</h5>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="bg">
                    <div class="card-body"><span class="info-box-icon bg-transparent">
                        <i class="fa fa-users fa-fw fa-2x theme-color"></i></span>
                        <div class="info-box-content">
                            <h6 class="info-box-text text-dark"> No of Administrative</h6>
                            <h1 class="text-dark">1</h1>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="dashboard.php" class="text-white" title="View Details">
                            View Details <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script src="js/pcoded.min.js"></script>
    <script src="js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="js/script.min.js"></script>
    <script src="summernote-bs4.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

    <script>
        $(document).ready(function () {
            $('.form').submit(function () {
                $('.update_button').attr('disabled', 'disabled');
                $('.update_button').html('Please Wait...');
            });

            setTimeout(function () {
                $(".content-msg").fadeOut(1500);
            }, 10000);

            var hrf = $(location).attr('pathname');
            $('.navbar-item > li > a[href="' + hrf + '"]').parent().addClass("pcoded-trigger");

            $('.date').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                todayBtn: true,
                showClear: true,
                todayHighlight: 'TRUE'
            });
        });
        $('.summernote').summernote({
            height: 250,
            minHeight: null,
            maxHeight: null,
            focus: false,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });

    </script>
    </body>

</html>
