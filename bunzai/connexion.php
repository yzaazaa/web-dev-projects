<?php
define("HOST","localhost");
define("USER","root");
define("PASS","root");
define("DB","bunzai");
$connect=mysqli_connect(HOST,USER,PASS,DB);
if($connect==FALSE)
    echo "Connexion echouée";
else
    echo "Connexion réussie";
?>