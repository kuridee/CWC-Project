

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 


//TOR CODE

include 'connection.php';

$msg = "";


if (isset($_POST['subtor'])) {
	

	$FIRSTNAME = $_POST['fname'];
	$LASTNAME = $_POST['lname'];
	$DOC = $_POST['doc'];
	$DATE = $_POST['date'];
	$COURSE = $_POST['course'];
	$EMAIL = $_POST['email'];
	$CONTACT = $_POST['contact'];
	$MODE = $_POST['mode'];
	$AMOUNT = $_POST['amount'];
	$REF = $_POST['ref'];


	$image = $_FILES['image']['name'];
	$tempname = $FILES['image']['tmp_name'];

	$target = "images/".basename($image);

	$sql =  "INSERT INTO Tor (Firstname, Lastname, Doc, Date, Course, Email, Contact,
Mode, Amount,Ref, Image ) VALUES ('$FIRSTNAME', '$LASTNAME', '$DOC', '$DATE', '$COURSE', 
'$EMAIL', '$CONTACT', '$MODE', '$AMOUNT', '$REF', '$image')";
		mysqli_query($conn, $sql);



echo '<script type ="text/JavaScript">';  
				echo 'Swal.fire({
					title: "Your Request has been processed.",
					text: "Please wait 3 to 5 days to claim your documents. We will send an email or a text message. Thank you.",
					type:"success"
				})'; 
				echo '</script>';

		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}
else
{
	$msg = "Sorry there's a problem";
}
mysqli_close($conn);
}



// Code for Diploma


if (isset($_POST['subdiploma'])) {
	

	$FIRSTNAME = $_POST['fname'];
	$LASTNAME = $_POST['lname'];
	$DOC = $_POST['doc'];
	$DATE = $_POST['date'];
	$COURSE = $_POST['course'];
	$EMAIL = $_POST['email'];
	$CONTACT = $_POST['contact'];
	$MODE = $_POST['mode'];
	$AMOUNT = $_POST['amount'];
	$REF = $_POST['ref'];


	$image = $_FILES['image']['name'];
	$tempname = $FILES['image']['tmp_name'];

	$target = "images/".basename($image);

	$sql =  "INSERT INTO Diploma (Firstname, Lastname, Doc, Date, Course, Email, Contact,
Mode, Amount,Ref, Image ) VALUES ('$FIRSTNAME', '$LASTNAME', '$DOC', '$DATE', '$COURSE', 
'$EMAIL', '$CONTACT', '$MODE', '$AMOUNT', '$REF', '$image')";
		mysqli_query($conn, $sql);


		
			echo '<script type ="text/JavaScript">';  
				echo 'Swal.fire({
					title: "Your Request has been processed.",
					text: "Please wait 3 to 5 days to claim your documents. We will send an email or a text message. Thank you.",
					type:"success"
				})'; 
				echo '</script>';


		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}
else
{
	$msg = "Sorry there's a problem";
}
mysqli_close($conn);
}


// Good moral

if (isset($_POST['submoral'])) {
	

	$FIRSTNAME = $_POST['fname'];
	$LASTNAME = $_POST['lname'];
	$DOC = $_POST['doc'];
	$DATE = $_POST['date'];
	$COURSE = $_POST['course'];
	$EMAIL = $_POST['email'];
	$CONTACT = $_POST['contact'];
	$MODE = $_POST['mode'];
	$AMOUNT = $_POST['amount'];
	$REF = $_POST['ref'];


	$image = $_FILES['image']['name'];
	$tempname = $FILES['image']['tmp_name'];

	$target = "images/".basename($image);

	$sql =  "INSERT INTO Moral (Firstname, Lastname, Doc, Date, Course, Email, Contact,
Mode, Amount,Ref, Image ) VALUES ('$FIRSTNAME', '$LASTNAME', '$DOC', '$DATE', '$COURSE', 
'$EMAIL', '$CONTACT', '$MODE', '$AMOUNT', '$REF', '$image')";
		mysqli_query($conn, $sql);


		
				echo '<script type ="text/JavaScript">';  
				echo 'Swal.fire({
					title: "Your Request has been processed.",
					text: "Please wait 3 to 5 days to claim your documents. We will send an email or a text message. Thank you.",
					type:"success"
				})'; 
				echo '</script>';

		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}
