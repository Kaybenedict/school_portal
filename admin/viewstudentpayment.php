    <?php include "header.php";

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
                                        $query="SELECT * FROM payment WHERE student_id='$student_id' ";
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
                                    "class" value="<?php echo $row['class']; ?>"  class="form-control" required readonly>
                                    
                                </div>

                                 <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Term</label>
                                    <input type="text" name="term" value="<?php echo $row['term']; ?>" class="form-control" readonly>
                                    
                                    
                                </div>
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Session</label>
                                  <input type="text" name="session" value="<?php echo $row['session']; ?>" class="form-control" readonly>
                                    
                                    
                                </div>
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Total Amount To Be Paid</label>
                                    <input type="text" name="fee" value="<?php echo $row['fee']; ?>" class="form-control" readonly>
                                    
                                </div>
                               
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Total Payment Made</label>
                                  <input type="text" name="amtpay" value="<?php echo $row['amtpay']; ?>" class="form-control" readonly>
                                        
                                </div>

                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Balance Left</label>
                                  <input type="text" name="balance" value="<?php echo $row['balance']; ?>" class="form-control" readonly>
                                        
                                </div>
                               
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Payment Date</label>
                                     <input type="text" name="date" value="<?php echo $row['date']; ?>" class="form-control" readonly>
                                    
                                    
                                </div>
                                <div class="form-group ml-2  mb-2">
                                    <label for="" class="text-success">Purpose</label>
                                     <input type="text" name="purpose" value="<?php echo $row['purpose']; ?>" class="form-control" readonly>
                                    
                                    
                                </div>
                                 
                                <div class="form-group ml-2  mb-2">
                                    <a href="addpayment.php" class="btn btn-info">Make Payment</a>
                                    
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