<?php 

ob_start();
 include "header.php";
$staffname=$_SESSION['staffname'];

//if session variable is not found

?>
    





    <?php 

  

    if (isset($_GET['del'])) {
    $del_id=$_GET['del'];

    $del_query = "DELETE FROM result WHERE id ='$del_id' ";
    $del_run = mysqli_query($conn,$del_query);
    if ($del_run) {

        echo "<script>alert('You Have Deleted Successfully')</script>";
        echo "<script>window.open('viewresult.php', '_self')</script>";
        # code...
    }
}









     ?>

     <?php 

      if (isset($_GET['page'])) {
        $page=$_GET['page'];

      }else{
        $page=1;
      }


      $num_per_page =06;
      $start_from = ($page-1)*06;
      

      $student="SELECT * FROM result LIMIT $start_from,$num_per_page";
      $runstudent=mysqli_query($conn,$student);
  ?>
 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
 
            <div class="card-body">
                <h2 class="text-center text-white bg-primary">View  Student Results</h2>



            <h6 class="card-subtitle text-danger"> All forms are required </h6>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="class" value="<?php echo $class ?>">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Subject</label>
                        <div class="col-sm-10">
                           <select class="form-control" name="subject" required>

                                <?php
                                    $getclass = "SELECT * FROM assignsubject WHERE staff_name = '$yourname' ";
                                    $run_class = mysqli_query($conn,$getclass);
                                    while ($rowclass=mysqli_fetch_array($run_class)) {
                                        $id = $rowclass['id'];
                                        $subject= $rowclass['subject'];

                                 ?>

                                 <option value="<?php echo $subject; ?>"><?php echo $subject;?></option>

                                <?php } ?>
                                 
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Session</label>
                        <div class="col-sm-10">
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
                    </div>




                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Term</label>
                        <div class="col-sm-10">
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
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Class</label>
                        <div class="col-sm-10">
                             <select class="form-control" name="class" required>

                                <?php
                                    $getclass = "SELECT * FROM assignsubject WHERE staff_name = '$yourname' ";
                                    $run_class = mysqli_query($conn,$getclass);
                                    while ($rowclass=mysqli_fetch_array($run_class)) {
                                        $id = $rowclass['id'];
                                        $class= $rowclass['class'];

                                 ?>

                                 <option value="<?php echo $class; ?>"><?php echo $class;?></option>

                                <?php } ?>
                                 
                            </select>
                            
                        </div>
                    </div>

                     

                    <div class="form-group row mt-2">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-outline-primary w-100" name="submit">Load Results</button>
                        </div>
                    </div>
                    <?php 
                        if (isset($_POST['submit'])) { 
                            $session=$_POST['session'];
                            $term=$_POST['term'];
                            $subject = $_POST['subject'];
                            

                            ?>
                   















                    <table  class="table table-bordered table-success" id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sr</th>
                                <th>Student Id</th>
                                <th>CA 1</th>
                                <th>CA 2</th>
                                <th>CA 3</th>
                                <th>Exam</th>
                                <th>Total</th>
                                <th>Grade</th>                 
                                <th>
                                    <i class="fa fa-pencil-square-o"></i>
                                </th>
                                <th>
                                    <i class="fa fa-trash-o"></i>
                                </th>
                                
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php 
                                
                                $student = "SELECT * FROM result WHERE subject = '$subject' AND class = '$class' AND session='$session' AND term='$term' ";
                                $runstudent = mysqli_query($conn,$student);
                                $i=0;
                                $total_record= mysqli_num_rows($runstudent);
                                $total_page = ceil($total_record/$num_per_page);
                                if($page>1){
                                    echo "<a href='viewresult.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";

                                  }

                                  for($ii=1;$ii<$total_page;$ii++)
                                  {
                                    echo "<a href='viewresult.php?page=".$ii."' class='btn btn-primary'>$ii</a>";
                                  }


                                   if($ii>$page){
                                    echo "<a href='viewresult.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";

                                  }
                              

                                while ($rowstudent = mysqli_fetch_array($runstudent)): {
                                    $id = $rowstudent['id'];
                                    $student_id = $rowstudent['student_id'];
                                    $ca1 = $rowstudent['ca1'];
                                    $ca2 = $rowstudent['ca2'];
                                    $ca3 = $rowstudent['ca3'];
                                    $exam = $rowstudent['exam'];
                                    $total = $rowstudent['total'];
                                    $grade = $rowstudent['grade'];           
                                    $i++;


                                  ?>


                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo ucfirst($student_id); ?></td>
                                    <td><?php echo $ca1; ?></td>
                                    <td><?php echo $ca2; ?></td>
                                    <td><?php echo $ca3; ?></td>
                                    <td><?php echo $exam; ?></td>
                                    <td><?php echo $total; ?></td>
                                    <td><?php echo $grade; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="editresult.php?id=<?php echo $id; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="viewresult.php?del=<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            <?php }; ?>
                            
                            <?php endwhile ?>
                        </tbody>
                        
                    </table>
                <?php } ?>
                    
                </div>


                    
                





            </div>
        </div>

                            </div>
                        </div>
                    </div>

                </div>

                  <?php 
    function pre_r($array) {
      echo '<pre>';
      print_r($array);
      echo '</pre>';
    }


   ?>
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