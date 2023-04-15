


<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	
<style>

	.col-sm{
		background-color: white;
	

	}
	
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


        </style>

</head>


<div class="container-fluid">
		<div class="row head"> 

		<div class="hformat">
			<li><img src="CWC.png" height="25px" width="25px"></li>
	
			<li><p style="color:white; padding-top: 6px">Cabalum Western College</p></li>
			</div>
	
		
			</div>
<header class="header">
			<div class="row nav"> 

				<div class="nav-design">
				<nav class="navbar navbar-style">

					<ul class="nav">
				<li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 11px;">File</a>
						<div class="dropdown-content">
							<a href="" style="font-size: 10px;">Logout</a>
							<a href="" style="font-size: 10px;">Shutdown</a>

						</div>
				</li>


				<li class="nav-item"><a href="" class="nav-link" style="font-size: 11px;">Dashboard</a></li>
					<li class="nav-item"><a href="" class="nav-link" style="font-size: 11px;">Student Records</a></li>

						<li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 11px;">Transcript of Records</a>

							<div class="dropdown-content">
							<a href="" style="font-size: 10px;">2000</a>
							<a href="" style="font-size: 10px;">1999</a>
							<a href="" style="font-size: 10px;">1998</a>
							<a href="" style="font-size: 10px;">1997</a>
							<a href="" style="font-size: 10px;">1996</a>
							<a href="" style="font-size: 10px;">1995</a>
							<a href="" style="font-size: 10px;">1994</a>
							<a href="" style="font-size: 10px;">1993</a>
							<a href="" style="font-size: 10px;">1992</a>
							<a href="" style="font-size: 10px;">1991</a>
							<a href="" style="font-size: 10px;">1990</a>

						</div>


						</li>
							<li class="nav-item"><a href="" class="nav-link" style="font-size: 11px;">Help</a></li>
					</ul>

				</nav>
	
		</div>
			</div>

		</header>

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



			<div class="col-sm-9 content3" >
				

			<?php 

include '1990CODE.php';

?>


<?php


if(isset($_POST['search']))
{
        $s = $_POST['valueToSearch'];

    $query = "SELECT * FROM YEAR1990 WHERE Firstname LIKE '%$s%'";
    $search_result = filterTable($query);
}
 else {
    $query = "SELECT * FROM `YEAR1990` ORDER BY id DESC";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include 'connection.php';
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

?>

<?php 

if (isset($_POST['refresh'])) {
    header("refresh");
}

?>

    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
                font-family: Arial;
             }
            th{
                background-color: maroon;
                color: white;
                font-size: 9px;
              

            }
            td{
            	font-size: 8px;
            	
            }
            .my-custom-scrollbar {
				position: relative;
				height: 300px;
				width: 790px;
				overflow: auto;
}
			.table-wrapper-scroll-y {
			display: block;
}
.search-head{
	height: 20px;
	width: 800px;
	background-color: #00203fff;
	color: white;
	font-size: 10px;
	padding: 5px;
	margin-bottom: 10px;
	

}
.shadow{
	box-shadow:  0 5px 10px #efefef;
}
.content2{
	margin-top: 10px;
	background-color: #f1f1f1;
}
.content3{
	margin-top: 10px;
	
}
.input-content{
	margin-top: 10px;

}
.btn-design{
	background-color: green;
	color: white;
	border: 1px solid white;
	border-radius: 6px;
	height: 30px;
	width: 100px;
}
.btn-design2{
	background-color: green;
	color: white;
	border: 1px solid white;
	border-radius: 6px;
	height: 30px;
	width: 200px;
}
.btnsub{
	margin-top: 5px;
}
        </style>
    </head>
    <body>
    			
        <div class="search-head shadow" >
        	 <p>Records - Year 1990</p>

        </div>
        
       
        <form method="post">
        	<label style="font-size: 12px;">Please input the name to search:</label><br>
        	<label>Search:</label>
            <input type="text" name="valueToSearch" placeholder="Enter name" class="input-content">
            <button type="submit" name="search" value="Filter" class="btn-design">Search</button>
            <button type="" name="refresh" class="btn-design">Reload</button><br>
              <a href="">View Record</a><br><br>

         <div class="table-wrapper-scroll-y my-custom-scrollbar">   
            <table class="table table-bordered table-striped">
            	 <thead class="headth">
                <tr>
                	<th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                      <th scope="col">Year Graduated</th>
                      <th scope="col">Course</th>
                        <th scope="col">Semester</th>
                      <th scope="col">Course No.</th>
                      <th scope="col">Description</th>
                     <th scope="col">Units</th>
                    <th scope="col">Pre-Requisites</th>
                    <th scope="col">Grade</th>
                     <th scope="col">Remarks</th>
                     		<th scope="col">OPERATIONS</th>
                </tr>
            </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>

                      <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['Firstname'];?></td>
                    <td><?php echo $row['Lastname'];?></td>
                    <td><?php echo $row['Address'];?></td>
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
                    	<a href="Empedit.php?id=<?php  echo $row["id"]?>">ADD</a>
                    	<a href="Empedit.php?id=<?php  echo $row["id"]?>">EDIT</a>
						<a href="Empdelete.php?id=<?php  echo $row["id"]?>" >DELETE</a>

                    </td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
		

		</div>	

         <footer>CWC-Year 1990</footer>
	</div>
	
</div>

</div>
    </body>
</html>

