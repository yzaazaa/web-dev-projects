<?php
require'connexion.php';
$query="DELETE from reservation where id=$_POST[id]";
mysqli_query($connect,$query);
mysqli_close($connect);
?>