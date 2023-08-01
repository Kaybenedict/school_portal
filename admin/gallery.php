	<?php include "header.php";

  

if (isset($_GET['del'])) {
    $del_id=$_GET['del'];

    $del_query="DELETE FROM gallery WHERE gallery_id ='$del_id' ";
    $del_run=mysqli_query($conn,$del_query);
    if ($del_run) {

        echo "<script>alert('You Have Deleted Successfully')</script>";
        echo "<script>window.open('gallery.php', '_self')</script>";
        # code...
    }
}


     ?>
 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-white bg-primary">View all images</h2>
                    <div align="right">
                        <a href="addgallery.php" class="btn btn-outline-primary">Add Images</a><hr>
                    </div>
                    <table class="table table-border" id="table2excel">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sr No</th>
                                <th>Image Title</th>
                                <th>Image</th>
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
                                $gallery = "SELECT * FROM gallery ORDER BY gallery_id DESC";
                                $rungallery=mysqli_query($conn,$gallery);
                                $i=0;

                                while($rowgallery = mysqli_fetch_array($rungallery)): {
                                    $gallery_id = $rowgallery['gallery_id'];
                                    $gallery_title = $rowgallery['gallery_title'];
                                    $gallery_image = $rowgallery['gallery_image'];
                                    $i++;

                                    $gallery_image = $rowgallery['gallery_image'];

                             ?>
                             <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo ucfirst($gallery_title); ?></td>
                            <td>
                                    
                                <img class="img-fluid" src="../images/gallery<?php echo $gallery_image; ?>" width="100px;">
                            </td>
                            <td>
                                <a class="btn btn-warning" href="editgallery.php?id=<?php echo $gallery_id; ?>"><i class="fa fa-pencil-square-o"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="gallery.php?del=<?php echo $gallery_id; ?>"><i class="fa fa-trash-o"></i></a>
                            </td>
                            </tr>

                            <?php 
                                }
                             ?>
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

    <script>
    $(document).ready(function(){
        $('#table2excel').DataTable();
    });
</script>