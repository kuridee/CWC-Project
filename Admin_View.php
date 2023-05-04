

<header>
	
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">

	<script src="jquery/query.js"></script>


<style type="text/css">
	
  .my-custom-scrollbar {
				position: relative;
				height: 400px;
				width: 1120px;
				overflow: auto;

}

.main {

	display: grid;
	grid-template-columns: repeat(5, 1fr);
	grid-template-rows: 180px 70px;
	grid-gap: 25px;
	}

.box{
	
	background-color: ghostwhite;
	border: 1px solid gray;
	text-align: center;
	padding-top: 30px;
	box-shadow:  0 10px 50px #efefef;

}

.content{
	margin-top: 80px;
	margin-bottom: 40px;
	margin-left: 20px;
}
.box:hover{
	border-color: red;
}


img:hover {
  transform: scale(1.2); 
}

</style>


</header>

<div class="container-fluid">
		<div class="row content">
			
			<div class="col-sm-12">
				<a href="Login.php">Logout</a>
				<p style="font-weight: bold; font-size: 50px;">FILED REQUEST SECTION</p>
				
				
			</div>
		</div>

</div>


<div class="container">
	
<div class="row">


	<div class="col-sm-12 main">

		<div class="box">
<img src="Pictures/enrol3.png" style="max-width:100%; height: 80px; width: 80px; transition: transform .2s;"><br>
		<a href="Enrollment_view.php" style="color:black; text-decoration: none;">Enrollment Summary</a>

		</div>
		<div class="box">


		<img src="Pictures/Re.png" style="max-width:100%; height: 80px; width: 80px; transition: transform .2s;"><br>
		<a href="Tor_view.php" style="color:black; text-decoration: none;">TOR Request</a>
		</div>
		<div class="box">

		<img src="Pictures/dip.png" style="max-width:100%; height: 80px; width: 80px; transition: transform .2s;"><br>
		<a href="Diploma_view.php" style="color:black; text-decoration: none;">DIPLOMA Request</a>
		</div>


		<div class="box">
			
		<img src="Pictures/dis.png" style="max-width:100%; height: 80px; width: 80px; transition: transform .2s;"><br>
		<a href="Dismissal_view.php" style="color:black; text-decoration: none;">DISMISSAL Request</a>


		</div>
		<div class="box">
			
		<img src="Pictures/good.png" style="max-width:100%; height: 80px; width: 80px; transition: transform .2s;"><br>
		<a href="Moral_view.php" style="color:black; text-decoration: none;">GOOD MORAL Request</a>


		</div>








	</div>
	
</div>
</div>







