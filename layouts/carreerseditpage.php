
<html lang="en">

<head>

    <title>Update Career | Borisveins</title>

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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/datepicker.css">

    </head>

<body>
<style>
    ul{
        list-style: disc !important;
  list-style-position: inside !important; 
  color: #000;
    }
</style>
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
                                            <form id="logout-form" method="POST"
                                                style="display: none;">
                                                <input type="hidden" name="_token" value="ac1efXHi3RdqdT9iZcYHltRCTkp9dmoZn4eyHk9E">                                            </form>
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
                               
                                <!-- <li class="">
                                    <a href="/borisveins/manage-admins">
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
                                            <!-- <a href="Views/ViewPage.php">
                                                <span class="pcoded-mtext">Views</span>
                                            </a> -->
                                        </li>
                                        <!-- <li class="">
                                            <a href="/borisveins/direct-resume">
                                                <span class="pcoded-mtext">Direct Resume</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
<!-- 
                                <li>
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
            <h5>Update Career</h5>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="/borisveins">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://asdsad.com/borisveins/manage-careers">All Career</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="card-body">
    <?php
// $conn = new mysqli('localhost', 'root', '', 'borisveins');
// $conn = mysqli_connect('localhost', 'sanjares_borisveins', 'OzW2MIEp8y?v', 'sanjares_borisveins');
include 'localhostcon.php';

if ($conn->connect_error) {
    die('connection failed');
} 

$cus_id=$_GET['id'];
$sql="SELECT * FROM careerss WHERE id={$cus_id} ";
$result=mysqli_query($conn,$sql) or die('query unsuccessfull');
if (mysqli_num_rows($result)>0){
    foreach ($result as $row){
?>
        <form method="post" class="form" enctype="multipart/form-data" action="updatecarreerspage.php">
            <input type="hidden" name="_token" value="ac1efXHi3RdqdT9iZcYHltRCTkp9dmoZn4eyHk9E">           
           
            <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Position Name</label>
                        <input type="text" name="title"  id="title" class="form-control" value="<?php echo $row['title']?>"
                            placeholder="Enter Position Name" required>
                            <input type="hidden" name="Id" value="<?php echo $row['Id']?>">
                    </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="posting">Job Short Details</label>
                        <input type="text"  name="posting" id="posting" class="form-control"
                            value="<?php echo $row['posting']?>" placeholder="Enter Post" required>
                    </div>
                </div> -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Job_Jocation">Job Location</label>
                        <input type="text"  name="Job_Location" id="Job_Jocation" class="form-control"
                            value="<?php echo $row['job_pos']?>" placeholder="Job Location" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_of_exp">Year of Experience </label>
                        <input type="text"  name="Experience_Req" id="no_of_exp" class="form-control"
                            value="<?php echo $row['no_of_exp']?>" placeholder="Year of Experience "  required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_of_vacancy">No of Position</label>
                        <input type="text"  name="no_of_vacancy" id="no_of_vacancy" class="form-control"
                            value="<?php echo $row['no_of_vacancy']?>" placeholder="Enter No of Position"  required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  name="description" id="description" name="description" class="form-control summernote" rows="5"
                            placeholder="Write Something here..." required>
                            <?php echo $row['description']?>
                             

</textarea>
                    </div>
                </div>


                <!-- <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="title">Job Description Title</label>
                                                                            <input type="hidden" name="Id" value="<?php echo $row['id'] ?>">
                                                                            <textarea id="description" name="Job_Desc_title" class="form-control " rows="5"  required style="text-align: left;"><?php echo $row['Job_Desc_title'] ?></textarea> 
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label for="title">Job Description </label>
                                                                            <input type="hidden" name="Id" value="<?php echo $row['id'] ?>">

                                                                            <textarea id="description" name="Job_Desc" class="form-control summernote" rows="5" placeholder="Write Something here..." required>
                            <?php echo $row['Job_Desc'] ?>
                             

</textarea>
                                                                        </div>
                                                                    </div> -->

                                                                    <!-- <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="title">Benefits Description Title</label>
                                                                            <input type="hidden" name="Id" value="<?php echo $row['id'] ?>">
                                                                            <textarea id="description" name="Bene_title" class="form-control " rows="5"  required style="text-align: left;"><?php echo $row['Bene_title'] ?></textarea> 
                                                                        </div>
                                                                    </div> -->

                                                                    <!-- <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label for="posting">Benefits Title</label>
                                                                            <textarea id="description" name="Bene_Desc" class="form-control summernote" rows="5" placeholder="Write Something here..." required>
                            <?php echo $row['Bene_Desc'] ?>
                             

</textarea>

                                                                        </div>
                                                                    </div> -->

                                                                    <!-- <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="title">Job Requirements Title</label>
                                                                            <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">
                                                                            <textarea id="description" name="Job_Req_title" class="form-control " rows="5"  required style="text-align: left;"><?php echo $row['Bene_title'] ?></textarea> 
                                                                        </div>
                                                                    </div> -->

                                                                    <!-- <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <label for="no_of_vacancy">Job Requirements Description</label>
                                                                            <textarea id="description" name="Job_Req_Desc" class="form-control summernote" rows="5" placeholder="Write Something here..." required>
                            <?php echo $row['Job_Req_Desc'] ?>
                             

</textarea>

                                                                        </div>
                                                                    </div> -->
                                                        



                <div class="col-md-12">
                    <div class="form-group">
                        <label for="status">Status </label>
                        
                        
                       <select name="status" id="status" class="form-control">
                            <option value="">--Select--</option>
                            <option value="1" <?php echo $row['status'] == 1 ? "selected" : "" ?>>Activated</option>
                            <option value="0" <?php echo $row['status'] == 0 ? "selected" : "" ?> >Deactivated
                            </option>
                        </select>
                    </div>
                </div>

             

                

                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary update_button"> <i class="fa fa-send"></i>
                        Update</button>
                </div>
            </div>
        </form>
        <?php 
        }
    }?>

    </div>
</div>

<!-- <div class="card borderless-card">
    <div class="card-block inverse-breadcrumb">
        <div class="breadcrumb-header">
            <h5>Applied Candidate List for <strong>DFT</strong></h5>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 table-responsive dt-responsive">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Applied On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td>32</td>
                            <td>Mrugesh Lalitkumar Shah</td>
                            <td>04-Aug-1989</td>
                            <td>male</td>
                            <td>9664742039</td>
                            <td>mrugeshhunt@gmail.com</td>
                            <td>30-Nov-2020 06:19 AM</td>
                            <td>
                                <div class="btn-group">
                                    <a href="https://asdsad.com/borisveins/manage-careers/view/32"
                                        class="btn btn-outline-primary" title="View Vacancy Detail">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                                            </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div> -->
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