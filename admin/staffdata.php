<?php include "header.php";

            include('db.php');


    $get_staff = "SELECT * FROM staff WHERE username = '$user_name' ";
    
    $run_staff = mysqli_query($conn,$get_staff);
    $data = mysqli_fetch_array($run_staff);

    $_SESSION['staffname'] = $data["staffname"];
    

   // $check = mysqli_num_rows($run_user);
    //if($check == !''){
     // $_SESSION['user_cate'] = $datarow["user_cate"];
     //?>