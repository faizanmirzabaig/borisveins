<!-- @extends('layouts.admin-master')
@section('title', 'Manage Careers')
@section('content') -->

<?php



// Create a connection
// $conn = mysqli_connect("localhost", "root", "", "borisveins");
// $conn = mysqli_connect('localhost', 'sanjares_borisveins', 'OzW2MIEp8y?v', 'sanjares_borisveins');
include '../localhostcon.php';

$result = $conn->query("SELECT * from views");



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewsPage Borisveins</title>
    <link rel="icon" type="image/png" href="/assets/images/logo/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/feather.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery.mCustomScrollbar.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/datepicker.css">
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
                            <img class="img-fluid mt-1" src="../image/boris_logo.png" alt="Borisveins" width="100px" />
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
                                        <img src="../image/boris_logo.png" alt="" class="img img-responsive img-circle" width="200px !important">

                                        <span>borisveins ADMIN</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="/borisveins/profile">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>

                                        <li>
                                            <a href="../admin.php" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                            <form id="logout-form" action="../admin.php" method="POST" style="display: none;">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container" style="margin-top: 0px !important;    min-height: calc(0vh - 0px); ">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Manage Menu</div>
                            <ul class="pcoded-item pcoded-left-item navbar-item">
                                <li class="">
                                    <a href="../dashboard.php">
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
                                            <a href="../carreerspage.php">
                                                <span class="pcoded-mtext">Careers</span>
                                            </a>
                                            <a href="../Views/ViewPage.php">
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

                </div>
            </div>
        </div>
    </div>


    <!-- <div class="page-body"> -->
    <div class="pcoded-main-container" style="margin-top: 0px !important;    min-height: calc(0vh - 0px); ">
        <div class="pcoded-wrapper">
            <div class="pcoded-content" style="margin-left: 240px;">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="content-wrapper">
                                <div class="page-body">

                                    <div class="modal" id="addModal">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h3 class="modal-title text-light">Add Career</h3>
                                                    <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form method="POST" role="form" class="form" action="viewmodaldata.php">
                                                    <div class="modal-body">
                                                        <div class="row">

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="title">Job Description</label>
                                                                    <input type="text" name="Job_Desc_title" id="title" class="form-control" value="" placeholder="Enter Title" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="description">Job Description</label>
                                                                    <textarea name="Job_Desc" id="description" class="form-control summernote" rows="5" placeholder="Write Something here..." required></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="posting">Benefits</label>
                                                                    <input type="text" name="Bene_title" id="posting" class="form-control" value="" placeholder="Enter Post" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="description">Benefits Description</label>
                                                                    <textarea name="Bene_Desc" id="description" class="form-control summernote" rows="5" placeholder="Write Something here..." required></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="no_of_vacancy">Job Requiremnts</label>
                                                                    <input type="text" name="Job_Req_title" id="no_of_vacancy" class="form-control" value="" placeholder="Enter No of Vacancy" min="0" max="100" maxlength="100" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="description">Job Requiremnts Description</label>
                                                                    <textarea name="Job_Req_Desc" id="description" class="form-control summernote" rows="5" placeholder="Write Something here..." required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary update_button"> <i class="fa fa-plus"></i>
                                                            Submit</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="card borderless-card">
                                        <div class="card-block inverse-breadcrumb">
                                            <div class="breadcrumb-header">
                                                <h5>Manage Careers</h5>
                                            </div>
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="../connect.php">Dashboard</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#addModal" data-toggle="modal" data-target="#addModal">Add Career</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-block">
                                            <div class="table-responsive dt-responsive" id="doublescroll">
                                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">#</th>
                                                            <th style="text-align: center;">Job Description Title</th>
                                                            <th style="text-align: center;">Job Description</th>
                                                            <th style="text-align: center;">Benefits Title</th>
                                                            <th style="text-align: center;">Benefits Description</th>
                                                            <th style="text-align: center;">Job Requirements title </th>
                                                            <th style="text-align: center;">Job Requirements Description</th>

                                                            <th style="text-align: center;">Status</th>
                                                            <th style="text-align: center;">Added On</th>
                                                            <th style="text-align: center;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($result as $row) { ?>
                                                            <tr>
                                                                <td><?php echo $row['id']; ?></td>
                                                                <td> <?php echo $row['Job_Desc_title']; ?></td>
                                                                <td> <?php echo $row['Job_Desc']; ?> </td>
                                                                <td><?php echo $row['Bene_title']; ?></td>

                                                                                              
                                                                <td> <?php echo $row['Bene_Desc']; ?></td>
                                                                <td> <?php echo $row['Job_Req_title']; ?> </td>
                                                                <td><?php echo $row['Job_Req_Desc']; ?></td>

                                                                <td><?php echo $row['status']==0 ? 'Deactivated':'Activated'?></td>
                                                                      
                                                                <td><?php echo $row['Created_at']; ?></td> 
                                                                <td>
                                                                    <div class="btn-group" style="display: flex;">

                                                                        <a href="editViewPage.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary" title="Edit Career">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <!-- <a href="deletecarreerspage.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger delete-object">
                                                                        <i class="fa fa-trash"></i>
                                                                        </a> -->
                                                                        <button type="button" class="btn btn-outline-danger delete-object" title="Delete Career" data-obj-id=<?php echo $row['id']; ?>>
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php   }  ?>


                                                        <?php if ($result->num_rows == 0) {  ?>
                                                            <tr class="text-center" >
                                                                <td class="text-danger" colspan="12"  >
                                                                    <h4>No Record Found..</h4>
                                                                </td>
                                                            </tr>
                                                            
                                                        <?php } ?>
                                                    </tbody>
                                                    <tfoot style="text-align: center;">
                                                        <tr>
                                                        <th>#</th>
                                                            <th>Job Description Title</th>
                                                            <th>Job Description</th>
                                                            <th>Benefits Title</th>
                                                            <th>Benefits Description</th>
                                                            <th>Job Requirements title </th>
                                                            <th>Job Requirements Description</th>

                                                            <th>Status</th>
                                                            <th>Added On</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
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
    <form id="formDelete" method="POST" action="/borisveins/manage-careers/delete/">
    </form>



    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="../js/modernizr.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../js/SmoothScroll.js"></script>
    <script src="../js/pcoded.min.js"></script>
    <script src="../js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="../js/script.min.js"></script>
    <script src="../summernote-bs4.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>


    <script>
         $('.summernote').summernote({
            height: 250,
            minHeight: null,
            maxHeight: null,
            focus: false,
            inheritPlaceholder: true,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
        
        $(document).ready(function() {
            $(document).scroll(function() {
                if ($(document).scrollTop() > 20) {
                    $("#btp").fadeIn();
                } else {
                    $("#btp").fadeOut(0);
                }
            });
        });


        jQuery(document).ready(function() {
            jQuery("#frcontact").submit(function(e) {
                e.preventDefault();
                $("#sendEnquiryModal").attr("disabled", "disabled");
                $("#sendEnquiryModal").html("Sending ...");
                var form = jQuery('#frcontact').serialize();
                var settings = {
                    "url": "/contact-us",
                    "method": "post",
                    "data": form
                };
                jQuery.ajax(settings).done(function(response, statusText, xhr) {
                    jQuery('#name').val('');
                    jQuery('#email').val('');
                    jQuery('#mobile').val('');
                    jQuery('#msg').val('');
                    // jQuery('#frcontact').fadeOut('fast');
                    jQuery("#ajax_contact_msg").html(

                        '<div class="alert alert-success m-t-20"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button><h3 class="text-success text-center">' +
                        xhr.responseJSON[1] +
                        '</h3></div>'
                    );

                }).fail(function(xhr, statusText) {
                    var errors = xhr.responseJSON[1];
                    if (xhr.status == 403) {
                        jQuery("#ajax_contact_msg").html(
                            '<div class="alert alert-danger m-t-20"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>Only ajax requests are allowed !</div>'
                        );
                    } else if (xhr.status == 400) {
                        var strError = "";

                        strError += "<ul>";
                        errors.forEach(function(error) {
                            strError += "<li>" + error + "</li>";
                        });
                        strError += "</ul>";
                        jQuery("#ajax_contact_msg").html(
                            '<div class="alert alert-danger m-t-10"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>' +
                            strError + '</div>');
                    } else {
                        console.log(errors);
                        jQuery("#ajax_contact_msg").html(
                            '<div class="alert alert-danger m-t-10"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>Something went wrong !</div>'
                        );
                    }
                }).always(function() {
                    $("#sendEnquiryModal").removeAttr("disabled");
                    $("#sendEnquiryModal").html("SUBMIT");
                });
            });
        });


        $(document).ready(function() {
            $(".delete-object").click(function() {
                if (window.confirm("Are you sure, You want to Delete ? ")) {
                    var careerId = $(this).attr("data-obj-id");
                    window.location = `deleteviewpage.php?id=${careerId}`;
                    // var action = $("#formDelete").attr("action") + $(this).attr("data-obj-id");
                    // $("#formDelete").attr("action", action);
                    // $("#formDelete").submit();
                    // $(this).html('wait...');
                }
            });
        });

        function DoubleScroll(element) {
    var scrollbar = document.createElement('div');
    scrollbar.appendChild(document.createElement('div'));
    scrollbar.style.overflow = 'auto';
    scrollbar.style.overflowY = 'hidden';
    scrollbar.firstChild.style.width = element.scrollWidth+'px';
    scrollbar.firstChild.style.paddingTop = '1px';
    scrollbar.firstChild.appendChild(document.createTextNode('\xA0'));
    scrollbar.onscroll = function() {
        element.scrollLeft = scrollbar.scrollLeft;
    };
    element.onscroll = function() {
        scrollbar.scrollLeft = element.scrollLeft;
    };
    element.parentNode.insertBefore(scrollbar, element);
}

DoubleScroll(document.getElementById('doublescroll'));
    </script>


</body>

</html>