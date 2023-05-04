<?php 

include 'connection.php';

$id = $_GET['id'];

$sql = " DELETE FROM Diploma WHERE  `id` = $id";
$result = mysqli_query($conn, $sql);

if ($result) {


	header('Location:Diploma_view.php');

}
else{

echo"failed";

}


?>