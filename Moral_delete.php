<?php 

include 'connection.php';

$id = $_GET['id'];

$sql = " DELETE FROM Moral WHERE  `id` = $id";
$result = mysqli_query($conn, $sql);

if ($result) {


	header('Location:Moral_view.php');

}
else{

echo"failed";

}


?>