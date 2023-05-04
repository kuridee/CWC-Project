<?php 

include 'connection.php';

$id = $_GET['id'];

$sql = " DELETE FROM Tor WHERE  `id` = $id";
$result = mysqli_query($conn, $sql);

if ($result) {


	header('Location:Tor_view.php');

}
else{

echo"failed";

}


?>