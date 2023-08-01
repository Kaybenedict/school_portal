<?php 

ob_start();


?>


    <?php include "header.php"; ?>




    <?php 

    

    if (isset($_GET['del'])) {
    $del_id=$_GET['del'];

    $del_query = "DELETE FROM payment WHERE id ='$del_id' ";
    $del_run = mysqli_query($conn,$del_query);
    if ($del_run) {

        echo "<script>alert('You Have Deleted Successfully')</script>";
        echo "<script>window.open('viewpayment.php', '_self')</script>";
        # code...
    }
}









     ?>
 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
 
                            <div class="card-body">
                                <h2 class="text-center text-white bg-primary">View Term Details</h2>
                    <div align="right">
                        
                    </div>
                    <table class="table table-bordered table-success" id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sr</th>
                                <th>Student Id</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Total Fee</th>
                                <th>Term</th>
                                <th>Session</th>
                                <th>Amount Paid</th>
                                <th>Balance</th>
                                <th>Date</th>
                                <th>
                                    <i class="fa fa-pencil-square-o"></i>
                                </th>
                                
                                
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php 
                                $term = "SELECT * FROM payment ORDER BY class DESC";
                                $runterm = mysqli_query($conn,$term);
                                $i=0;

                                while ($rowterm = mysqli_fetch_array($runterm)): {
                                    $id = $rowterm['id'];
                                    $student_id = $rowterm['student_id'];
                                    $name = $rowterm['name'];
                                    $class = $rowterm['class'];
                                    $fee = $rowterm['fee'];
                                    $term = $rowterm['term'];
                                    $session = $rowterm['session'];
                                    $amtpay = $rowterm['amtpay'];
                                    $balance = $rowterm['balance'];
                                    $date = $rowterm['date'];
                                    $i++;

                                    //$gallery_image = $rowstudent['gallery_image'];

                                  ?>


                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo ucfirst($student_id); ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $class; ?></td>
                                    <td><?php echo $fee; ?></td>
                                    <td><?php echo $term; ?></td>
                                    <td><?php echo $session; ?></td>
                                    <td><?php echo $amtpay; ?></td>
                                    <td><?php echo $balance; ?></td>
                                    <td><?php echo $date; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="editpayment.php?id=<?php echo $id; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                    </td>
                                </tr>
                            <?php }; ?>
                            
                            <?php endwhile ?>
                        </tbody>
                        
                    </table>
                    
                </div>


                    
                





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