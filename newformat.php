<head>
	
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">

</head>

<style>
	
	.head{
  background-color:maroon; 
  height: 55px;
padding: 5px;
  font-size: 12px;
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
.torform{
	font-size: 12px;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
}

</style>



<div class="container-fluid">
	<div class="row head">
		<div class="col-sm-12">
			
<p>Head content</p>

		</div>
	</div>
	
</div>


<!--   Head content -->

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">

			<header class="header">
      <div class="row nav"> 

        <div class="nav-design">
        <nav class="navbar navbar-style">

          <ul class="nav">
        <li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 11px;">Home</a>
          
        </li>

<li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 11px;">Enrollment</a>

              <div class="dropdown-content">
              <a href="TOR.php" style="font-size: 10px;">Apply for Enrollment</a>
              
            </div>

          </li>

            <li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 11px;">Transactions</a>

              <div class="dropdown-content">
              <a href="TOR.php" style="font-size: 10px;">TOR</a>
               <a href="Diploma.php" style="font-size: 10px;">Diploma</a>
                 <a href="Dismissal.php" style="font-size: 10px;">Honorable Dismissal</a>
               <a href="Diploma.php" style="font-size: 10px;">Good Moral</a>
              
            </div>

          </li>
<li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 11px;">Records</a>

              <div class="dropdown-content">
              <a href="" style="font-size: 10px;">Request for Grades</a>
              
            </div>

          </li>
            

            <li class="nav-item"><a href="MAIN.php" class="nav-link" style="font-size: 11px;">Feeds</a></li>

            </li>
              <li class="nav-item"><a href="" class="nav-link" style="font-size: 11px;">Help</a></li>
          </ul>

        </nav>
  
    </div>
      </div>

    </header>
			
		</div>
		
	</div>
	  
</div>

<div class="container-fluid">
  	
  	<div class="row">
  		<div class="col-sm-12 t">
  		<form method="Post" class="torform">
					<label>Fullname:</label><br>
					<input type="" name=""><br>

					<label>Request Document:</label><br>
					<input type="" name="" value="TOR" readonly><br>


					<label>Contact Details:</label><br>
					<label>Email</label><br>
					<input type="" name=""><br>

					<label>Contact Number:</label><br>
					<input type="" name=""><br>

					<label>Please Select the Mode of Payment</label><br><br>
					<label>Mode of Payment:</label><br>
					<input type="" name=""><br>

					<label>Amount</label><br>
					<input type="" name=""><br>

					<label>Reference Number</label><br>
					<input type="" name=""><br>

					<label>Please upload your receipt</label><br>
					<input type="file" name="fileToUpload"><br>


					<button type="submit">Submit</button>

		</form>

  	</div>

  	</div>
  </div>











