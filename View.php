<form method="Post" action ="View.php">
	
	<label>Enter Firstname</label><br>
	<input type="" name="search">

	<button type="submit" name= "sub">Search</button>
	
</form>

<table>

	<table>

	<tr>

		<th>ID</th>
		<th scope="row">Firstname</th>
		<th scope="row">Lastname</th>
		<th scope="row">Address</th>
		<th scope="row">Year Graduated</th>
		<th scope="row">Course</th>
		<th scope="row">Semester</th>
		<th scope="row">Course No.</th>
		<th scope="row">Description</th>
		<th scope="row">Units</th>
		<th scope="row">Pre-Requisites</th>
		<th scope="row">Grade</th>
		<th scope="row">Remarks</th>

	</tr>


	<!-- Display records to a table-->
	<tbody>

		<?php
		include 'connection.php'; 


if (isset($_POST['sub'])) {
	
	$s = $_POST['search'];

$display = "SELECT * FROM YEAR1990 WHERE Firstname LIKE '%$s%' UNION SELECT *  FROM YEAR1991 WHERE Firstname LIKE '%$s%'";

$data = $conn->query($display);
	while ($row = $data->fetch_assoc()) 

	{

		?>
		<tr>

					<td><?php  echo $row['id']?></td>
					<td><?php  echo $row['Firstname']?></td>
					<td><?php  echo $row['Lastname']?></td>
					<td><?php  echo $row['Address']?></td>
					<td><?php  echo $row['Year']?></td>
					<td><?php  echo $row['Course']?></td>
					<td><?php  echo $row['Semester']?></td>
					<td><?php  echo $row['CourseNumber']?></td>
					<td><?php  echo $row['Description']?></td>
					<td><?php  echo $row['Units']?></td>
					<td><?php  echo $row['Prequisites']?></td>
					<td><?php  echo $row['Grade']?></td>
					<td><?php  echo $row['Remarks']?></td>


					<td>

					<a href="" >EDIT</a>
						<a href="">DELETE</a>

					</td>


		</tr>

	<?php }}


else{

	
}





	 ?>
	</tbody>

</table>

	



</table>






<!--
<?php 

$output = '';

if (isset($_POST['search'])) {
	
	$s = $_POST['search'];

	$query = mysqli_query ($conn, "SELECT * FROM YEAR1990 WHERE Firstname LIKE '%$s%'") or die("nothing");

	if($count==0){
      $output = "There was no search results!";

    }else{

      while ($row = mysqli_fetch_array($query)) {

        $town = $row ['Firstname'];
        $street = $row ['Lastname'];
        $bedrooms = $row ['Address'];
        $bathroom = $row ['Year'];

        $output .='<div> '.$town.''.$street.''.$bedrooms.''.$bathrooms.'</div>';

      }

    }
}


?>

-->