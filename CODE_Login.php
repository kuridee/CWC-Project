
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php


include'connection.php';

if (isset($_POST['sub'])) {

$user = $_POST['email'];
$pw = $_POST['pass'];



$sql = "SELECT * from User WHERE Username = '$user' AND Password = '$pw' ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);


if ($count == 1) {
 
	echo '<script type ="text/JavaScript">';  
	echo 'Swal.fire({
		title: "Successfully login",
		text: "Click to continue!",
		type:"success"
	}).then(function() {
		window.location = "Home.php";
	});'; 
	echo '</script>';


}
else{

echo '<script type ="text/JavaScript">';  
	echo 'Swal.fire({
		title: "Wrong username/password",
		text: "Please try again.",
		type:"warning"
	}).then(function() {
		window.location = "Login.php";
	});'; 
	echo '</script>';







}

}
mysqli_close($conn);

?>