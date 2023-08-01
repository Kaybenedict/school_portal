<?php 

include('db.php');
if (isset($_POST['update'])) {


 		$id = $_POST['update_id'];


        $session = $_POST['session'];
        $term = $_POST['term'];
        $subject= $_POST['subject'];
        $class=$_POST['class'];
        $chapter=$_POST['chapter'];
        $syllabus=$_POST['syllabus'];

        $update = "UPDATE syllabus SET 
        session = '$session',
        term = '$term',
        subject = '$subject',
        class = '$class',
        chapter = '$chapter',
        syllabus = '$syllabus'
        WHERE id='$id' 

        ";
        $insert_pro=mysqli_query($conn,$update);
        if ($insert_pro) {
            echo "<script>alert('Welcome,Syllabus Updated Successfully')</script>";
            echo "<script>window.open('ad.php', '_self')</script>";
        }
    }


 ?>