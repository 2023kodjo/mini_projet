<?php

try
$sql = " INSERT INTO formulaire (nom, prenom, date_de_naissance, mdp) VALUES (:nom, :prenom, :date_de_naissance);
$stmt =$conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':date_de_naissance', $date_de_naissance);
$stmt->bindParam(':mdp', $mdp);
$stmt->execute();
echo "Les information ont été enregistrées avec succès.";
}