else
{
	$msg = "Sorry there's a problem";
}
mysqli_close($conn);
}

// dismissal

if (isset($_POST['subdiss'])) {
	

	$FIRSTNAME = $_POST['fname'];
	$LASTNAME = $_POST['lname'];
	$DOC = $_POST['doc'];
	$DATE = $_POST['date'];
	$COURSE = $_POST['course'];
	$EMAIL = $_POST['email'];
	$CONTACT = $_POST['contact'];
	$MODE = $_POST['mode'];
	$AMOUNT = $_POST['amount'];
	$REF = $_POST['ref'];


	$image = $_FILES['image']['name'];
	$tempname = $FILES['image']['tmp_name'];

	$target = "images/".basename($image);

	$sql =  "INSERT INTO Dismissal (Firstname, Lastname, Doc,Date, Course, Email, Contact,
Mode, Amount,Ref, Image ) VALUES ('$FIRSTNAME', '$LASTNAME', '$DOC','$DATE', '$COURSE', 
'$EMAIL', '$CONTACT', '$MODE', '$AMOUNT', '$REF', '$image')";
		mysqli_query($conn, $sql);


		
				echo '<script type ="text/JavaScript">';  
				echo 'Swal.fire({
					title: "Your Request has been processed.",
					text: "Please wait 3 to 5 days to claim your documents. We will send an email or a text message. Thank you.",
					type:"success"
				})'; 
				echo '</script>';

		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}
else
{
	$msg = "Sorry there's a problem";
}
mysqli_close($conn);
}



// grades



if (isset($_POST['btngrade'])) {
	

	$FIRSTNAME = $_POST['fname'];
	$LASTNAME = $_POST['lname'];
	$DATE = $_POST['date'];
	$GRADES = $_POST['grades'];
	$COURSE = $_POST['course'];
	$EMAIL = $_POST['email'];
	$CONTACT = $_POST['contact'];
	$YEAR = $_POST['year'];
	


	$sql =  "INSERT INTO Grade (Firstname, Lastname, Date, Grades, Course, Email, Contact,
Year) VALUES ('$FIRSTNAME', '$LASTNAME', '$DATE', '$GRADES', '$COURSE', 
'$EMAIL', '$CONTACT', '$YEAR')";
		mysqli_query($conn, $sql);


		
			echo '<script type ="text/JavaScript">';  
				echo 'Swal.fire({
					title: "Your Request has been processed.",
					text: "Please wait 3 to 5 days to claim your documents. We will send an email or a text message. Thank you.",
					type:"success"
				})'; 
				echo '</script>';



mysqli_close($conn);
}



//Enrollment



if (isset($_POST['btnenroll'])) {
	

	$FIRSTNAME = $_POST['fname'];
	$LASTNAME = $_POST['lname'];
	$ADDRESS = $_POST['address'];
	$DATE = $_POST['date'];
	$EMAIL = $_POST['email'];
	$CONTACT = $_POST['contact'];
	$STATUS = $_POST['status'];
	$COURSE = $_POST['course'];
	$SEMESTER = $_POST['semester'];
	$MODE = $_POST['mode'];
	$AMOUNT = $_POST['amount'];
	$REF = $_POST['ref'];


	$image = $_FILES['image']['name'];
	$tempname = $FILES['image']['tmp_name'];

	$target = "images/".basename($image);

	$sql =  "INSERT INTO Enrollment (Firstname, Lastname, Address, Date ,Email, Contact, Status,Course,Semester, Mode, Amount,Ref, Image ) 
	VALUES ('$FIRSTNAME', '$LASTNAME', '$ADDRESS','$DATE', 
'$EMAIL', '$CONTACT', '$STATUS', '$COURSE', '$SEMESTER', '$MODE', '$AMOUNT', '$REF', '$image')";
		mysqli_query($conn, $sql);


		
		echo '<script type ="text/JavaScript">';  
				echo 'Swal.fire({
					title: "Thank you for trusting us.",
					text: "Please wait 3 to 5 days for processing. We will send an email or a text message for updates. Thank you.",
					type:"success"
				})'; 
				echo '</script>';



		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}
else
{
	$msg = "Sorry there's a problem";
}
mysqli_close($conn);
}





?>