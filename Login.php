



<head>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">

  <link rel="stylesheet" type="text/css" href="style.css">






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
.banner-infolog{

		padding-top: 68px;
		padding-left: 60px;
}
.logintop{
	color: darkorange;
	font-size: 25;
}

</style>


<div class="container">
      <div class="row a">

        <div class="col-sm-6 banner-infolog">
          
        <p class = "logintop">LOGIN</p>


					<form method="Post" class="formlog">
      

					<label>Username/Email:</label><br>
					<input type="" name="email"><br>



					<label>Password:</label><br>
					<input type="Password" name="pass"><br>
					<br>


					<button type="submit" name="sub" class="btn btn-danger"> Submit</button><br><br>


					<a href="Registration.php" style = "text-decoration:none;">Create an account.</a><br>
      

      <a href="Admin_Login.php" style = "text-decoration:none;">Sign-in as Administrator.</a><br><br>

       <a href="" onclick="forgot();" style = "text-decoration:none; font-size: 12px;">Forget Password?</a><br>

					</form>

					
        </div>


        <div class="col-sm-6 banner-image">

          <img src="mean.png"  class="img-responsive">

        </div>       
      </div>  

    </div>



    <script>
      
      function forgot(){
        alert("Please contact administrator via email to reset your username/password.");
      }
    </script>

   
<?php 

include 'CODE_Login.php';

?>

