

 <form method="post" enctype="multipart/form-data">
 	<input type="file" name="doc">
 	<input type="submit" name="submit">
 </form>


<?php 

if (isset($_POST['submit'])) {
	echo '<prev>';
	print_r($_FILES);
}





 ?>