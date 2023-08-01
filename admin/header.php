
<?php
session_start();
$user_cate = $_SESSION['user_cate'];
$yourname=   $_SESSION['name'];
$user_name = $_SESSION['user_name'];

  include('db.php');


    $get_staff = "SELECT * FROM staff WHERE username = '$user_name' ";
    
    $run_staff = mysqli_query($conn,$get_staff);
    $data = mysqli_fetch_array($run_staff);

    $_SESSION['staffname'] = $data["staffname"];
    

   // $check = mysqli_num_rows($run_user);
    //if($check == !''){
     // $_SESSION['user_cate'] = $datarow["user_cate"];
     //


 
$staffname=$_SESSION["staffname"];
 ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Benedict Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/file-upload.css" rel="stylesheet">

     <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/custom.css">
    <link rel="stylesheet"  href="">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Raleway:300,400">
    <link rel="stylesheet"  href="admin/js/datatable/datatables.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="admin/js/datatable/datatables.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Benedict Academy</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Collapsible Group Item #1
                                                </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Collapsible Group Item #2
                                                </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Collapsible Group Item #3
                                                </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down"><?php echo $yourname ?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li class="nav-small-cap">--- PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php">Home Page </a></li>
                             
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-chat.html">Chat app</a></li>
                                <li><a href="app-ticket.html">Support Ticket</a></li>
                                <li><a href="app-contact.html">Contact / Employee</a></li>
                                <li><a href="about_us.php">About Us</a></li>
                                <li><a href="app-contact2.html">Contact Grid</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>

                        
                        <?php
                        if (isset($_SESSION['user_name']) && $_SESSION['user_cate'] === 'admin'){

                            ?>

                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Session Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addsession.php">Add Session</a></li>
                                <li><a href="viewsession.php">View Session</a></li>                           
                            </ul>
                        </li>

                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Term Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addterm.php">Add Term</a></li>
                                <li><a href="viewterm.php">View Term</a></li>                           
                            </ul>
                        </li>





                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User Registration</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="adduser.php">Add User</a></li>
                                <li><a href="viewuser.php">View User</a></li>                           
                            </ul>
                        </li>
                         <li class="nav-small-cap"></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-question"></i><span class="hide-menu">Exam Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addexam.php">Add & View Exam</a></li>
                                <li><a href="addexam.php">Add & View Exam</a></li>
                                                          
                            </ul>
                        </li>

                         <li class="nav-small-cap"></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-window-close-o"></i><span class="hide-menu">Assignment Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="assignment.php">Give & View Assignment</a></li>
                                <li><a href="assignment.php">View Assignment Submitted</a></li>
                                                          
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu"> Management Staff</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addmanagement.php">Add Management Staff</a></li>
                                <li><a href="management.php">View Management Staff</a></li>                           
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Session Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Add Session</a></li>
                                <li><a href="#">View Session</a></li>                           
                            </ul>
                        </li>


                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Subject Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addsubject.php">Add Subject</a></li>
                                <li><a href="viewsubject.php">View Subject</a></li>                           
                            </ul>
                        </li>

                     
               
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-camera"></i><span class="hide-menu">Gallary</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="gallery.php">View Gallery</a></li>
                                <li><a href="addgallery.php">Add Gallery</a></li>
                            </ul>
                        </li>

                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Class Registration</span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="addclass.php">Add Class</a></li>
                                <li><a href="viewclass.php">View Class</a></li>
                               
                                
                            </ul>
                        </li>

                         
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Staff Registration</span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="addteacher.php">Add Staff</a></li>
                                <li><a href="viewstaff.php">View Staff</a></li>
                               
                                
                            </ul>
                        </li>
                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Salary Management</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="addsalary.php">Add Staff Salary</a></li>
                                        <li><a href="viewsalary.php">View Staff Salary</a></li>                           
                                    </ul>
                                </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Fees Details</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="addpayment.php">Add Payment</a></li>
                                        <li><a href="viewstudentpayment.php">View Student Payment Record</a></li>
                                         <li><a href="viewpayment.php">View All Students Payment Made</a></li>                           
                                    </ul>
                                </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">School Fee Management</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="addfee.php">Add School Fee</a></li>
                                        <li><a href="viewfee.php">View School Fee</a></li>
                                                               
                                    </ul>
                                </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true"><i class="fa fa-television"></i><span class="hide-menu">E-Learning</span></a>
                            <ul aria-expanded="true" class="">
            
                                <li><a href="assignment.php">Add & View Assignment</a></li>
                                <li><a href="syllabus.php">Add Syllabus</a></li>
                                <li><a href="course.php">Add Course Materials</a></li>
                                <li><a href="addexam.php">Add & View Examination</a></li>
                                <li><a href="result.php">Add Result</a></li>
                                <li><a href="viewresult.php">View Result</a></li>
                            </ul>
                         </li>



                          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true"><i class="fa fa-envelope"></i><span class="hide-menu">Comment</span></a>
                            <ul aria-expanded="true" class="">
                                <li><a href="addcomment.php">Announcement</a></li>
                            </ul>
                         </li>
                           <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Student</span></a>
                            <ul aria-expanded="false" class="">
                                 
                                <li><a href="addstudent.php">Add Student</a></li>
                                <li><a href="viewstudent.php">View Student</a></li>
                            </ul>
                         </li>
                          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Assign Subject</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="assignsubject.php">Assign Subject</a></li>
                                <li><a href="viewsubjectassign.php">View Subjects Assigned</a></li>
                            </ul>
                         </li>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-info"></i><span class="hide-menu">Admission</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="viewadmission.php">View Applicants</a></li>
                               
                            </ul>
                         </li>
                        </li>

                             <?php  
                      }
                        elseif (isset($_SESSION['user_name']) && $_SESSION['user_cate'] === 'principal'){

                            ?>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Student</span></a>
                            <ul aria-expanded="false" class="">
                                <li><a href="viewstudent.php">View Student</a></li>
                            </ul>
                         </li>

                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-camera"></i><span class="hide-menu">Gallary</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="gallery.php">View Gallery</a></li>
                                <li><a href="addgallery.php">Add Gallery</a></li>
                            </ul>
                        </li>

                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Class Registration</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="viewclass.php">View Class</a></li>
                               
                                
                            </ul>
                        </li>

                         
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Staff Registration</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="viewstaff.php">View Staff</a></li>
                               
                                
                            </ul>
                        </li>

                          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Salary Management</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="viewsalary.php">View Staff Salary</a></li>                           
                                    </ul>
                                </li>


                          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-info"></i><span class="hide-menu">Admission</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="viewadmission.php">View Applicants</a></li>
                               
                            </ul>
                         </li>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Fees Details</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="viewstudentpayment.php">View Student Payment Record</a></li>
                                         <li><a href="viewpayment.php">View All Students Payment Made</a></li>                           
                                    </ul>
                                </li>




                          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true"><i class="fa fa-envelope"></i><span class="hide-menu">Give Announcement</span></a>
                            <ul aria-expanded="true" class="">
                                <li><a href="addcomment.php">Announcement</a></li>
                            </ul>
                         </li>


                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Subject Management</span></a>
                            <ul aria-expanded="false" class="">
                                <li><a href="viewsubject.php">View Subject</a></li>                           
                            </ul>
                        </li>












                          
                          <?php  
                      }
                        elseif (isset($_SESSION['user_name']) && $_SESSION['user_cate'] === 'class-teacher'){

                            ?>
                                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Student</span></a>
                            <ul aria-expanded="false" class="">
                            
                                <li><a href="addstudent.php">Add Student</a></li>
                                <li><a href="viewstudent.php">View Student</a></li>
                            </ul>
                         </li>



                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true"><i class="fa fa-television"></i><span class="hide-menu">E-Learning</span></a>
                            <ul aria-expanded="true" class="">
            
                                <li><a href="assignment.php">Add & View Assignment</a></li>
                                
                                <li><a href="course.php">Add Course Materials</a></li>
                                <li><a href="syllabus.php">Add Syllabus</a></li>
                                <li><a href="addexam.php">Add & View Examination</a></li>
                                <li><a href="result.php">Add Result</a></li>
                                <li><a href="viewresult.php">View Result</a></li>
                            </ul>
                         </li>



                          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true"><i class="fa fa-envelope"></i><span class="hide-menu">Comment</span></a>
                            <ul aria-expanded="true" class="">
                                <li><a href="addcomment.php">Announcement</a></li>
                            </ul>
                         </li>


                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Subject Management</span></a>
                            <ul aria-expanded="false" class="">
                                <li><a href="addsubject.php">Add Subject</a></li>
                                <li><a href="viewsubject.php">View Subject</a></li>                           
                            </ul>
                        </li>



                            <?php
                        }elseif (isset($_SESSION['user_name']) && $_SESSION['user_cate'] === 'hod'){

                            ?>
                            
                                 <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Subject Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addsubject.php">Add Subject</a></li>
                                <li><a href="viewsubject.php">View Subject</a></li>                           
                            </ul>
                              <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Student</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addstudent.php">Add Student</a></li>
                                <li><a href="viewstudent.php">View Student</a></li>
                            </ul>
                         </li>
                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-window-close-o"></i><span class="hide-menu">Assign Subject</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="assignsubject.php">Assign Subject</a></li>
                                <li><a href="viewsubjectassign.php">View Subjects Assigned</a></li>
                            </ul>
                         </li>
                        </li>

                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true"><i class="fa fa-envelope"></i><span class="hide-menu">Comment</span></a>
                            <ul aria-expanded="true" class="">
                                <li><a href="addcomment.php">Announcement</a></li>
                            </ul>
                         </li>
                        <?php
                        }elseif (isset($_SESSION['user_name']) && $_SESSION['user_cate'] === 'registral'){

                            ?>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Session Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addsession.php">Add Session</a></li>
                                <li><a href="viewsession.php">View Session</a></li>                           
                            </ul>
                        </li>
                            

                            <li class="nav-small-cap"></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Term Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addterm.php">Add Term</a></li>
                                <li><a href="viewterm.php">View Term</a></li>                           
                            </ul>
                        </li>


                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Subject Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addsubject.php">Add Subject</a></li>
                                <li><a href="viewsubject.php">View Subject</a></li>                           
                            </ul>
                        </li>

                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Session Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addsession.php">Add Session</a></li>
                                <li><a href="viewsession.php">View Session</a></li>                           
                            </ul>
                        </li>

                     
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Student</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addstudent.php">Add Student</a></li>
                                <li><a href="viewstudent.php">View Student</a></li>
                            </ul>
                        </li>

               
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-camera"></i><span class="hide-menu">Gallary</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="gallery.php">View Gallery</a></li>
                                <li><a href="addgallery.php">Add Gallery</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Class Registration</span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="addclass.php">Add Class</a></li>
                                <li><a href="viewclass.php">View Class</a></li>
                               
                                
                            </ul>
                        </li>


                         
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Staff Registration</span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="addteacher.php">Add Staff</a></li>
                                <li><a href="viewstaff.php">View Staff</a></li>
                               
                                
                            </ul>
                        </li>
                            
                        <?php
                        }elseif (isset($_SESSION['user_name']) && $_SESSION['user_cate'] === 'bursar'){

                            ?>
                                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Salary Management</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="addsalary.php">Add Staff Salary</a></li>
                                        <li><a href="viewsalary.php">View Staff Salary</a></li>                           
                                    </ul>
                                </li>

                                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Fees Details</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="addpayment.php">Add Payment</a></li>
                                        <li><a href="viewstudentpayment.php">View Student Payment Record</a></li>
                                         <li><a href="viewpayment.php">View All Students Payment Made</a></li>                           
                                    </ul>
                                </li>

                                 <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">School Fee Management</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="addfee.php">Add School Fee</a></li>
                                        <li><a href="viewfee.php">View School Fee</a></li>
                                                                 
                                    </ul>
                                </li>


                        <?php }elseif (isset($_SESSION['user_name']) && $_SESSION['user_cate'] === 'student'){

                            ?>
                                    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-television"></i><span class="hide-menu">E-Learning</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="syllabus1.php">Syllabus</a></li>
                                        <li><a href="course1.php">Course Materials</a></li>
                                        <li><a href="#">E-Exam(Onlin Exam)</a></li>
                                         <li><a href="mysubject.php">My subject</a></li>                           
                                    </ul>
                                </li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Result</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="result1.php">View Raw Score</a></li>
                                        <li><a href="#">Print Result Report Card</a></li>                           
                                    </ul>
                                </li>
                                 <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true"><i class="fa fa-envelope"></i><span class="hide-menu">Comment</span></a>
                            <ul aria-expanded="true" class="">
                                <li><a href="addcomment.php">Check Announcement</a></li>
                            </ul>
                         </li>

                          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true"><i class="fa fa-money"></i><span class="hide-menu">Fees Payment</span></a>
                            <ul aria-expanded="true" class="">
                                <li><a href="studentpayment.php">Fees Payment</a></li>
                                <li><a href="#">Fees Breakdown</a></li>
                            </ul>
                         </li>

                          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true"><i class="fa fa-home"></i><span class="hide-menu">Hostel</span></a>
                            <ul aria-expanded="true" class="">
                                <li><a href="#">Apply for hostel</a></li>
                                <li><a href="#">View my hostel</a></li>
                            </ul>
                         </li>


                              


                            <?php }

                             ?>


    
                        
                     </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Basic Form</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                                <li class="breadcrumb-item active"></li>
                            </ol>

            <div class="modal fade" id="admissionaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" arial-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Register For Admission Here</h5>
                            <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                <span arial-hidden="true">&times;</span>
                            </button>
                            
                        </div>
                        <form action="insertadmission.php" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="text-danger">Name</label>
                                     <input type="text" class="form-control" name="name" placeholder="ENTER YOUR FULLNAME" required>
                               </div>

                               <div class="form-group">
                                    <label class="text-danger">Email</label>
                                     <input type="email" class="form-control" name="email" placeholder="ENTER YOUR EMAIL" required>
                               </div>

                                <div class="form-group">
                                    <label class="text-danger">Phone Number</label>
                                     <input type="number" class="form-control" name="mobile" placeholder="ENTER YOUR MOBILE NUMBER" required>
                               </div>
                                
                                <div class="form-group">
                                    <label class="text-danger">Class</label>
                                     <select class="form-control" name="class" required>

                                <?php
                                    $getclass = "SELECT * FROM class ";
                                    $run_class = mysqli_query($conn,$getclass);
                                    while ($rowclass=mysqli_fetch_array($run_class)) {
                                        $id = $rowclass['id'];
                                        $class= $rowclass['classname'];

                                 ?>
                                 <option value="<?php echo $class; ?>"><?php echo $class;?></option>




                                <?php } ?>
                                </select>
                                    
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-danger">Former School</label>
                                     <input type="text" name="former" class="form-control text-left" placeholder="ENTER FOR SCHOOL" >
                                    
                                </div>
                               

                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Peoceed To Payment</button>
                                </div>
                                </form>
                                
                            </div>
                            
                            
                      
                        
                    </div>
                    
                </div>
            </div>
                





















                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#admissionaddmodal">
                                     Admission Form Is Ongoing (Apply Now)
                            </button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
