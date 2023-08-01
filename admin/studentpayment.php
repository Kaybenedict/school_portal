<?php 

ob_start();
include "header.php";
$yourname=   $_SESSION['name'];

//if session variable is not found
//if (!isset($_SESSION['user_name'])) {

   // header('location: login.php');
    # code...
 $get_student = "SELECT * FROM student WHERE name = '$yourname' ";
    
    $run_student = mysqli_query($conn,$get_student);
    $data = mysqli_fetch_array($run_student);

    $_SESSION['student_id'] = $data['student_id'];

    $_SESSION['class'] = $data["class"];
    $class = $_SESSION['class'];
    $student_id = $_SESSION['student_id'];

$term = "SELECT * FROM payment WHERE student_id='$student_id' ";
$runterm = mysqli_query($conn,$term);
$rowterm = mysqli_fetch_array($runterm);
$_SESSION['fee']=$rowterm["fee"];
$_SESSION['amtpay']=$rowterm["amtpay"];
$_SESSION['balance']=$rowterm["balance"];

$total = $rowterm['fee'];
$amtpay = $rowterm['amtpay'];
$balance = $rowterm['balance'];
                                    
                                    


?>

                

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-info">Student Subject Form</h4>
                <form action="" method="post" enctype="multipart/form-data">
                    
                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-info">Student Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" value="<?php echo $yourname ?>" readonly>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-info">Student ID</label>
                        <div class="col-sm-10">
                          <input type="text" name="student_id" class="form-control" value="<?php echo $student_id ?>" readonly>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-info">Class</label>
                        <div class="col-sm-10">
                          <input type="text" name="class" class="form-control" value="<?php echo $class ?>" readonly>
                            
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-header bg-primary text-white">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <i class="fa fa-list fa-4x"></i>
                                            </div>
                                            <div class="col">
                                                <h3 class="display-3"><?php echo $total; ?></h3>
                                                <h3>TOTAL FEES</h3>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="card-footer">

                                        <h5>
                                            <a href="#" class="text-primary">View Details <i class="fa fa-arrow-align-items-right"></i></a>
                                        </h5>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-header bg-success text-white">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <i class="fa fa-snowflake fa-4x"></i>
                                            </div>
                                            <div class="col">
                                                <h3 class="display-3"><?php echo $amtpay; ?></h3>
                                                <h3>Total Paid</h3>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="card-footer">

                                       
                                            <h5>
                                            <a href="#" class="text-success">View Details <i class="fa fa-arrow-align-items-right"></i></a>
                                        </h5>
                                            
                                      
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-header bg-danger text-white">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <i class="fa fa-sitemap fa-4x"></i>
                                            </div>
                                            <div class="col">
                                                <h3 class="display-3"><?php echo $balance; ?></h3>
                                                <h3>Total Left</h3>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="card-footer">

                                        <h5>
                                            <a href="#" class="text-danger">View Details <i class="fa fa-arrow-align-items-right"></i></a>
                                        </h5>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>

                        
                    </div>


                    <table class="table table-bordered table-success" id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sr</th>
                                <th>Fee Description</th>
                                <th>Session</th>
                                <th>Term</th>
                                <th>Class</th>
                                <th>Total Amount</th>
                                <th>Total Paid Fees</th>
                                <th>Amount Outstanding</th>
                                <th>Action</th>
                                
                            </tr>
                            
                        </thead>
                        <tbody>

                   
                    <tbody>
                            <?php 
                                $term = "SELECT * FROM payment WHERE student_id='$student_id' ";
                                $runterm = mysqli_query($conn,$term);
                                $i=0;

                                while ($rowterm = mysqli_fetch_array($runterm)): {
                                    $id = $rowterm['id'];
                                    $purpose = $rowterm['purpose'];
                                    $session = $rowterm['session'];
                                    $term = $rowterm['term'];
                                    $class = $rowterm['class'];
                                    $total = $rowterm['fee'];
                                    $amtpay = $rowterm['amtpay'];
                                    $balance = $rowterm['balance'];
                                    $i++;

                                    //$gallery_image = $rowstudent['gallery_image'];

                                  ?>

                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $purpose; ?></td>
                                    <td><?php echo $session; ?></td>
                                    <td><?php echo $term; ?></td>
                                    <td><?php echo $class; ?></td>
                                    <td><?php echo $total; ?></td>
                                    <td><?php echo $amtpay; ?></td>
                                    <td><?php echo $balance; ?></td>
                                    <td><button class="btn btn-primary btn-small">Pay Now</button></td>
                                </tr>
                            <?php }; ?>
                            
                            <?php endwhile ?>
                        </tbody>
                        
                    </table>
                            
                       



                    
                        


                    




                    

                    

                    
                            
                     
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

                
    <?php include "footer.php"; ?>