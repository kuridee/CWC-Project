

<?php 


include 'connection.php';

$id = $_GET['id'];

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



$sql = "SELECT * FROM 1990REGISTER WHERE  id = $id LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<head>
<link rel="stylesheet" href="bootstrap341/css/bootstrap.min.css">
 
 <script src="bootstrap341/js/bootstrap.min.js"></script>

</head>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        



<form method="Post">	

		<label for="Firstname">Firstname</label>
		<input type="" name="fname" value="<?php  echo $row['Firstname'] ?>"><br>


		<label for="Lastname">Lastname</label>
		<input type="" name="lname" value="<?php  echo $row['Lastname'] ?>" ><br>

	

	<label>Address</label>
	<input type="" name="address" class="form-control" value="<?php  echo $row['Address'] ?>"><br>

	

	<label>Year Graduated</label>
	<input type="" name="grad" class="form-control" value="<?php  echo $row['Year'] ?>"><br>

	<label>Course</label>
	<input type="" name="course" class="form-control" value="<?php  echo $row['Course'] ?>"><br>



	<label>Semester</label>
	<input type="" name="sem" class="form-control"><br>


	
	<label>Course No.</label>
	<input type="" name="cno" class="form-control"><br>



	<label>Descriptive Title</label>
	<input type="" name="descript" class="form-control"><br>

	<label>Units</label>
	<input type="" name="units" class="form-control"><br>
	<label>Pre-Requisites</label>
	<input type="" name="pre" class="form-control"><br>


	<label>Grade</label>
	<input type="" name="grade"class="form-control"><br>


	<label>Remarks</label>
	<input type="" name="rm" class="form-control"><br>


	<button type="submit" name="sub" class="btn-design2">Save</button>


</form>



      </div>
      <div class="modal-footer">
       


       
      </div>
    </div>
  </div>
</div>






<a href="1990FORMAT.php">back</a>









