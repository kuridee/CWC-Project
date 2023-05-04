



<head>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">

  <link rel="stylesheet" type="text/css" href="style.css">


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<style>

  .col-sm{
    background-color: white;

  }
  
.head{
  background-color:maroon; 
  height: 55px;
padding: 5px;
  font-size: 12px;
}


.hformat li{
  float: left;
  margin-top: 4px;
  padding: 0 4px;
  text-align: left;
  font-size: 12px;
  
}
.banner-infolog{

		padding-top: 68px;
		padding-left: 60px;
}

        </style>

</head>


<div class="container-fluid">
    <div class="row head"> 

    <div class="hformat">
      <li>
        
      <a href="Index.php">
      <img src="CWC.png" height="40px" width="40px"></li>
</a>
      <li><p style="color:white; padding-top: 10px">Cabalum Western College</p></li>
      </div>
  
    
      </div>

  </div>

<!-- LEFT Portion -->

<style>

.content-left{

display: flex;
justify-content: center;
  
}
.inner-content{
padding-top: 40%;

}
.a{

  margin-top: 10px;
}
.img-responsive{
  max-width: 100%;
}
.regislog{
  color: darkorange;
	font-size: 25;
}

</style>



<div class="container">
      <div class="row a">

        <div class="col-sm-6 banner-infolog">
          <p class = "regislog">SIGN UP</p>
				<form method="Post" class="formlog">
					
				<label>Firstname:</label><br>
				<input type="" name="fname" required><br>

				<label>Lastname:</label><br>
				<input type="" name="lname" required><br>


				<label>Email:</label><br>
				<input type="" name="email" required><br>

				<label>Password:</label><br>
				<input type="" name="pass" required><br>
				<br>

				<button type="submit" name="sub" class="btn btn-danger" onclick="show();"> Submit</button><br>

        <label style="font-size: 10px; padding-top: 10px;">Already a user? <a href="Login.php">LOGIN</a></label>
						

				</form>

		
          
        </div>

        
        <div class="col-sm-6 banner-image">

          <img src="mean.png"  class="img-responsive">

        </div>       
      </div>  

    </div>



<script>
  
  function show(){
    
        swal("Good job!", "You clicked the button!", "success");
  }
</script>


<?php 

include 'CODE_Registration.php';


?>

