<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    <title>Document</title>
</head> 

<body>
    <br>
    <div class="container s1">
        <br><br><br>
        <div class="row text-white">
        <h1> Formulaire d'inscription</h1>
        </div>
        
      <form class="form" method="post" action="connexion.php">
        <br>
        <div class="row  offset-2 col-md-7">
        <label for="nom">Entrez votre nom</label>
        <input type="text" id="nom" name="nom" required>
        </div> <br>
        <div class="row offset-2 col-md-7">
        <label for="prenom">Entrez votre prenom</label>
        <input type="text" id="prenom" name="prenom" required>
        </div> <br>
        <div class="row offset-2 col-md-7">
        <label for="date_de_naissance">Entrez votre date_de_naissance</label>
        <input type="date" id="date_de_naissance" name="date_de_naissance" required>
        </div> <br>
        <div class="row offset-3 col-md-5">
            <input type="submit" value="Enregistrer">
        </div>
       </form>  
    </div> 
</body>
</html>