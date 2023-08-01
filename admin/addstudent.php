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
        $student_id=$_POST['student_id'];
        $fee=$_POST['fee'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $class = $_POST['class'];
        $session = $_POST['session'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $date = $_POST['date'];
        $file=$_FILES['image']['name'];

       // $target_dir="uploads/";
       // $target_file=$target_dir . basename($_FILES["images"]["name"]);
        //$temp_file=$_FILES["images"]["name"];
       // move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
       



        $insert_student= "INSERT INTO student (student_id,fee,name,address,class,session,gender,mobile,email,password,dob,image,date) VALUES ('$student_id','$fee','$name','$address','$class','$session','$gender','$mobile','$email','$password','$dob','$file','$date')";
        $insert_pro=mysqli_query($conn,$insert_student);
        if ($insert_pro) {
                move_uploaded_file($_FILES['image']['tmp_name'], "$file");
                echo "<script>alert('Student Added Successfully')</script>";
           
            //echo "<script>window.open('student.php', '_self')</script>";
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
                                <h4 class="card-title">Student Registration Form</h4>
                                <h6 class="card-subtitle"> All forms are required </h6>
<form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Student Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Student Name" name="name" />
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Student Id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Student Id" name="student_id" />
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Address" name="address" />
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Class</label>
                        <div class="col-sm-10">
                           <select class="form-control" name="class" required>

                                <?php
                                    $getstaff = "SELECT * FROM class ";
                                    $run_staff = mysqli_query($conn,$getstaff);
                                    while ($rowstaff=mysqli_fetch_array($run_staff)) {
                                        $id = $rowstaff['class_id'];
                                        $class_name = $rowstaff['classname'];
                                        $class_option = $rowstaff['classoption'];

                                 ?>

                                 <option value="<?php echo $class_name; ?>"><?php echo $class_name;?></option>

                                <?php } ?>
                                 
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Session</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="session" required>

                                <?php
                                    $getbatch = "SELECT * FROM session";
                                    $run_batch = mysqli_query($conn,$getbatch);
                                    while ($rowbatch=mysqli_fetch_array($run_batch)) {
                                        $id = $rowbatch['id'];
                                        $session = $rowbatch['session'];
                        

                                 ?>

                                 <option value="<?php echo $session; ?>"><?php echo $session;?></option>

                                <?php } ?>
                                 
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>          
                            </select>
                            
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Mobile</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Enter Mobile Number" name="mobile" />
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Enter Email Address" name="email" />
                            
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Fees</label>
                        <div class="col-sm-10">
                             <select class="form-control" name="fee" required>

                            
                            <?php
                                    $getbatch = "SELECT * FROM fee";
                                    $run_batch = mysqli_query($conn,$getbatch);
                                    while ($rowbatch=mysqli_fetch_array($run_batch)) {
                                        $id = $rowbatch['id'];
                                        $fees = $rowbatch['fees'];
        
                        

                                 ?>

                                 <option value="<?php echo $fees; ?>"><?php echo $fees;?></option>

                                <?php } ?>
                                 
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Password" name="password" required/>
                            
                        </div>
                    </div>

                    


                    
                    
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Date of Birth</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="dob" />
                            
                        </div>
                    </div>
                     <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" />
                            
                        </div>
                    </div>

                   

                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label text-danger">Upload Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file btn btn-danger " name="image" required />
                            
                        </div>
                    </div>

                    


                    <div class="form-group row mt-2">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-outline-primary w-100" name="submit">Add Student</button>
                    
                        </div>
                    </div>
        
                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
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


   
