


<?php 
include 'connection.php';

$msg = "";

if (isset($_POST['upload'])) {

	$image = $_FILES['image']['name'];
	$tempname = $FILES['image']['tmp_name'];
	$image_text = $_POST['text'];

	$target = "images/".basename($image);

	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
	mysqli_query($conn, $sql);

	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}
else
{
	$msg = "Sorry there's a problem";
}
}

?>

<!DOCTYPE html>
<html>
<body>
<?php 

include 'connection.php';

$display = "SELECT * FROM images";

$result = mysqli_query($conn, $display);
while ($row = mysqli_fetch_array($result)) {

	echo "<div>";
	echo "<img src= 'images/" .$row['image']."' >";
}


?>

<form action="Upload.php" method="Post" enctype="multipart/form-data">
  Select image to upload:

  <input type="hidden" name="size" value="1000000">
  <input type="file" name="image">
  <input type="" name="text">
  <input type="submit" value="Upload Image" name="upload">
</form>

</body>
</html>


