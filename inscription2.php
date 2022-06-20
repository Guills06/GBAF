<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Inscription</title>
        </head>
        <body>
             <!--   vers header       -->
        <?php include_once "template/header.php" ; ?>
        <div class="login-form">
                        
            <form action="inscription_traitement2.php" method="post">
                <h2 class="text-center">Inscription</h2>       
                <div class="form-group">
                    <input type="text" name="lastname" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="Firstname" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Nom d'utilisateur" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Confirmez le mot de passe" required="required" autocomplete="off">
                </div>

            <!-- Sélecteur question -->
                <label for="question">Question secrète
                </label>
            <select name="question" value="question" required>
                <option value="" selected="<?= $question ?>"> Selectionnez une question </option>

                <option value="Quel est le nom de votre premier animal domestique ?">Quel est le nom de votre premier animal domestique ?
                </option>

                <option value="Quelle est la marque du premier véhicule que vous avez conduit ?">Quelle est la marque du premier véhicule que vous avez conduit ?
                </option>

                <option value="Quelle est votre couleur préférée ?">Quelle est votre couleur préférée ?
                </option>

                <option value="Quel est le nom du pays que vous aimeriez le plus visiter ?">Quel est le nom du pays que vous aimeriez le plus visiter ?
                </option>
                

            </select>

                <!-- Champ réponse -->
                <label for="answer">Réponse
                </label>
                    <input type="text" name="answer" required >


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">CONFIRMER</button>
                </div>   
            </form>
        </div>
        <style>
            .login-form {
                width: 700px;
                margin: 10px auto;
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
        </body>
</html>
<?php include_once('template/footer.php'); ?>
