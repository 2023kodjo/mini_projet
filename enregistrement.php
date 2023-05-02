<?php

// pour connecter enregistrement.php à connexion.php
require'connexion.php';

// code d'enregistrement 
$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$DATE_DE_NAISSANCE=$_POST['date_de_naissance'];

$req="INSERT INTO apprenant (nom,prenom,date_de_naissance) values ('$NOM','$PRENOM','$DATE_DE_NAISSANCE')";

$res=mysqli_query($conn,$req);

if(isset($res)){
    echo"SUCCES";
}
else{
    echo"NOT SUCCES";
}
?>