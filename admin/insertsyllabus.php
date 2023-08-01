<?php 
include("db.php");

if (isset($_POST['submit'])) {
		$staffname = $_POST['staffname'];
        $session = $_POST['session'];
        $term = $_POST['term'];
        $subject = $_POST['subject'];
        $class = $_POST['class'];
        $chapter = $_POST['chapter'];
        $syllabus = $_POST['syllabus'];


        $insert_syllabus= "INSERT INTO syllabus (staffname,session,term,subject,class,chapter,syllabus) VALUES ('$staffname','$session','$term','$subject','$class','$chapter','$syllabus')";
        $insert_pro=mysqli_query($conn,$insert_syllabus);
        if ($insert_pro) {
            echo "<script>alert('Welcome, You just added new syllabus')</script>";
            echo "<script>window.open('syllabus.php', '_self')</script>";

        }else{
        	echo "<script>alert('Error,No syllabu added')</script>";
        }
    }

 ?>