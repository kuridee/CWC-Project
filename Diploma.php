
<head>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">

  <link rel="stylesheet" type="text/css" href="style.css">

 
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>


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
.navhead{
  background-color:white; 
  height: 55px;
padding: 5px;


}


.hformat li{
  float: left;
  margin-top: 4px;
  padding: 0 4px;
  text-align: left;
  font-size: 12px;
  
}

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
.ab{
  height: 610px;
}

.setfooter{
  margin: 30px;
  padding-top: 60px;
}
.dfooter{
  height: 100px;
  background-color: maroon;
  text-align: center;
  color: white;
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
  padding: 12px;
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


        </style>

</head>


<div class="container-fluid">
    <div class="row head"> 

    <div class="hformat">
      <li><img src="CWC.png" height="40px" width="40px"></li>
  
      <li><p style="color:white; padding-top: 10px">Cabalum Western College</p></li>
      </div>
  
    
      </div>

  </div>

<!-- LEFT Portion -->



<div class="container-fluid">
      <div class="row navhead">
        <div>
          
          <ul>
             <li class="nav-item dropdown"><a href= "Home.php" class="nav-link dropbtn" style="font-size: 13px; ">Home</a>

              <div class="dropdown-content">
              <a href="" style="font-size: 10px;">Logout</a>
              
            </div>
        </li>

        <li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 13px;">Enrollment</a>

              <div class="dropdown-content">
              <a href="Enroll.php" style="font-size: 10px;">Apply for Enrollment</a>
              
            </div>


              </li>

            <li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 13px;">Transactions</a>

              <div class="dropdown-content">
              <a href="TOR.php" style="font-size: 10px;">TOR</a>
               <a href="Diploma.php" style="font-size: 10px;">Diploma</a>
                 <a href="Dismissal.php" style="font-size: 10px;">Honorable Dismissal</a>
               <a href="Goodmoral.php" style="font-size: 10px;">Good Moral</a>
              
            </div>

          </li>


            <li class="nav-item dropdown"><a href="javascript:void(0)" class="nav-link dropbtn" style="font-size: 13px;">Records</a>

              <div class="dropdown-content">
              <a href="Grades.php" style="font-size: 10px;">Request for Grades</a>
              
            </div>

          </li>

          <li class="nav-item dropdown"><a href= "Feeds.php" class="nav-link dropbtn" style="font-size: 13px; ">Feeds</a>
        </li>

          <li class="nav-item dropdown"><a href= "Feeds.php" class="nav-link dropbtn" style="font-size: 13px; ">Help</a>
        </li>

          </ul>


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

.aform{
  padding-top: 20px;
  border: 1px solid gray;
  padding: 30px;
  margin-bottom: 20px;
  

}
.ip{

  width: 350px;
}

label{
  font-size: 10px;
}
.ator{
  display: grid;
  align-content: center;
  place-items:center;
}

form{
padding: 5px;
}
input{
  padding-bottom: 5px;
  margin-bottom: 10px;
}


</style>

  <div class="container-fluid">
    
    <div class="row">
      <div class="col-sm-12 ator">

<div class="aform">
  


      <form method="Post" class=" form-inline" enctype="multipart/form-data">

        <p style="font-weight: bold;">REQUEST FOR DIPLOMA</p>
        <h6 style="font-size: 12px;">Please fill up the required information below.</h6>



          <label class="labelformat">First-name:</label><br>
          <input type="" name="fname" class="ip" required><br>

            <label>Last-name:</label><br>
          <input type="" name="lname" class="ip" required><br>

          <label>Request Document:</label><br>
          <input type="" name="doc" class="ip" value="DIPLOMA" readonly><br>


           <label>Date:</label><br>
          <input type="date" name="date" class="ip" required><br>


           <label>Course</label><br>
          <select name="course" required>
            <option></option>
            <option>BSOA</option>
            <option>BSHM</option>

            <option>BSTM</option>
            <option>BSBA(Major in Markt. Management)</option>

             <option>ASSC. IN COMMERCIAL SCIENCE</option>
            <option>ASSC. COMP. OFFICE ADMIN.</option>

            <option>Stenography (Special Offering)</option>
            <option>Night Class (Special Offering)</option>
          </select><br>



          <label>Contact Details:</label><br>
          <label>Email</label><br>
          <input type="" name="email" class="ip" required><br>

          <label>Contact Number:</label><br>
          <input type="" name="contact" class="ip" required><br><br>

          <label style="font-weight: bold; font-size: 12px;">Please Select the Mode of Payment</label><br>
          <label>Mode of Payment:</label><br>

          <select name="mode" required>
            <option></option>
            <option>Gcash</option>
            <option>Paymaya</option>
            <option>Cebuana</option>
            <option>Palawan</option>
            <option>Mluierlher</option>
          </select><br>

          <label>Amount</label><br>
          <input type="" name="amount" value="600" class="ip" required><br>

          <label>Reference Number</label><br>
          <input type="" name="ref" class="ip" required><br>

          <input type="hidden" name="size" value="1000000">

          <label>Please upload your receipt</label><br>
          <input type="file" name="image" required><br><br>

          <button type="submit" class="btn btn-danger" name="subdiploma">Submit</button>

    </form>

    </div>

    </div>

    </div>
  </div>

  <?php 
include 'CODE_ALL.php';

  ?>













