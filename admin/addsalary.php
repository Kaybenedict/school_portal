<?php 

?>


    <?php include "header.php"; ?>
    
 

<?php 
    if (isset($_POST['submit'])) {
        $staff_name = $_POST['staff_name'];
        $salary = $_POST['salary'];
        
        $insert_staff= "INSERT INTO salary (staff_name,salary) VALUES ('$staff_name','$salary')";
        $insert_pro=mysqli_query($conn,$insert_staff);
        if ($insert_pro) {
            echo "<script>alert('Welcome, You Just Added a New Salary')</script>";
            echo "<script>window.open('viewsalary.php', '_self')</script>";
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
                             <h4 class="card-title">Salary Management Form</h4>
                                <h6 class="card-subtitle text-danger">   Please Enter Valid Term</h6>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Staff Name</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="staff_name" required>

                                <?php
                                    $getstaff = "SELECT * FROM staff ";
                                    $run_staff = mysqli_query($conn,$getstaff);
                                    while ($rowstaff=mysqli_fetch_array($run_staff)) {
                                        $id = $rowstaff['staff_id'];
                                        $staff_name = $rowstaff['staffname'];

                                 ?>

                                 <option value="<?php echo $staff_name; ?>"><?php echo $staff_name;?></option>

                                <?php } ?>
                                 
                            </select>

                            
                        </div>
                    </div>  
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-danger">Salary Amount</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Enter Salary Amount" name="salary" />
                            
                        </div>
                    </div>         
                    
                    <div class="form-group row mt-2">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-outline-primary w-100" name="submit">Add Salary</button>
                    
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