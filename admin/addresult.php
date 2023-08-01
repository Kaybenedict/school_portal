<?php 
	include('header.php');

	echo $uploadfile=$_FILES['uploadfile']['tmp_name'];
	

	require 'PHPExcel/Classes/PHPExcel.php';
	require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';

	$objExcel =PHPExcel_IOFactory::load($uploadfile);
	foreach ($objExcel->getWorksheetIterator() as $worksheet) {
		echo $highestrow = $worksheet->getHighestRow();
	}

 ?>




<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="post"  enctype="multipart/form-data">
				<div class="form-group row">
				<label class="col-md-3">Select File</label>
				<div class="col-md-8">
				<input type="file" name="uploadfile" class="form-control">
			</div>
		</div>
				<div class="form-group row">
				<label class="col-md-3"></label>
				<div class="col-md-8">
				<input type="submit" name="submit" class="btn btn-primary">
			</div>
		</div>

			
				
			</form>
			
		</div>
		
	</div>
	
</div>













 <?php include('footer.php'); ?>