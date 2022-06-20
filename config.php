<?php 
        
    try // PHP essaie d'exécuter les instructions à l'intérieur du bloc, S'il y a une erreur, il rentre dans le bloc catch, ici, on arrête l'exécution de la page en affichant un message décrivant l'erreur
    {
        $bdd = new PDO("mysql:host=localhost;dbname=gbaf;charset=utf8", "root", "root");
    }
    catch(Exception $e) // PHP poursuit l'exécution du code et ne lit pas ce qu'il y a dans le bloc catch. Votre page PHP ne devrait donc rien afficher pour le moment
    {
        die('Erreur : '.$e->getMessage());
    }
