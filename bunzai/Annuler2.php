<?php 
session_start();
require'connexion.php';

foreach($_POST as $id)
{
    $query = "DELETE FROM  reservation where ID=$id;"; 
    mysqli_query($connect,$query);

}
mysqli_close($connect);