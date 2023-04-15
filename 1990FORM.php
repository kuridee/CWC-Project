<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<style>


	form{

	font-size: 10px;
	color: black;
	padding:0;
}
.form-control{

height: 20px;
width: 200px;
font-size: 10px;
}

.content2{
	margin-top: 10px;
	background-color: #f1f1f1;
}

.head{
	background-color:maroon; 
	height: 35px;
padding: 5px;
	font-size: 12px;
}

.headth{
background-color:#00203fff; 

}
.nav{
	background-color:#ffff; 

}
.nav-design{
	float: right;

}
.navbar-style{

	box-shadow:  0 5px 10px #efefef;

}


li a:hover, .dropdown:hover .dropbtn {
  background-color: #f1f1f1;

}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.form-format{

font-size: 10px;
}
.form-mov{
	margin-left: 20px;
}
.hformat li{
	float: left;
	padding: 0 3px;
	text-align: left;
	font-size: 10px;
	}
	.btn-design2{
	background-color: green;
	color: white;
	border: 1px solid white;
	border-radius: 6px;
	height: 30px;
	width: 200px;
}


</style>	

</head>

<div class="row" >
			<div class="col-sm col-md-3 content2">

<center>
<div class="form-format">
<img src="CWC.png" height="70px" width="70px">
<p>Graduates for the S.Y 1990-1991</p>
</div>
</center>

<div class="form-mov">

<form method="Post">	

<div class="form-group">

		<label for="Firstname">Firstname</label>
		<input type="" name="fname" class="form-control" id="Firstname">

</div>

<div class="form-group">
		<label for="Lastname">Lastname</label>
		<input type="" name="lname" class="form-control" id="Lastname">

</div>

<div class="form-group">
	

	<label>Address</label>
	<input type="" name="address" class="form-control">


</div>

<div class="form-group">
	

	<label>Year Graduated</label>
	<input type="" name="grad" class="form-control">

</div>

<div class="form-group">
	<label>Course</label>
	<input type="" name="course" class="form-control">

</div>

<div class="form-group">
	<label>Semester</label>
	<input type="" name="sem" class="form-control">

</div>

<div class="form-group">
	
	<label>Course No.</label>
	<input type="" name="cno" class="form-control">

</div>

<div class="form-group">

	<label>Descriptive Title</label>
	<input type="" name="descript" class="form-control">

</div>


<div class="form-group">
	
	<label>Units</label>
	<input type="" name="units" class="form-control">

</div>


<div class="form-group">
	<label>Pre-Requisites</label>
	<input type="" name="pre" class="form-control">

</div>

<div class="form-group">
	<label>Grade</label>
	<input type="" name="grade"class="form-control">

</div class="form-group">

<div class="form-group">
	<label>Remarks</label>
	<input type="" name="rm" class="form-control">
</div>
<center>
<div class="form-group">
	<div  class="btnsub">
	<button type="submit" name="sub" class="btn-design2">Save</button>
	
		</div>
</div>
</center>

</form>

</div>			
</div>

<?php 

include '1990CODE.php';

?>






