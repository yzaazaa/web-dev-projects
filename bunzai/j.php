<?php 
require"connexion.php";
session_start();
print_r($_REQUEST);
$a=$_REQUEST['id'];
		$query = "DELETE FROM  reservation where id=$a";
		mysqli_query($connect,$query);
		mysqli_close($connect);
	
?>