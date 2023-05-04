<?php 

include 'connection.php';

$display = "SELECT * FROM Feeds ORDER BY id DESC";

$result = mysqli_query($conn, $display);
while ($row = mysqli_fetch_array($result)) {


  echo "<div style = 'height: auto; width:500px; background-color:white; margin-top:15px;'>";
 echo "<div style = 'padding-left:40px; padding-top:20px;'>";

  echo " <img src='CWC.png' height = '40px;' width= '40px' style = 'border: 1px solid gray;'> Cabalum Western College";

 echo "<br>";
  echo "<br>";
  echo "".$row['Image_text'];
   echo "</div>";
  echo "<br>";

  echo "<img src= 'images/" .$row['Post']."' style = 'height:400px; width:490px; padding: 10px;' >";
    echo "<br>";
	echo " <img src='Pictures/com1.png' height = '30px;' width= '30px' style = 'margin-left:20px; margin-bottom: 20px'> Comment";


  echo "</div>";

}

?>