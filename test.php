<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div id="send"> </div>
    <div id="formulaire">
        <form action="info.php" method="post">
            <div class="form-user">
                <label for="name">Utilisateur :</label> <br>
                <input id="name" type="text" name="name" placeholder="Entrer un nom"><br>
            </div>

            <div class="form-comment">
                <label for="comment">Commentaire :</label> <br>
                <input id="comment" type="textarea" name="comment" placeholder="Texte ici..." rows="8">
            </div>

            <p>Sélectionner une catégorie (cliquez sur la couleur de votre choix):</p>
            <div class="choice">
                <div class="urgent">
                    <input class="checked" type="radio" id="urgent" name="choice">
                    <label for="urgent">URGENT !</label>
                </div>
                <div class="a-faire">
                    <input class="checked" type="radio" id="a-faire" name="choice">
                    <label for="a-faire">A FAIRE</label>
                </div>
                <div class="information">
                    <input class="checked" type="radio" id="information" name="choice">
                    <label for="information">INFORMATION</label>
                </div>
            </div>  

            <div class="form-submit">
                <input id="submit" type="submit">
            </div>
           
        </form>
    </div>
    
    <script src="./style.js"></script>
</body>
</html>