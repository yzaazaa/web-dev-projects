<?php
require "connexion.php";
print_r($_POST);
$id=$_POST['id'];
$Prenom=$_POST["prenom"];
$Nom=$_POST["nom"];
$Tel=$_POST["telephone"];
$DH=$_POST["dateetheure"];
$Email=$_POST["email"];
$query="INSERT INTO reservation VALUES ('$id', '$Prenom', '$Nom', '$Tel', '$DH', '$Email')";
echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);
?>