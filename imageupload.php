<?php 

if (isset($_POST['img_submit'])) {


	$img_name=$_FILES['img_upload']['name'];
	$tmp_img_name=$_FILES['img_upload']['tmp_name'];
	$folder = 'images/';
		move_uploaded_file($tmp_img_name, $folder.$img_name);

}


?>


<form action="" method="Post" enctype="multipart/form-data">

	<input type="file" name="img_upload"><br><br>
	<input type="submit" name="img_submit">

</form>