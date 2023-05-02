<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> bonjour le monde</h1>
    <form method="post" action="connexion.php">
        <div class="row">
        <label for="nom">Entrez votre nom</label>
        <input type="text" id="nom" name="nom" required>
        </div> <br>
        <div class="row">
        <label for="prenom">Entrez votre prenom</label>
        <input type="text" id="prenom" name="prenom" required>
        </div> <br>
        <div class="row">
        <label for="date_de_naissance">Entrez votre date_de_naissance</label>
        <input type="date" id="date_de_naissance" name="date_de_naissance" required>
        </div> <br>
        <div class="row">
            <input type="submit" value="Enregistrer">
        </div>
    </form>
    
</body>
</html>