<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;
        
        $prenom="Helmut";
        echo "<br/> Bonjour $prenom,<br/> ça farte ?";

        $prenom = "Marc";
        echo "<br/> Bonjour " . $prenom;
        echo " <br/> Bonjour $prenom";
        echo '<br/> Bonjour $prenom <br/>';

        echo $prenom;
        echo "<br/> $prenom <br/>";

        /*$marque = "Renault";
        $couleur = "bleu";
        $immatriculation = "256AB34";

        echo "Voiture $immatriculation de marque $marque (couleur $couleur)";*/

        $voiture = array(
          'marque' => 'Renault',
          'couleur' => 'bleu',
          'immatriculation' => '256AB34');
        echo "Voiture {$voiture['immatriculation']} de marque {$voiture['marque']} (couleur {$voiture['couleur']})";


      ?>
    </body>
</html> 