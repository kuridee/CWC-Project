
<head>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">


<!-- Modal import -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="jquery/query.js"></script> 
  <link rel="stylesheet" href="bootstrap341/css/bootstrap.min.css"> 
  <script src="bootstrap341/js/bootstrap.min.js"></script>


  
<style>

  .col-sm{
    background-color: white;

  }
  
.head{
  background-color:maroon; 
  height: 60px;
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
 border-bottom: 1px solid black;
  
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

font-size: 14px;
}
.form-mov{
  margin-left: 20px;
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


<div class="container-fluid" style="background-color: #DFEAF7;">
    <div class="row head"> 

    <div class="hformat">

      <li>
      	<img src="CWC.png" height="40px" width="40px">
      </li>
  
      <li><p style="color:white; padding-top: 10px">Cabalum Western College</p></li>
      </div>
  
    
      </div>
<header class="header">
      <div class="row nav"> 

        <div class="nav-design">
        <nav class="navbar navbar-style">

          <ul class="nav">
        <li class="nav-item dropdown"><a href= "Home.php" class="nav-link dropbtn" style="font-size: 11px;">Home</a>
          
        </li>

<li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 11px;">Enrollment</a>

              <div class="dropdown-content">
              <a href="Enroll.php" style="font-size: 10px;">Apply for Enrollment</a>
              
            </div>

          </li>

            <li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 11px;">Transactions</a>

              <div class="dropdown-content">
              <a href="TOR.php" style="font-size: 10px;">TOR</a>
               <a href="Diploma.php" style="font-size: 10px;">Diploma</a>
                 <a href="Dismissal.php" style="font-size: 10px;">Honorable Dismissal</a>
               <a href="Goodmoral.php" style="font-size: 10px;">Good Moral</a>
              
            </div>

          </li>
<li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 11px;">Records</a>

              <div class="dropdown-content">
              <a href="Grades.php" style="font-size: 10px;">Request for Grades</a>
              
            </div>

          </li>
            

            <li class="nav-item"><a href="" class="nav-link" style="font-size: 11px;">Feeds</a></li>

            </li>
              <li class="nav-item"><a href="" class="nav-link" style="font-size: 11px;">Help</a></li>
          </ul>

        </nav>
  
    </div>
      </div>

    </header>

<!-- LEFT Portion -->

<style>
  
.fedcenter{
   display: grid;
  align-content: center;
  place-items:center;
}
.fdesign{

  height: 90px;
  width: 500px;
  padding: 20px;
  margin-top: 10px;
  background-color: white;

}

.bdesign{
  border:1px solid gray;
  width: 400px;
  background-color: white;
}

#show{

  width: 50px;
  height: 50px;
}

.box-con{

  background-color: white;
  height: 50px;
  height: 360px;
  margin-top: 20px;
  padding: 15px;
}

.box-con2{

  background-color: white;
  height: 50px;
  height: 360px;
  margin-top: 20px;
  padding: 15px;
}



</style>

<div class="container-fluid">
  <div class="row">
    

    <div class="col-sm-3 ">

      <div class="box-con">
        
        <p style="font-size: 40px; color: maroon;">Enroll Now!</p>
        <ul>
          <li> Bachelor of Science in Business Administration</li>
          <li>Bachelor of Science in Hospitality and Management</li>
          <li> Bachelor of Science in Tourism Management</li>
          <li>Bachelor of Science in Office Administration</li>
          <li>Associate in Commercial Science</li>
          <li>Associate in Computer Office Administration</li>
          <li>Stenography</li>
          

        </ul>
      </div>


    <!-- LEFT CONTENT-->

    </div>
    <div class="col-sm-6 fedcenter">

      <p class="fdesign">

<img src="newicon.png" style=" max-width: 100%; height: 50px; width: 50px;">
   
   <button class="bdesign" data-toggle="modal" data-target="#exampleModalCenter">What's on your mind?</button>


<!-- ------Modal --------->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CREATE POST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<?php  include 'FeedsCODE.php'?>


     <form method="Post" enctype="multipart/form-data">

    <label for="Student ID">Say Something . . .</label>
    <input type="" name="text" class="form-control input-sm" style="width: 400px; height: 70px;"><br>
    <input type="hidden" name="size" value="1000000">
    <input type="file" name="image"><br>
    <button type="submit" name="sub" class="btn btn-danger">Post</button>

    </form>


      </div>
      <div class="modal-footer">
       
      </div>





    </div>
  </div>

</div>

<!-- ------Modal --------->
   
    </p>





<?php 

include 'Feedspost.php';

?>


    </div>

    <div class="col-sm-3">
    

    <div class="box-con2">
      <p style="font-size: 20px; color: maroon;">ANNOUNCEMENTS: Scholarship Programs:</p>

      <ul>
        <li>CHED Scholarship 2023 Application is Now Open to Apply. </li>
        <li>The online application for the CHED College Scholarship has now opened.</li>
        <li>The deadline for submissions is May 31, 2023. </li>
        <li>CHED Suspended the application for their merit scholarship programs for academic year 2023 – 2024 (Source)</li>
      
      </ul>

    </div>



    <div class="box-con2">
      <p style="font-size: 20px; color: maroon;">DATES TO REMEMBER: </p>

      <ul>
        <li>CHED Scholarship 2023 Application is Now Open to Apply. </li>
        <li>The online application for the CHED College Scholarship has now opened.</li>
        <li>The deadline for submissions is May 31, 2023. </li>
        <li>CHED Suspended the application for their merit scholarship programs for academic year 2023 – 2024 (Source)</li>
      
      </ul>

    </div>

  </div>

 

  </div>
  
</div>





















