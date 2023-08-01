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

    $_SESSION['class'] = $data["class"];
    $class = $_SESSION['class'];
    


?>

                

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Student Syllabus Page</h4>
                                <h6 class="card-subtitle text-danger"> All forms are required </h6>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="class" value="<?php echo $class ?>">
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
                        <label class="col-sm-2 col-form-label text-danger">Subject</label>
                        <div class="col-sm-10">
                              <select class="form-control" name="subject" required>

                                 <?php
                                    $getsubject = "SELECT * FROM syllabus WHERE class='$class' ";
                                    $run_subject = mysqli_query($conn,$getsubject);
                                    while ($rowsubject=mysqli_fetch_array($run_subject)) {
                                        $id = $rowsubject['id'];
                                        $subjectname = $rowsubject['subject'];

                                 ?>

                                 <option value="<?php echo $subjectname; ?>"><?php echo $subjectname;?></option>
                                   

                                <?php } ?>
                                </select>
                            
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-outline-primary w-100" name="submit">Load</button>
                        </div>
                    </div>
                    <?php 
                        if (isset($_POST['submit'])) { 
                            $session=$_POST['session'];
                            $term=$_POST['term'];
                            $subject = $_POST['subject'];
                            

                            ?>

                            <table class="table table-border" id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th>S/r</th>
                                <th>Chapter</th>
                                <th>Topic</th>
                                <th>Download</th>
                                
                                
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php 

                            $getstu="SELECT * FROM syllabus WHERE subject = '$subject' AND class = '$class' AND term='$term' ";
                             $runstu = mysqli_query($conn,$getstu);
                               
                                $i=0;
                                while ($row = mysqli_fetch_array($runstu)): {
                                    $id = $row['id'];
                                    $subject = $row['subject'];
                                    $chapter = $row['chapter'];
                                    $syllabus = $row['syllabus'];
                                    $i++;

                                    //$gallery_image = $rowstudent['gallery_image'];

                                  ?>


                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $chapter; ?></td>
                                    <td><?php echo $syllabus; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info">Download pdf</button>
                                    </td>
                                </tr>
                            <?php }; ?>
                            
                            <?php endwhile ?>
                            
                        </tbody>
                    </table>
                            
                       


                       <?php }




                     ?>
                        


                    




                    

                    

                    
                            
                     
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