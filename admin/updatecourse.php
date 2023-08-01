<?php 

include('db.php');
if (isset($_POST['update'])) {


 		$id = $_POST['update_id'];


        $session = $_POST['session'];
        $term = $_POST['term'];
        $subject= $_POST['subject'];
        $class=$_POST['class'];
        
        $course_material=$_POST['course_material'];

        $update = "UPDATE course SET 
        session = '$session',
        term = '$term',
        subject = '$subject',
        class = '$class',
        course_material = '$course_material'
        WHERE id='$id' 

        ";
        $insert_pro=mysqli_query($conn,$update);
        if ($insert_pro) {
            echo "<script>alert('Welcome,Data Updated Successfully')</script>";
            echo "<script>window.open('course.php', '_self')</script>";
        }
    }


 ?>