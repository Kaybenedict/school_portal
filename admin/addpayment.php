    <?php include "header.php";

            
 
    if (isset($_POST['submit'])) {
        $student_id = $_POST['student_id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $fee = $_POST['fee'];
        $term = $_POST['term'];
        $session = $_POST['session'];
        $amtpay=$_POST['amtpay'];

        $a=$fee - $amtpay;
        $balance = $_POST['balance'];
        $date = $_POST['date'];

                                    


        $insert_payment= "INSERT INTO payment (student_id,name,class,fee,term,session,amtpay,balance,date) VALUES ('$student_id','$name','$class','$fee','$term','$session','$amtpay','$a','$date')";
        $insert_pro=mysqli_query($conn,$insert_payment);
        if ($insert_pro) {
            echo "<script>alert('Welcome, You Just Added New Payment')</script>";
            echo "<script>window.open('addpayment.php', '_self')</script>";
        }
    }

 ?>



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-md-8">

                                    <input type="text" name="student_id" placeholder="ENTER STUDENT ID" value="<?php if(isset($_GET['student_id'])){echo $_GET['student_id'];} ?>" class="form-control" required>
 
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">FETCH</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                        <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-8">
                                <?php 

                                    if (isset($_GET['student_id'])) {
                                        $student_id=$_GET['student_id'];
                                        $query="SELECT * FROM student WHERE student_id='$student_id' ";
                                        $query_run=mysqli_query($conn,$query);
                                        if (mysqli_num_rows($query_run)>0) {
                                            foreach ($query_run as $row) {
                                               // echo $row['name'];
                                                ?>

                                    <input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>"  >

                                    <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Student Name</label>
                                    <input type="text" name="name" value="<?php echo $row['name']; ?>"  class="form-control" readonly>
                                    
                                </div>
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Class</label>
                                    <input type="text" name=
                                    "class" value="<?php echo $row['class']; ?>"  class="form-control" required>
                                    
                                </div>
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Total Amount</label>
                                    <input type="text" name="fee" value="<?php echo $row['fee']; ?>" class="form-control" readonly>
                                    
                                </div>
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Term</label>
                                    <select class="form-control" name="term" required>

                                <?php
                                    $getstaff = "SELECT * FROM term";
                                    $run_staff = mysqli_query($conn,$getstaff);
                                    while ($rowstaff=mysqli_fetch_array($run_staff)) {
                                        $id = $rowstaff['id'];
                                        $termname = $rowstaff['termname'];

                                 ?>

                                 <option value="<?php echo $termname; ?>"><?php echo $termname;?></option>

                                <?php } ?>
                                 
                            </select>
                                    
                                </div>
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Session</label>
                                   <select class="form-control" name="session" required>

                                 <?php
                                    $getsession = "SELECT * FROM session";
                                    $run_session = mysqli_query($conn,$getsession);
                                    while ($rowsession=mysqli_fetch_array($run_session)) {
                                        $id = $rowsession['id'];
                                        $session = $rowsession['session'];

                                 ?>

                                 <option value="<?php echo $session; ?>"><?php echo $session;?></option>

                                <?php } ?>
                                 
                            </select>
                                    
                                </div>
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Amount To Pay</label>
                                    <input type="number" name="amtpay" placeholder="Enter Amount To Pay" class="form-control">
                                    
                                    
                                </div>
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Payment Date</label>
                                    <input type="date" name="date" class="form-control" required>
                                    
                                    
                                </div>
                                 <div class="form-group">
                                    <input type="hidden" name="balance" class="form-control">
                                    
                                </div>

                                <div class="form-group ml-2  mb-2">
                                    <button  class="btn btn-info w-100" name="submit">Submit</button>
                                    
                                </div>





                                                <?php
                                            }
                                        }
                                        else{
                                            echo "No Record Found";
                                        }
                                    }
                                    

                                 ?>

                                
                                
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
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