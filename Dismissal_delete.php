<?php 

include 'connection.php';

$id = $_GET['id'];

$sql = " DELETE FROM Dismissal WHERE  `id` = $id";
$result = mysqli_query($conn, $sql);

if ($result) {


	header('Location:Dismissal_view.php');

}
else{

echo"failed";

}


?>