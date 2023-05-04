

<header>
	
<head>

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/js/bootstrap.min.js">

	<script src="jquery/query.js"></script>


<style type="text/css">
	
	.setup{

		margin: 20px;
		margin-top: 50px;
	}
 


</style>


</header>

<div class="container-fluid">
		<div class="row setup">
			
			<div class="col-sm-12">
				<p style="font-weight: bold; font-size: 50px;">GOOD MORAL REQUEST</p>
				<br>
				
				
			</div>
		</div>

</div>


<div class="container-fluid">
	
<div class="row">


	<div class="col-sm-12 adjust">


				<p id="formButton" style="font-weight: bold">Request Details</p>
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
$display = "SELECT * FROM Moral ORDER BY id DESC";
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

						<a href="Moral_delete.php?id=<?php  echo $row["id"]?>">Done</a>
						
					</td>
					
		</tr>

	<?php } ?>
	</tbody>

</table>

</div>
<a href="Admin_View.php">Back</a>

	</div>
	
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



