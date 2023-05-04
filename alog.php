<form method="Post">
	<input type="" name="user">
	<input type="" name="password">

	<button type="submit" name="log">Submit</button>
</form>

<?php 


if (isset($_POST['log'])) {


	$USER = $_POST['user'];
	$PW = $_POST['password'];


	$sql = "SELECT * from User WHERE Username = '$USER' AND Password = '$PW' ";

	$result = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($result);

	if ($count == 1) {
		header('Location:Home.php');
		# code...
	}
	else{

header("Location:alog.php");

}
}



?>