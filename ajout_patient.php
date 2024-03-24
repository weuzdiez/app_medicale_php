<?php
    $host = "localhost";
    $username = "root";
    $password = "1234";
    $database = "gestion";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }


    if (isset($_POST['inscrire'])) {
        // Récupération des données du formulaire
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
        $lieu_naissance = $_POST['lieu_naissance'];
        $date = $_POST['date'];
    
        // Vérification si tous les champs du formulaire sont définis
        if (isset($prenom) && isset($nom) && isset($sexe) && isset($date_naissance) && isset($lieu_naissance) && isset($date)) {
            // Construction de la requête SQL
            $req = "INSERT INTO analise (prenom, nom, sexe, date_naissance, lieu_naissance, date) VALUES ('$prenom', '$nom', '$sexe', '$date_naissance', '$lieu_naissance','$date')";
    
            // Exécution de la requête SQL
            if (mysqli_query($conn, $req)) {
                // Redirection avant l'écho
                header("location:traitement.php");
                echo "patient ajouté avec succès";
            } else {
                echo "Échec d'ajout de patient : " . mysqli_error($conn) ;
            }
        }
    }
    
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RENSEIGNER</title>

    <style>

            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                display:flex;
                justify-content:center;
                align-items: center;
            }

            h1, h2 {
                color: #333;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            table, th, td {
                border: 1px solid #ddd;
            }

            th, td {
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            form {
                margin-top: 20px;
                max-width: 400px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
            }

            input[type="submit"] {
                background-color: #3498db;
                color: white;
                cursor: pointer;
                width:108%;
            }

            input[type="submit"]:hover {
                background-color: #2980b9;
            }

            a {
                text-decoration: none;
                color: #3498db;
            }

            a:hover {
                color: #2980b9;
            }

    </style>

</head>
<body>
    
    <form action="ajout_patient.php " method="post">
        <h1>Ajouter un joueurs</h1>

        <label for="">prenom:</label>
        <input type="text" name="prenom" required><br>

        <label for="">nom:</label>
        <input type="text" name="nom" required><br>

        <label for="">sexe:</label>
        <input type="text" name="sexe" required><br>

        <label for="">date_naissance:</label>
        <input type="date" name="date_naissance" required><br>

        <label for="">lieu_naissance:</label>
        <input type="text" name="lieu_naissance" required><br>

        <label for="">date:</label>
        <input type="date" name="date" required><br>

        <input type="submit" name="inscrire" value="inscrire">
        <a href="traitement.php">Patients</a>
    </form>
    <br>
    
</body>
</html>


