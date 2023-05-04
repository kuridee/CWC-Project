
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 

include 'connection.php';

if (isset($_POST['sub'])) {
	
	$FIRSTNAME = $_POST['fname'];
	$LASTNAME = $_POST['lname'];
	$EMAIL = $_POST['email'];
	$PASSWORD = $_POST['pass'];


	//SELECT QUERY
	$sql_u = "SELECT * FROM User WHERE Username = '$EMAIL'";
	$sql_p = "SELECT * FROM User WHERE Password = '$PASSWORD'";


	$res_u = mysqli_query($conn,$sql_u);

	$res_p = mysqli_query($conn,$sql_p);


	//IF ELSE STATEMENT

	if (mysqli_num_rows($res_u) > 0) {

		echo '<script type ="text/JavaScript">';  
		echo 'Swal.fire("This username is taken.!", "Please try again!", "warning");'; 
		echo '</script>'; 
		
	} else if (mysqli_num_rows($res_p) > 0) {
		
		echo '<script type ="text/JavaScript">';  
		echo 'Swal.fire("This password is taken.!", "Please try again!", "warning");';  
		echo '</script>'; 

	} else{


		$sql =  "INSERT INTO User (Firstname, Lastname, Username, Password) VALUES ('$FIRSTNAME', '$LASTNAME', '$EMAIL', '$PASSWORD')";
		mysqli_query($conn, $sql);

				echo '<script type ="text/JavaScript">';  
				echo 'Swal.fire({
					title: "Successfully Created your Account",
					text: "Thank you!",
					type:"success"
				}).then(function() {
					window.location = "Login.php";
				});'; 
				echo '</script>';


	}	
}
	mysqli_close($conn);

?>