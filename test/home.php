<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Validation de vos coordonnées!</h1>
        <div>
            <?php
                if( !isset($_GET['nom']) ||!isset($_GET['prenom']) || !isset($_GET['email']) || !isset($_GET['age'])
                )
                { 

                echo "veillez rentrer vos coordonnées s'isl vous plaît";
                return;
                }
                ?>
            
            <h2>rappel de vos données </h2>
            <p><span>votre nom</span>:<?php echo $_GET['nom'];?></p>
            <p><span>votre prénom</span>:<?php echo $_GET['prenom'];?></p>
            <p><span>votre email</span>:<?php echo $_GET['email'];?></p>
            <p><span>vous avez</span>:<?php echo $_GET['age'] .'ans';?></p>
        
        </div>
</body>
</html>
