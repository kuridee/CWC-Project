

<?php 

include_once 'connection.php';


if (isset($_POST['sub'])) {
	
$firstname = $_POST['fname'];
$lastname  =$_POST['lname'];
$add = $_POST['address'];

$yeargrad = $_POST['grad'];

$course = $_POST['course'];



$push = "INSERT INTO 1990REGISTER (Firstname, Lastname,Address,Year, Course) VALUES ('$firstname','$lastname','$add','$yeargrad','$course')";

mysqli_query($conn, $push);

mysqli_close($conn);
}


?>