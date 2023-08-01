<?php 

ob_start();

//if session variable is not found
//if (!isset($_SESSION['user_name'])) {

  //  header('location: login.php');
    # code...
//}
?>
    <?php include "header.php"; ?>
  
 

<?php 
    if (isset($_POST['submit'])) {
        $staff_name = $_POST['staff_name'];
        $subject = $_POST['subject'];
        $class = $_POST['class'];
        $classoption = $_POST['classoption'];

        $insert_student= "INSERT INTO assignsubject (staff_name,subject,class,classoption) VALUES ('$staff_name','$subject','$class','$classoption')";
        $insert_pro=mysqli_query($conn,$insert_student);
        if ($insert_pro) {
            echo "<script>alert('Welcome, You just assigned new subject')</script>";
            echo "<script>window.open('viewsubjectassign.php', '_self')</script>";
        }
    }

 ?>
                

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Subject  Registration Form</h4>
                                <h6 class="card-subtitle"> All forms are required </h6>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Staff Name</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="staff_name" required>

                                <?php
                                    $getstaff = "SELECT * FROM staff WHERE designation = 'TEACHER' ";
                                    $run_staff = mysqli_query($conn,$getstaff);
                                    while ($rowstaff=mysqli_fetch_array($run_staff)) {
                                        $id = $rowstaff['staff_id'];
                                        $staff_name = $rowstaff['staffname'];

                                 ?>

                                 <option value="<?php echo $staff_name; ?>"><?php echo $staff_name;?></option>

                                <?php } ?>
                                 
                            </select>

                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Subject</label>
                        <div class="col-sm-10">
                           <select class="form-control" name="subject" required>

                                <?php
                                    $getsubject = "SELECT * FROM subject ";
                                    $run_subject = mysqli_query($conn,$getsubject);
                                    while ($rowsubject=mysqli_fetch_array($run_subject)) {
                                        $id = $rowsubject['id'];
                                        $subjectname = $rowsubject['subjectname'];

                                 ?>

                                 <option value="<?php echo $subjectname; ?>"><?php echo $subjectname;?></option>

                                <?php } ?>
                                 
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Class</label>
                        <div class="col-sm-10">
                           <select class="form-control" name="class" required>

                                <?php
                                    $getclass = "SELECT * FROM class ";
                                    $run_class = mysqli_query($conn,$getclass);
                                    while ($rowclass=mysqli_fetch_array($run_class)) {
                                        $id = $rowclass['class_id'];
                                        $classname = $rowclass['classname'];

                                 ?>

                                 <option value="<?php echo $classname; ?>"><?php echo $classname;?></option>

                                <?php } ?>
                                 
                            </select>
                            
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Class Option</label>
                        <div class="col-sm-10">
                           <select class="form-control" name="classoption" required>

                                <?php
                                    $getclassoption = "SELECT * FROM class ";
                                    $run_classoption = mysqli_query($conn,$getclassoption);
                                    while ($rowclassoption=mysqli_fetch_array($run_classoption)) {
                                        $id = $rowclassoption['class_id'];
                                        $classoption = $rowclassoption['classoption'];

                                 ?>

                                 <option value="<?php echo $classoption; ?>"><?php echo $classoption;?></option>

                                <?php } ?>
                                 
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-outline-primary w-100" name="submit">Assign Subject</button>
                    
                        </div>
                    </div>
                    

                    
                            
                     
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