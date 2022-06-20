<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd

   
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $pseudo = htmlspecialchars($_POST['username']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT *  FROM users = ?');
        $check->execute(array($username));
        $data = $check->fetch();
        $row = $check->rowCount();

        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0)
                    { 
                if($password === $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt 12 fois
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                           
                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO users(lastname, firstname, username, password,) VALUES(:lastname, :firstname, :username, :password, )');
                            $insert->execute(array(
                                'lastname' => $lastname,
                                'firstname' => $firstname,
                                'username' => $username,
                                'password' => $password,
                                
                            ));
                            // On redirige avec le message de succès
                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                    }else{ header('Location: inscription.php?reg_err=username'); die();}
                }else{ header('Location: inscription.php?reg_err=already'); die();}
   
