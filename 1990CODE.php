

<?php 

include_once 'connection.php';


if (isset($_POST['sub'])) {
	
$firstname = $_POST['fname'];
$lastname  =$_POST['lname'];
$add = $_POST['address'];

$yeargrad = $_POST['grad'];

$course = $_POST['course'];
$semester = $_POST['sem'];
$courno = $_POST['cno'];
$description =$_POST['descript'];
$units = $_POST['units'];
$prequisites = $_POST['pre'];
$grade = $_POST['grade'];
$remarks = $_POST['rm'];


$push = "INSERT INTO YEAR1990 (Firstname, Lastname,Address,Year, Course, Semester,CourseNumber, Description, Units, Prequisites,Grade, Remarks) VALUES ('$firstname','$lastname','$add','$yeargrad','$course','$semester','$courno','$description','$units','$prequisites','$grade','$remarks')";

mysqli_query($conn, $push);

mysqli_close($conn);
}


?>