<?php 
include("db.php");

if (isset($_POST['submit'])) {
		$staffname = $_POST['staffname'];
        $session = $_POST['session'];
        $term = $_POST['term'];
        $subject = $_POST['subject'];
        $class = $_POST['class'];
        $course_material = $_POST['course_material'];


        $insert_syllabus= "INSERT INTO course (staffname,session,term,subject,class,course_material) VALUES ('$staffname','$session','$term','$subject','$class','$course_material')";
        $insert_pro=mysqli_query($conn,$insert_syllabus);
        if ($insert_pro) {
            echo "<script>alert('Welcome, You just added new data')</script>";
            echo "<script>window.open('course.php', '_self')</script>";
        }else{
        	echo "<script>alert('Error,No data added')</script>";
        }
    }

 ?>