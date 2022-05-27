





<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Creaction d'un formulaire avec PHP et phpMyAdmin</h1>
        
        <form action="home.php" method="GET">
            <div>
                <label for="nom">ton nom: <input type="text" name='nom'>  </label>
                <label for="prenom">ton prénom: <input type="text" name='prenom'>  </label>
            </div></br>
            <div>

                <label for="age">ton âge: <input type="number" name='age'>  </label>
                <label for="email">ton email: <input type="email" name='email'>   </label> 
            </div>
            <div>
            <buton><input type="submit" value='envoyer'> </buton> 
            </div>
    
        </form>
        <?php
        $recipes=[
            'titre'=>'cassoulets',
            'recipe'=>'couscous',
            'auteur'=>'autor',
            'adresse'=>'ville'
        ];
        $recipes['titre'];
        if(in_array('ville',$recipes)){ 
        foreach($recipes as $recipe){
            echo $recipe .'</br>';
        }
        }
        if(in_array('ville',$recipes))
        {
            echo 'désolé !';
        
        }
        $recip1=array_search('ville',$recipes);
            echo 'ville occupe le n*'.$recip1;
          
        ?>
      
    </body>
</html>