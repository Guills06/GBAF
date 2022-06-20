<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données
    include_once "template/header.php" ; // vers header
 //   require_once 'variable.php'; // vers les variables
?>
 
 <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Connexion</title>
        </head>
              
        <body>
    <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'pwd':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> nom d'utlisateur ou mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'username':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> nom d'utlisateur ou mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="username" name="username" class="form-control" placeholder="Nom d'utilisateur" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">SE CONNECTER</button>
                </div>   
            </form>
            </div>
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
                width: 150px;
                display: center;
            }
        </style>
    <body>
</html>
<?php include_once('template/footer.php'); ?>
