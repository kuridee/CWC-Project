



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


<style type="text/css">
  


  .content{

height: 300px;
width: 300px;
border: 1px solid gray;
padding: 30px;
border-radius: 10px;

  }

  .move{
display: grid;
justify-content: center;
margin-top: 140px;

  }
</style>



<div class="move">
  
  <form method="Post" class="content">

          <label style="font-weight: bold;">ADMIN LOGIN</label><br><br>
          <label style="font-size: 11px;">Username/Email:</label><br>
          <input type="" name="email" style="margin-bottom: 10px;"><br> 
          

            
          <label style="font-size: 11px;">Password:</label><br>
          <input type="Password" name="pass" ><br>
        

          <br>
          <button type="submit" name="adminsub" class="btn btn-danger"> Login</button><br><br>

          </form>


		</div>
		
<?php 

include 'AdminCODE.php';
?>





