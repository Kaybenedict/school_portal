<?php 

ob_start();

//if session variable is not found

?>

    <?php include "header.php"; 


  
if ($_GET['id']) {
    $edit_id = $_GET['id'];

    $staff = "SELECT * FROM staff WHERE staff_id = '$edit_id' ";
    $runstaff=mysqli_query($conn,$staff);
    $row = mysqli_fetch_array($runstaff);

    $staff_id = $row['staff_id'];
    $staffname = $row['staffname'];
    $address = $row['address'];
    $designation = $row['designation'];
    $gender = $row['gender'];
    $mobile = $row['mobile'];
    $email = $row['email'];
    $level = $row['level'];
    $salary = $row['salary'];
    $dob = $row['dob'];


    
}

 ?>

 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Staff Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $staffname; ?>" name="staffname" />
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $address ?>" name="address" />
                            
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Designation</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $designation ?>" name="designation" />
                            
                        </div>
                    </div>
        
                    
                    
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender" required>
                                <option value="male" <?php if($gender=='male'){echo "> Selected";} ?>>Male</option>
                                <option value="female" <?php if($gender=='female'){echo "> Selected";} ?>>Female</option>           
                            </select>
                            
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Mobile</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="<?php echo $mobile; ?>" name="mobile" />
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="<?php echo $email; ?>"  name="email" />
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Level</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $level; ?>" name="level" />
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Salary</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $salary; ?>" name="salary" />
                            
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Date Of Birth</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $dob; ?>" name="dob" required/>
                            
                        </div>
                    </div>

                    


                    

                
                    
                   


                    
                    <div class="form-group row mt-2">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-outline-primary w-100" name="update">Update Staff</button>
                    
                        </div>
                    </div>
        
                </form>
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


    <?php 
    if (isset($_POST['update'])) {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }


        $studentname = $_POST['studentname'];
        $address = $_POST['address'];
        $designation = $_POST['designation'];      
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $level = $_POST['level'];
        $salary = $_POST['salary'];
        $dob = $_POST['dob'];

        $update = "UPDATE staff SET 
        staffname = '$staffname',
        address = '$address',
        designation = '$designation',
        gender = '$gender',
        mobile = '$mobile',
        email = '$email',
        level = '$level',
        salary = '$salary',
        dob = '$dob'

        WHERE staff_id='$id';

        ";
        $insert_pro=mysqli_query($conn,$update);
        if ($insert_pro) {
            echo "<script>alert('Welcome, You just updated staff')</script>";
            echo "<script>window.open('viewstaff.php', '_self')</script>";
        }
    }

 ?>