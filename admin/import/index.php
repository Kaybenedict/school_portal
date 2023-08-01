<?php 

if (isset($_POST['submit'])) {
	$session = $_POST['session'];
	$term = $_POST['term'];
	$class = $_POST['class'];
	$subject = $_POST['subject'];

	$file = $_FILES['doc']['tmp_name'];
	$ext=pathinfo($_FILES['doc']['name'],PATHINFO_EXTENSION);

	if($ext=='xlsx'){
		require_once('PHPExcel/PHPExcel.php');
		require('PHPExcel/PHPExcel/IOFactory.php');
		

		$obj=PHPExcel_IOFactory::load($file);
		foreach ($obj->getWorksheetIterator() as $sheet) {
			$getHighestRow=$sheet->getHighestRow();
			for($i=0;$i<=$getHighestRow;$i++){

				$student_id=$sheet->getCellByColumnAndRow(0,$i)->getValue();
				$ca1=$sheet->getCellByColumnAndRow(1,$i)->getValue();
				$ca2=$sheet->getCellByColumnAndRow(2,$i)->getValue();
				$ca3=$sheet->getCellByColumnAndRow(3,$i)->getValue();
				$exam=$sheet->getCellByColumnAndRow(4,$i)->getValue();
				$total=$sheet->getCellByColumnAndRow(5,$i)->getValue();
				$grade=$sheet->getCellByColumnAndRow(6,$i)->getValue();
				

				if($student_id!=''){
					mysqli_query($conn,"INSERT INTO result(session,term,class,subject,student_id,ca1,ca2,ca3,exam,total,grade) VALUES('$session','$term','$class','$subject','$student_id','$ca1','$ca2','$ca3','$exam','$total','$grade')");
					echo "<script>alert('Result Uploaded Successfully')</script>";
					echo "<script>window.open('viewresult.php', '_self')</script>";

				}


				



			}
		}
}else{
	echo "INVALID FILE FORMAT";
}
	
}





 ?>

 