<?php 

include('db.php');

 if (isset($_POST['updatedata'])) {


 		$id = $_POST['id'];
        $class = $_POST['class'];
        $subject_name = $_POST['subject_name'];
        $question = $_POST['question'];
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        $d=$_POST['d'];
        $ans=$_POST['ans'];
        $sdate=$_POST['sdate'];
        $edate=$_POST['edate'];

        $update = "UPDATE question SET 
        class = '$class',
        subject_name = '$subject_name',
        question = '$question',
        a = '$a',
        b = '$b',
        c = '$c',
        d = '$d',
        ans = '$ans',
        sdate = '$sdate',
        edate = '$edate'
        WHERE id='$id';

        ";
        $insert_pro=mysqli_query($conn,$update);
        if ($insert_pro) {
            echo "<script>alert('Welcome,Question Updated Successfully')</script>";
            echo "<script>window.open('addexam.php', '_self')</script>";
        }
    }

 ?>