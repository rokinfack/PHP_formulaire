<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Validation de vos coordonnées!</h1>
        <div>
            <h2>rappel de vos données </h2>
            <p><span>votre nom:</span><?php echo $_GET['nom'];?></p>
            <p><span>votre prénom:</span><?php echo $_GET['prenom'];?></p>
            <p><span>votre email:</span><?php echo $_GET['email'];?></p>
            <p><span>votre age:</span><?php echo $_GET['age'];?></p>
        </div>
</body>
</html>
