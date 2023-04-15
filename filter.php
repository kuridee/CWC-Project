<?php


if(isset($_POST['search']))
{
        $s = $_POST['valueToSearch'];

    $query = "SELECT * FROM YEAR1990 WHERE Firstname LIKE '%$s%' UNION SELECT *  FROM YEAR1991 WHERE Firstname LIKE '%$s%'";
    $search_result = filterTable($query);
}
 else {
    $query = "SELECT * FROM `YEAR1990` UNION  SELECT *  FROM `YEAR1991`";
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

<!DOCTYPE html>
<html>
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

            }
        </style>
    </head>
    <body>
        <h2>Search here!</h2><br>
        <form action="filter.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            <button type="" name="refresh">Reload</button><br><br>
            
            <table>
                <tr>
                    <th scope="row">First Name</th>
                    <th scope="row">Last Name</th>
                    <th scope="row">Address</th>
                      <th scope="row">Year Graduated</th>
                      <th scope="row">Course</th>
                        <th scope="row">Semester</th>
                      <th scope="row">Course No.</th>
                      <th scope="row">Description</th>
                     <th scope="row">Units</th>
                    <th scope="row">Pre-Requisites</th>
                    <th scope="row">Grade</th>
                     <th scope="row">Remarks</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    
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
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>