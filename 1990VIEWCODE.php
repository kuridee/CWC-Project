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
      
   <div class="col-sm-12 content3" > 			
        <div class="search-head shadow" >
        	 <p>Records - Year 1990</p>

        </div>
        
       
        <form method="post">
        	<label style="font-size: 12px;">Please input the name to search:</label><br>
        	<label>Search:</label>

            <input type="text" name="valueToSearch" placeholder="Enter name" class="input-content">
            <button type="submit" name="search" value="Filter" class="btn-design">Search</button>
            <button type="" name="refresh" class="btn-design">Reload</button><br>
              <a href="1990VIEW.php">Print Record</a> <br>
               <a href="1990FORMAT.php">BACK</a><br><br>

         <div class="table-wrapper-scroll-y my-custom-scrollbar">   
            <table class="table table-bordered table-striped">
            	 <thead class="headth">
                <tr>
                	<th scope="col">Firstname</th>
                      <th scope="col">Course</th>
                        <th scope="col">Semester</th>
                      <th scope="col">Course No.</th>
                      <th scope="col">Description</th>
                     <th scope="col">Units</th>
                    <th scope="col">Grade</th>
                     <th scope="col">Remarks</th>
                     		
                </tr>
            </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>

                 <td><?php  echo $row['Firstname']?></td>
                    <td><?php  echo $row['Course']?></td>
                    <td><?php  echo $row['Semester']?></td>
                    <td><?php  echo $row['CourseNumber']?></td>
                    <td><?php  echo $row['Description']?></td>
                    <td><?php  echo $row['Units']?></td>
                    <td><?php  echo $row['Grade']?></td>
                    <td><?php  echo $row['Remarks']?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
		

		</div>	

         <footer>CWC-Year 1990</footer>
	</div>

