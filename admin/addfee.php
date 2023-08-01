<?php 

?>


    <?php include "header.php"; ?>
     
 

<?php 
    if (isset($_POST['submit'])) {
        $class = $_POST['class'];
        $fees = $_POST['fees'];
        $purpose = $_POST['purpose'];
        $date = $_POST['date'];
        $session = $_POST['session'];
        
        $insert_fee= "INSERT INTO fee (class,fees,purpose,session,date) VALUES ('$class','$fees','$purpose',$session,NOW())";
        $insert_pro=mysqli_query($conn,$insert_fee);
        if ($insert_pro) {
            echo "<script>alert('Welcome, You Just Added  New Fee')</script>";
            //echo "<script>window.open('viewfee.php', '_self')</script>";
        }
    }

 ?>
                

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                    <div class="col-12">
                        <div class="card">
                             <h4 class="card-title">School Fees Management Form</h4>
                                <h6 class="card-subtitle text-danger">   Please Enter Valid Term</h6>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Class</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="class" required>

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
                    </div>  
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Fee Amount</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Enter Fee Amount" name="fees" />
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Fee For</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter Fee Purpose" name="purpose" />
                            
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">SESSION</label>
                        <div class="col-sm-10">
                             <select class="form-control" name="session" required>

                                <?php
                                    $getsession = "SELECT * FROM session ";
                                    $run_session = mysqli_query($conn,$getsession);
                                    while ($rowsession=mysqli_fetch_array($run_session)) {
                                        $id = $rowsession['id'];
                                        $session= $rowsession['session'];

                                 ?>

                                 <option value="<?php echo $session; ?>"><?php echo $session;?></option>

                                <?php } ?>
                                 
                            </select>
                            
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Date Added</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" placeholder="yyyy-mm-dd" name="date" />
                            
                        </div>
                    </div>         
                    
                    <div class="form-group row mt-2">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-outline-primary w-100" name="submit">Submit</button>
                    
                        </div>
                    </div>
        
                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                            </div>
                        </div>
                    </div>
                </div>
               
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
                
            </div>
           
        </div><br><br><br><br><br><br>

                
    <?php include "footer.php"; ?>