<?php 
 
 include('staffdata.php');
 $staffname=$_SESSION['staffname'];



 if (isset($_GET['del'])) {
        $del_id=$_GET['del'];

        $del_query = "DELETE FROM note WHERE id ='$del_id' ";
        $del_run = mysqli_query($conn,$del_query);
        if ($del_run) {

            echo "<script>alert('You Have Deleted Successfully')</script>";
            echo "<script>window.open('addnote.php', '_self')</script>";
            # code...
        }
}

 ?>	




<!-- Modal -->









            <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" arial-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Notes</h5>
                            <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                <span arial-hidden="true">&times;</span>
                            </button>
                            
                        </div>
                        <form action="insertcode.php" method="POST">
                            <div class="modal-body">
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
                                    <label>Note</label>
                                    <textarea name="notes" class="form-control" rows="2" name="notes" placeholder="Write Notes"></textarea>
                                    <button class="btn btn-info">Upload Note</button>
                                    
                                </div>

                                 <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control">
                                    
                                </div>

                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="add_note" class="btn btn-primary">Add Note</button>
                                      </div>
                                </form>
                                
                            </div>
                            
                            
                      
                        
                    </div>
                    
                </div>
                




                <!-------- edit-------->
            </div>


 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentaddmodal">
                                     Add Note
                                        </button>
                            </div>
                        </div>
                        <div class="card">

                            <div class="card-body">

                                <?php 

                                    $query = "SELECT * FROM note";
                                    $query_run = mysqli_query($conn,$query);



                                 ?>
                                 <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">Subject</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Note</th>
                                            <th scope="col">Date</th>
                                            <th>
                                                <i class="fa fa-pencil-square-o"></i>
                                            </th>
                                            <th>
                                                <i class="fa fa-trash-o"></i>
                                             </th>
                                        </tr>
                                    </thead>

                                <?php
                                    if ($query_run) {
                                         foreach($query_run as $row){
                                     


                                 ?>
                                 <tbody>
                                     <tr>
                                        <td><?php echo $row['subject']; ?></td>
                                        <td><?php echo $row['class']; ?></td>
                                        
                                         <td><?php echo $row['notes']; ?></td>
                                         <td><?php echo $row['date']; ?></td>
                                         <td>
                                        <a class="btn btn-warning" href="editnote.php?id=<?php echo $id; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                    </td>
                                   <!-- </td>
                                        <a class="btn btn-warning editbtn"><i class="fa fa-pencil-square-o"></i></a>
                                    </td>-->
                                    <td>
                                        <a class="btn btn-danger" href="addnote.php?del=<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a>
                                    </td>



                                     </tr>
                                 </tbody>

                                 <?php 
                                 } 
                                }
                                else
                                {
                                    echo "No Record Found";
                                }


                                  ?>
                                     
                                 </table>
                                
                            </div>

                            
                        </div>
                    </div>
                </div>

<!--------------------edit pop up form------>

                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" arial-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Exam Details</h5>
                            <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                <span arial-hidden="true">&times;</span>
                            </button>
                            
                        </div>
                        <form action="updatecode.php" method="POST">
                            <div class="modal-body">
                            <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select  class="form-control" name="class" id="class" required>

                                <?php
                                    $getclass = "SELECT * FROM class ";
                                    $run_class = mysqli_query($conn,$getclass);
                                    while ($rowclass=mysqli_fetch_array($run_class)) {
                                        $id = $rowclass['class_id'];
                                        $class= $rowclass['classname'];

                                 ?>

                                 <option value="<?php echo $class; ?>"><?php echo $class;?></option>

                                <?php } ?>
                                 
                            </select>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select class="form-control" name="subject_name" id="subject_name" required>

                                <?php
                                    $getsubject = "SELECT * FROM subject ";
                                    $run_subject = mysqli_query($conn,$getsubject);
                                    while ($rowsubject=mysqli_fetch_array($run_subject)) {
                                        $id = $rowsubject['id'];
                                        $subject_name = $rowsubject['subjectname'];

                                 ?>

                                 <option value="<?php echo $subject_name; ?>"><?php echo $subject_name;?></option>

                                <?php } ?>
                                 
                            </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Question</label>
                                    <textarea class="form-control" name="question" id="question" rows="1"></textarea>
                                    
                                </div>
                                 <div class="form-group">
                                    <label>Option A</label>
                                    <input type="text" name="a" id="a" class="form-control" placeholder="Enter Option A">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Option B</label>
                                    <input type="text" name="b" id="b" class="form-control" placeholder="Enter Option B">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Option C</label>
                                    <input type="text" name="c" id="c" class="form-control" placeholder="Enter Option C">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Option D</label>
                                    <input type="text" name="d" id="d" class="form-control" placeholder="Enter Option D">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Correct Answer</label>
                                   <select  class="form-control" name="ans" id="ans" required>
                                       <option value="Option A">Option A</option>
                                       <option value="Option B">Option B</option>
                                        <option value="Option C">Option C</option>
                                         <option value="Option D">Option D</option>
                                   </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Start Date/Time</label>
                                    <input type="date" name="sdate" id="sdate" class="form-control" required>
                                    
                                </div>
                                 <div class="form-group">
                                    <label>End Date/Time</label>
                                    <input type="date" name="edate" id="edate" class="form-control" required>
                                    
                                </div>

                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="updatedata" class="btn btn-primary">Update Question</button>
                                      </div>
                                </form>
                                
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

        <script>
            $(document).ready(function(){
                $('.editbtn').on('click',function() {
                    $('#editmodal').modal('show');

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function() {
                            return $(this).text();
                        }).get();

                        console.log(data);
                        $('#class').val(data[0]);
                        $('#subject_name').val(data[1]);
                        $('#question').val(data[3]);
                        $('#a').val(data[3]);
                        $('#b').val(data[4]);
                        $('#c').val(data[5]); 
                        $('#d').val(data[6]);
                        $('#ans').val(data[7]);
                        $('#sdate').val(data[8]);
                        $('#edate').val(data[9]);

                });

            });
        </script>

				
	<?php include "footer.php"; ?>