  <?php include "header.php";

        

     ?>




<!-- Modal -->









            <div class="modal fade" id="syllabusaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" arial-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Examination Page</h5>
                            <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                <span arial-hidden="true">&times;</span>
                            </button>
                            
                        </div>
                        <form action="insertsyllabus.php" method="POST">
                            <div class="modal-body">
                                 <div class="form-group">
                                    <label></label>
                                     <input type="hidden" name="staffname" value="<?php echo $staffname; ?>" class="form-control">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
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
                                
                                 
                                <div class="form-group">

                                    <label>Term</label>
                                    <select class="form-control" name="term" required>

                                 <?php
                                    $getterm = "SELECT * FROM term";
                                    $run_term = mysqli_query($conn,$getterm);
                                    while ($rowterm=mysqli_fetch_array($run_term)) {
                                        $id = $rowterm['id'];
                                        $termname = $rowterm['termname'];

                                 ?>

                                 <option value="<?php echo $termname; ?>"><?php echo $termname;?></option>

                                <?php } ?>
                                 
                            </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Class</label>
                                     <select class="form-control" name="class" required>

                                <?php
                                    $getclass = "SELECT * FROM assignsubject WHERE staff_name = '$staffname' ";
                                    $run_class = mysqli_query($conn,$getclass);
                                    while ($rowclass=mysqli_fetch_array($run_class)) {
                                        $id = $rowclass['id'];
                                        $class= $rowclass['class'];

                                 ?>

                                 <option value="<?php echo $class; ?>"><?php echo $class;?></option>




                                <?php } ?>
                                </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select class="form-control" name="subject" required>

                                 <?php
                                    $getsubject = "SELECT * FROM assignsubject WHERE staff_name = '$staffname' ";
                                    $run_subject = mysqli_query($conn,$getsubject);
                                    while ($rowsubject=mysqli_fetch_array($run_subject)) {
                                        $id = $rowsubject['id'];
                                        $subjectname = $rowsubject['subject'];

                                 ?>

                                 <option value="<?php echo $subjectname; ?>"><?php echo $subjectname;?></option>
                                   

                                <?php } ?>
                                </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Chapter</label>
                                     <input type="text" name="chapter" class="form-control">
                                    
                                </div>
                                 <div class="form-group">
                                    <label>Syllabus</label>
                                     <input type="text" name="syllabus" class="form-control" placeholder="Enter Syllabus"><br>
                                    
                                </div>
                               

                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                                
                            </div>
                            
                            
                      
                        
                    </div>
                    
                </div>
                



                </div>

                <!--########################## EDIT POP UP FORM##################################-->

          <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" arial-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Syllabus</h5>
                            <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                <span arial-hidden="true">&times;</span>
                            </button>
                            
                        </div>
                        <form action="updatesyllabus.php" method="POST">
                         
                            <div class="modal-body">
                               <div class="form-group">
                                    <label></label>
                                     <input type="hidden" name="update_id" id="update_id" class="form-control" required>     
                                </div>
                                <div class="form-group">
                                    <label>Session</label>
                                     <select class="form-control" name="session" id="session" required>

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
                            <div class="form-group"> 
                                    <label>Term</label>
                                    <select class="form-control" name="term" id="term" required>

                                 <?php
                                    $getterm = "SELECT * FROM term";
                                    $run_term = mysqli_query($conn,$getterm);
                                    while ($rowterm=mysqli_fetch_array($run_term)) {
                                        $id = $rowterm['id'];
                                        $termname = $rowterm['termname'];

                                 ?>

                                 <option value="<?php echo $termname; ?>"><?php echo $termname;?></option>

                                <?php } ?>
                                 
                            </select>
                                    
                            </div>
                                <div class="form-group">
                                    <label>Class</label>
                                     <select class="form-control" name="class" id="class" required>

                                <?php
                                    $getclass = "SELECT * FROM assignsubject WHERE staff_name = '$staffname' ";
                                    $run_class = mysqli_query($conn,$getclass);
                                    while ($rowclass=mysqli_fetch_array($run_class)) {
                                        $id = $rowclass['id'];
                                        $class= $rowclass['class'];

                                 ?>

                                 <option value="<?php echo $class; ?>"><?php echo $class;?></option>




                                <?php } ?>
                                </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select class="form-control" name="subject" id="subject" required>

                                 <?php
                                    $getsubject = "SELECT * FROM assignsubject WHERE staff_name = '$staffname' ";
                                    $run_subject = mysqli_query($conn,$getsubject);
                                    while ($rowsubject=mysqli_fetch_array($run_subject)) {
                                        $id = $rowsubject['id'];
                                        $subjectname = $rowsubject['subject'];

                                 ?>

                                 <option value="<?php echo $subjectname; ?>"><?php echo $subjectname;?></option>
                                   

                                <?php } ?>
                                </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Chapter</label>
                                     <input type="text" name="chapter" id="chapter" class="form-control" required>
                                    
                                </div>
                                 <div class="form-group">
                                    <label>Syllabus</label>
                                     <input type="text" name="syllabus" id="syllabus" class="form-control" placeholder="Enter Syllabus" required><br>
                                    
                                </div>
                               

                               <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                                </div>
                                </form>
                                
                            </div>
                            
                            
                      
                        
                    </div>
                    
                </div>
                



                </div>























                <!-------- view-------->
            


 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#syllabusaddmodal">
                                     Add Syllabus
                                        </button>
                            </div>
                        </div>
                        <div class="card">

                            <div class="card-body">

                               
                                 <table class="table table-bordered table-success">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th scope="col">Session</th>
                                            <th scope="col">Term</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Chapter</th>
                                            <th scope="col">Topic</th>
                                            <th scope="col">Edit</th>
                                            
                                        </tr>
                                    </thead>

                                <tbody>

                                
                                 <?php 

                                    $query = "SELECT * FROM syllabus WHERE staffname='$staffname' ";
                                    $query_run = mysqli_query($conn,$query);
                                    $i=0;

                                    while ($row = mysqli_fetch_array($query_run)): {
                                    $id = $row['id'];
                                    $session = $row['session'];
                                    $term = $row['term'];
                                    $subject = $row['subject'];
                                    $class= $row['class'];
                                    $chapter = $row['chapter'];
                                    $syllabus = $row['syllabus'];
                                    
                                    $i++;



                                 ?>
                                 
                                     <tr>
                                        <td><?php echo $i; ?></td>
                                         <td><?php echo $session; ?></td>
                                        
                                         <td><?php echo $term; ?></td>
                                         <td><?php echo $subject; ?></td>
                                         <td><?php echo $class; ?></td>
                                         <td><?php echo $chapter; ?></td>
                                         <td><?php echo $syllabus; ?></td>
                                         <td>
                                           <button type="button" class="btn btn-success editsyllabus">Edit</button>
                                         </td>


                                     </tr>
                                   <?php } ?>
                                 <?php endwhile ?>
                                 </tbody>
                                     
                                 </table>
                                
                            </div>

                            
                        </div>
                    </div>
                </div>

<!--------------------edit pop up form------>

                
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

        <script>
            $(document).ready(function () {
                $('.editsyllabus').on('click',function() {
                    $('#editmodal').modal('show');

                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function() {
                      return $(this).text();
                    }).get();

                    console.log(data);
                    $('#update_id').val(data[0]);
                    $('#session').val(data[1]);
                    $('#term').val(data[2]);
                    $('#subject').val(data[3]);
                    $('#class').val(data[4]);
                    $('#chapter').val(data[5]);
                    $('#syllabus').val(data[6]);

                        

                });

            });
        </script>

        
  <?php include "footer.php"; ?>