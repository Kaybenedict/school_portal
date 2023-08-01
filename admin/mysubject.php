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

                   
                    <table  class="table table-bordered table-success" id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th>S/r</th>
                                <th>Subject</th> 
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php 

                            $getstu="SELECT * FROM assignsubject WHERE class = '$class' ";
                             $runstu = mysqli_query($conn,$getstu);
                               
                                $i=0;
                                while ($row = mysqli_fetch_array($runstu)): {
                                    $id = $row['id'];
                                    $subject = $row['subject'];
                                    $i++;

                                    //$gallery_image = $rowstudent['gallery_image'];

                                  ?>


                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $subject; ?></td>
                                </tr>
                            <?php }
                            ; ?>
                            
                            <?php endwhile


                             ?>


                            
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