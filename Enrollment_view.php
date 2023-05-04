

<header>
	
<head>

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/js/bootstrap.min.js">

	<script src="jquery/query.js"></script>


<style type="text/css">

	.setup{

		margin: 20px;
		margin-top: 40px;
	}
 


</style>


</header>

<div class="container-fluid">
		<div class="row setup">
			
			<div class="col-sm-12">
				<p style="font-weight: bold; font-size: 50px;">ENROLLMENT SUMMARY</p>
				<br>
				<a href="Admin_View.php">Back</a>
				
				
			</div>
		</div>

</div>


<div class="container-fluid">
	
<div class="row">


	<div class="col-sm-12 adjust">


				<p id="formButton" style="font-weight: bold">Enrollment Details</p>
	<!-- Table of enrollment-->

 <div class="table-wrapper-scroll-y my-custom-scrollbar"> 
	<table class="table table-bordered table-striped" id="form1">

	<tr>

		<th>ID</th>
		<th scope="row">Firstname</th>
		<th scope="row">Lastname</th>
		<th scope="row">Address</th>
		<th scope="row">Date</th>

		<th scope="row">Email</th>
		<th scope="row">Contacts</th>
		<th scope="row">Status</th>

		<th scope="row">Course</th>
		<th scope="row">Semester</th>
		
		<th scope="row">Mode</th>
		<th scope="row">Amount</th>
		<th scope="row">References</th>
		<th scope="row">File</th>
		<th>OPERATION</th>
		
	</tr>

	<!-- Display records to a table-->
	<tbody>

		<?php
		include 'connection.php'; 
$display = "SELECT * FROM Enrollment ORDER BY id DESC";
$data = $conn->query($display);
$all = mysqli_num_rows($data);


$new = "SELECT * FROM Enrollment  WHERE status = 'new' ORDER BY id DESC";
$datanew = $conn->query($new);
$allnew = mysqli_num_rows($datanew);


$old = "SELECT * FROM Enrollment  WHERE status = 'old' ORDER BY id DESC";
$dataold = $conn->query($old);
$allold = mysqli_num_rows($dataold);



	while ($row = $data->fetch_assoc()) 

	{

		?>
		<tr>
					<td><?php  echo $row['id']?></td>
					<td><?php  echo $row['Firstname']?></td>
					<td><?php  echo $row['Lastname']?></td>
					<td><?php  echo $row['Address']?></td>
					<td><?php  echo $row['Date']?></td>
					<td><?php  echo $row['Email']?></td>
					<td><?php  echo $row['Contact']?></td>
					<td><?php  echo $row['Status']?></td>
					<td><?php  echo $row['Course']?></td>
					<td><?php  echo $row['Semester']?></td>
					<td><?php  echo $row['Mode']?></td>
					<td><?php  echo $row['Amount']?></td>
					<td><?php  echo $row['Ref']?></td>
					<td><?php  echo $row['Image']?></td>

					<td>

						<a href="">Done</a>
						
					</td>
					
		</tr>

	<?php } ?>
	</tbody>

</table>

<div class="row">
		<div class="content" style="font-weight: bold;">OVERALL Total Student: <?php  echo "$all"?> </div>
		<div class="content" style="font-weight: bold;">Total New Student: <?php  echo "$allnew"?></div>
		<div class="conntent" style="font-weight: bold;"> Total Old Student: <?php  echo "$allold"?></div>
</div>



</div>

	</div>
	
</div>
</div>



<div class="container-fluid">
	<div class="row adjust">

		<p style="font-size: 20px; font-weight: bold;">New Student</p>


		<div class="table-wrapper-scroll-y my-custom-scrollbar"> 
	<table class="table table-bordered table-striped" id="form1">

	<tr>

		<th>ID</th>
		<th scope="row">Firstname</th>
		<th scope="row">Lastname</th>
		<th scope="row">Address</th>
		<th scope="row">Date</th>

		<th scope="row">Email</th>
		<th scope="row">Contacts</th>
		<th scope="row">Status</th>

		<th scope="row">Course</th>
		<th scope="row">Semester</th>
		
		<th scope="row">Mode</th>
		<th scope="row">Amount</th>
		<th scope="row">References</th>
		<th scope="row">File</th>
		<th>OPERATION</th>
		
	</tr>

	<!-- Display records to a table-->
	<tbody>

		<?php
		include 'connection.php'; 
$display = "SELECT * FROM Enrollment  WHERE status = 'new' ORDER BY id DESC";
$data = $conn->query($display);
	while ($row = $data->fetch_assoc()) 

	{

		?>
		<tr>
					<td><?php  echo $row['id']?></td>
					<td><?php  echo $row['Firstname']?></td>
					<td><?php  echo $row['Lastname']?></td>
					<td><?php  echo $row['Address']?></td>
					<td><?php  echo $row['Date']?></td>
					<td><?php  echo $row['Email']?></td>
					<td><?php  echo $row['Contact']?></td>
					<td><?php  echo $row['Status']?></td>
					<td><?php  echo $row['Course']?></td>
					<td><?php  echo $row['Semester']?></td>
					<td><?php  echo $row['Mode']?></td>
					<td><?php  echo $row['Amount']?></td>
					<td><?php  echo $row['Ref']?></td>
					<td><?php  echo $row['Image']?></td>

					<td>

						<a href="">Done</a>
						
					</td>
					
		</tr>

	<?php } ?>
	</tbody>

</table>
	
	</div>
</div>


<div class="container-fluid">
	<div class="row adjust">

		<p style="font-size: 20px; font-weight: bold;">Old Student</p>
	<div class="table-wrapper-scroll-y my-custom-scrollbar"> 
	<table class="table table-bordered table-striped" id="form1">

	<tr>

		<th>ID</th>
		<th scope="row">Firstname</th>
		<th scope="row">Lastname</th>
		<th scope="row">Address</th>
		<th scope="row">Date</th>

		<th scope="row">Email</th>
		<th scope="row">Contacts</th>
		<th scope="row">Status</th>

		<th scope="row">Course</th>
		<th scope="row">Semester</th>
		
		<th scope="row">Mode</th>
		<th scope="row">Amount</th>
		<th scope="row">References</th>
		<th scope="row">File</th>
		<th>OPERATION</th>
		
	</tr>

	<!-- Display records to a table-->
	<tbody>

		<?php
		include 'connection.php'; 
$display = "SELECT * FROM Enrollment  WHERE status = 'old' ORDER BY id DESC";
$data = $conn->query($display);
	while ($row = $data->fetch_assoc()) 

	{

		?>
		<tr>
					<td><?php  echo $row['id']?></td>
					<td><?php  echo $row['Firstname']?></td>
					<td><?php  echo $row['Lastname']?></td>
					<td><?php  echo $row['Address']?></td>
					<td><?php  echo $row['Date']?></td>
					<td><?php  echo $row['Email']?></td>
					<td><?php  echo $row['Contact']?></td>
					<td><?php  echo $row['Status']?></td>
					<td><?php  echo $row['Course']?></td>
					<td><?php  echo $row['Semester']?></td>
					<td><?php  echo $row['Mode']?></td>
					<td><?php  echo $row['Amount']?></td>
					<td><?php  echo $row['Ref']?></td>
					<td><?php  echo $row['Image']?></td>

					<td>

						<a href="">Done</a>
						
					</td>
					
		</tr>

	<?php } ?>
	</tbody>

</table>




	
	</div>
</div>





<style>
	table{
				font-size: 11px;

	}

	.adjust{
		padding: 40px;
	}
</style>


