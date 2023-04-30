
<?php
// Connexion à la base de données
$db_host = 'nos_projets';
$db_name = 'justin';
$db_user = 'root';
$db_password = 'mdp';
try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
} catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// Vérification si le formulaire a été soumis
if(isset($_POST['submit'])) 
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];

    // Préparation et exécution de la


    