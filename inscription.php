<?php
        
        $host = "localhost";
        $user = "root"; 
        $passe = "1234"; 
        $base = "gestion";

        $connexion=mysqli_connect($host, $user, $passe, $base) or die("Erreur de connexion ".mysqli_errno($connexion)); 

        
        session_start();

        // Récupérer les données du formulaire
        if(isset($_POST['inscrire'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

        // Préparer et exécuter la requête SQL pour insérer les données dans la table utilisateur
        $sql = "INSERT INTO authentification (email, password) VALUES ('$email', '$password')";

        if ($connexion->query($sql) === TRUE) {
            header("location: index.html");
        } else {
            echo "Erreur: " . $sql . "<br>" . $connexion->error;
        }
        }
        // Fermer la connexion à la base de données
        $connexion->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background:  url("images/picqures1.jpg") no-repeat center top;
            background-size: cover;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: transparent;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 1, 0.6);
        }

        .container img{
            text-align: center;
            width: 150px;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 92%;
            padding: 16px;
            border: 1px solid #ccc;
            border-radius: 1px;
        }

        button {
            width: 100%;
            padding: 16px;
            background-color: #2CD3E1;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #007bff;
        }

        p {
            text-align: center;
        }

    </style>

</head>
<body>

    <div class="container">
            <img src="images/logo_isep.png" alt="">
            <h2>Inscription</h2>
            <form action="" method="POST">
                
                <div class="form-group">
                    <label for="email">Adresse e-mail:</label>
                    <input type="email" id="email" placeholder="entrez votre mail " name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" placeholder="XXXXXXXXXX " name="password" required>
                </div>
                <button type="submit" name="inscrire">S'inscrire</button>
            </form>
            <p>Déjà un utilisateur? <a href="authentification.php">Connectez-vous ici</a>.</p>
        </div>

</body>
</html>