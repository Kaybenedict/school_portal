<?php 

ob_start();
// session variable is not found




?>

    <?php include "header.php"; ?>




    <?php 


    









     ?>

     <?php 
      if (isset($_GET['page'])) {
        $page=$_GET['page'];

      }else{
        $page=1;
      }


      $num_per_page =03;
      $start_from = ($page-1)*03;
      

      $query="SELECT * FROM course LIMIT $start_from,$num_per_page";
      $result=mysqli_query($conn,$query);
  ?>

    
 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
 
                            <div class="card-body">
                                <h2 class="text-center text-white bg-primary">STUDENT COURSE MATERIALS</h2>
                    <div align="right">
                        
                    </div>
                    <table class="table table-bordered table-success" id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sr</th>
                                <th>Class</th>
                                <th>Session</th>
                                <th>Subject</th>
                                <th>Course Materials</th>
                                <th>Download</th>
                                
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php 
                                $course = "SELECT * FROM course ORDER BY class DESC";
                                $run_course = mysqli_query($conn,$course);
                                $total_record= mysqli_num_rows($run_course);
                                $total_page = ceil($total_record/$num_per_page);
                                if($page>1){
                                echo "<a href='course1.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";

                              }

                              for($i=1;$i<$total_page;$i++)
                              {
                                echo "<a href='course1.php?page=".$i."' class='btn btn-primary'>$i</a>";
                              }


                               if($i>$page){
                                echo "<a href='course1.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";

                              }
                                $i=0;

                                while ($rowcourse = mysqli_fetch_array($run_course)): {
                                    $id = $rowcourse['id'];
                                    $class = $rowcourse['class'];
                                    $session = $rowcourse['session'];
                                    $subject = $rowcourse['subject'];
                                    $course_material = $rowcourse['course_material'];
                                    
                                    
                                    $i++;

                                    //$gallery_image = $rowstudent['gallery_image'];

                                  ?>


                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo ucfirst($class); ?></td>
                                    <td><?php echo $session; ?></td>
                                    <td><?php echo $subject; ?></td>
                                    <td><?php echo $course_material; ?></td>
                                    <td><button class="btn btn-primary">Download</button></td>
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
 <?php 
    function pre_r($array) {
      echo '<pre>';
      print_r($array);
      echo '</pre>';
    }


   ?>

                
    <?php include "footer.php"; ?>