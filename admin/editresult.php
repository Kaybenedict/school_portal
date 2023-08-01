<?php 

ob_start();

?>

    <?php include "header.php"; 


   

if ($_GET['id']) {
    $edit_id = $_GET['id'];

    $term = "SELECT * FROM result WHERE id = '$edit_id' ";
    $runterm=mysqli_query($conn,$term);
    $row = mysqli_fetch_array($runterm);

    $id = $row['id'];
    $student_id = $row['student_id'];  
    $ca1 = $row['ca1'];
    $ca2 = $row['ca2'];
    $ca3 = $row['ca3'];
    $exam = $row['exam'];
    $total = $row['total'];
    $grade = $row['grade'];

    
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
                        <label class="col-sm-2 col-form-label text-danger">CA 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $ca1; ?>" name="ca1" />
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">CA 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $ca2; ?>" name="ca2" />
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">CA 3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $ca3; ?>" name="ca3" />
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Exam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $exam; ?>" name="exam" />
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $total; ?>" name="total" />
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Grade</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $grade; ?>" name="grade" />
                            
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


        $student_id = $_POST['student_id'];
        $ca1 = $_POST['ca1'];
        $ca2 = $_POST['ca2'];
        $ca3 = $_POST['ca3'];
        $exam = $_POST['exam'];
        $total = $_POST['total'];
        $grade = $_POST['grade'];

        $update = "UPDATE result SET 
        student_id = '$student_id',
        ca1 = '$ca1',
        ca2 = '$ca2',
        ca3 = '$ca3',
        exam = '$exam',
        total = '$total',
        grade = '$grade'
        WHERE id='$id';

        ";
        $insert_pro=mysqli_query($conn,$update);
        if ($insert_pro) {
            echo "<script>alert('Hey, Result Updated Successfully')</script>";
            echo "<script>window.open('viewresult.php', '_self')</script>";
        }else{
            echo "<script>alert('Hey, Result Not Updated  Successfully')</script>";
        }
    }

 ?>