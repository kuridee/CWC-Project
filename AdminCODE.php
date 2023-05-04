<?php


include'connection.php';

if (isset($_POST['adminsub'])) {

$user = $_POST['email'];
$pw = $_POST['pass'];



$sql = "SELECT * from Useradmin WHERE Username = '$user' AND Password = '$pw' ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);


if ($count == 1) {
	header("Location:Admin_View.php");

}
else{

header("Location:Admin_Login.php");
}

}
mysqli_close($conn);

?>