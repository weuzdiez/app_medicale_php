













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url("images/picqures1.jpg") no-repeat center top;
            background-size: cover;
           
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: transparent;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 1, 2, 0.6);
            
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
            border-radius: 5px;
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
            <h2>Connexion</h2>
            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <label for="username">Email:</label>
                    <input type="email" id="username" placeholder="entrez votre mail " name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" placeholder="XXXXXXXXXXX " name="password" required>
                </div>
                <button type="submit">Se connecter</button>
            </form>
            <p>Vous n'avez pas de compte? <a href="inscription.php">Inscrivez-vous ici</a>.</p>
        </div>

</body>
</html>