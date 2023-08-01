 <?php include "db.php"; ?>
 

<?php 
    if (isset($_POST['insertdata'])) {
        $class = $_POST['class'];
        $number = $_POST['number'];
        $subject_name = $_POST['subject_name'];
        $question = $_POST['question'];
        $opt_a = $_POST['a'];
        $opt_b = $_POST['b'];
        $opt_c = $_POST['c'];
        $opt_d = $_POST['d'];
        $ans = $_POST['ans'];
        $sdate = $_POST['sdate'];
        $edate = $_POST['edate'];
       
        
        $insert_fee= "INSERT INTO question (class,number,subject_name,question,a,b,c,d,ans,sdate,edate) VALUES ('$class','$number','$subject_name','$question','$opt_a','$opt_b','$opt_c','$opt_d','$ans','$sdate','$edate')";
        $insert_pro=mysqli_query($conn,$insert_fee);
        if ($insert_pro) {
            echo "<script>alert('Welcome,Question Inserted Successfully')</script>";
            echo "<script>window.open('addexam.php', '_self')</script>";
        }
    }











    if (isset($_POST['add_note'])) {
        $subject = $_POST['subject'];
        $class = $_POST['class'];
        $notes = $_POST['notes'];
        $date = $_POST['date'];
        
       
        
        $insert_note= "INSERT INTO note (subject,class,notes,date) VALUES ('$subject','$class','$notes','$date')";
        $insert_pro1=mysqli_query($conn,$insert_note);
        if ($insert_pro1) {
            echo "<script>alert('Welcome,Note Inserted Successfully')</script>";
            echo "<script>window.open('addnote.php', '_self')</script>";
        }
    }


    if (isset($_GET['del'])) {
        $del_id=$_GET['del'];

        $del_query = "DELETE FROM note WHERE id ='$del_id' ";
        $del_run = mysqli_query($conn,$del_query);
        if ($del_run) {

            echo "<script>alert('You Have Deleted Successfully')</script>";
            echo "<script>window.open('addnote.php', '_self')</script>";
            # code...
        }
}

if (isset($_POST['add_ass'])) {
        $subject = $_POST['subject'];
        $class = $_POST['class'];
        $ass = $_POST['ass'];
        $date = $_POST['date'];
        
       
       
        
        $insert_fee= "INSERT INTO assignment (subject,class,ass,date) VALUES ('$subject','$class','$ass','$date')";
        $insert_pro=mysqli_query($conn,$insert_fee);
        if ($insert_pro) {
            echo "<script>alert('Welcome,Assignment Inserted Successfully')</script>";
            echo "<script>window.open('assignment.php', '_self')</script>";
        }
    }

 ?>