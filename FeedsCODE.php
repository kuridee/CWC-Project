<?php
include 'connection.php';

$msg = "";

if (isset($_POST['sub'])) {

	$image = $_FILES['image']['name'];
	$tempname = $FILES['image']['tmp_name'];
	$image_text = $_POST['text'];

	$target = "images/".basename($image);

	$sql = "INSERT INTO Feeds (Post, Image_text) VALUES ('$image', '$image_text')";
	mysqli_query($conn, $sql);

	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}
else
{
	$msg = "Sorry there's a problem";
}
}
mysqli_close($conn);

?>