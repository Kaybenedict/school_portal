<?php 
include("db.php");

if (isset($_POST['submit'])) {
		$name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $class = $_POST['class'];
        $former = $_POST['former'];

        $insert_syllabus= "INSERT INTO admission (name,email,mobile,class,former) VALUES ('$name','$email','$mobile','$class','$former')";
        $insert_pro=mysqli_query($conn,$insert_syllabus);
        if ($insert_pro) {
            echo "<script>window.open('makepayment.php', '_self')</script>";
        }
    }

 ?>