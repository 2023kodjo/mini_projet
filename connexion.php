<?php
$conn=mysqli_connect('localhost','root','','justin') or die(mysqli_error());
$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$DATE_DE_NAISSANCE=$_POST['date_de_naissance'];

$req="INSERT INTO apprenant (nom,prenom,date_de_naissance) values ('$NOM','$PRENOM','$DATE_DE_NAISSANCE')";

$res=mysqli_query($conn,$req);
?>