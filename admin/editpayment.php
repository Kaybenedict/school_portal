<?php 

ob_start();

//if session variable is not found
//if (!isset($_SESSION['user_name'])) {

  //  header('location: login.php');
    # code...
//}
?>

    <?php include "header.php"; 


   

if ($_GET['id']) {
    $edit_id = $_GET['id'];

    $management = "SELECT * FROM payment WHERE id = '$edit_id' ";
    $runmanagement=mysqli_query($conn,$management);
    $row = mysqli_fetch_array($runmanagement);

    $id = $row['id'];
    $student_id = $row['student_id'];
    $name = $row['name'];
    $class = $row['class'];
    $fee = $row['fee'];
    $term = $row['term'];
    $session = $row['session'];
    $amtpay = $row['amtpay'];
    $balance = $row['balance'];
    $date = $row['date'];


    
}

 ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Student Id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $student_id; ?>" name="student_id" readonly/>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $name; ?>" name="name" readonly/>
                            
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Class</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $class; ?>" name="name" readonly/>
                            
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Total Fee</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="<?php echo $fee; ?>" name="fee" readonly/>
                            
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Term</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $term; ?>" name="term"/>
                            
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Session</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $session; ?>" name="session" />
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Amount Paid</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="<?php echo $amtpay; ?>" name="amtpay" readonly/>
                            
                        </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Payment Made</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $date; ?>" name="date" readonly/>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Balance</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="<?php echo $balance; ?>" name="balance" />
                            
                        </div>
                    </div>


                   
                

                    
                    <div class="form-group row mt-2">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-outline-primary w-100" name="update">Update</button>
                    
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
          
        </div>
       
    <?php include "footer.php"; ?>


    <?php 
    if (isset($_POST['update'])) {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }


        $term = $_POST['term'];
        $session = $_POST['session'];
        $balance = $_POST['balance'];
        $date = $_POST['date'];



        $update = "UPDATE payment SET 
        term = '$term',
        session = '$session',
        balance = '$balance',
        date = '$date'
        WHERE id='$id';

        ";
        $insert_pro=mysqli_query($conn,$update);
        if ($insert_pro) {
            echo "<script>alert('Welcome, You just updated a record')</script>";
            echo "<script>window.open('viewpayment.php', '_self')</script>";
        }
    }

 ?>