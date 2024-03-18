<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
    <link rel="stylesheet" href="style.css">
    <style>
            .header {
                display: flex;
                justify-content: space-between;
                background-color: #2CD3E1;
                height: 100px;
                position: fixed;
                top: 0;
                width: 100%;
                left: 0;
                align-items: center;
            }
    

            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                padding-top:70px;
            }

            h1, h2 {
                color: purple;
                text-align: center;
                text-decoration: underline;
                padding-bottom:7px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                
            }

            table, th, td {
                border: 1px solid gray;
                
            }

            th, td {
                padding: 10px;
                text-align: left;
            }

            th {
                background-color: GRAY;
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
            }

            input[type="submit"]:hover {
                background-color: #2980b9;
            }

            a {
                text-decoration: none;
                color: #3498db;
            }

            a:hover {
                color: #200020;
            }

            .links{
                padding:24px;
                background-color:gray;
                
            }

            .links a {
                color:purple;
            }

    </style>
</head>
<body>
        <header class="header">
                <div class="container">
                    <div class="premier-ul">
                        <ul>
                            <li><a href="#AP">A propos</a></li>
                            <li><a href="">Nos Soins</a></li>
                            <li><a href="index.html">Accueil</a></li>
                        </ul>
                    </div>

                <img src="./images/logo.svg" alt="">
            
                    <div class="deuxieme-ul">
                        <ul>
                            <li><a href="">Nos Services</a></li>
                            <li><a href="traitement.php">Traitement</a></li>
                            <li><a href="">Nous Contacter</a></li>
                        </ul>
                    </div>
                </div>
            </header>


        <div class="jumbo-trait">
           
            <h2>
                Consultation des Patients 
           </h2>
           
        </div>


<!-- code -->

    <?php

    $host = "localhost";
    $username = "root";
    $password = "1234";
    $database = "gestion";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    $req="select * from analyse";
    $result=mysqli_query($conn,$req);
    ?>

    </div>
    <table>
    
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date de naissance</th>
        <th>Lieu de naissance</th>
        <th>Date</th>
        <th>Obsertion</th>
    
        <tr>
        <?php
        if(mysqli_num_rows($result) > 0){

            while($row=mysqli_fetch_assoc($result)){
                echo'<tr>'.
                    '<td>'.$row['id'].'</td>'.
                    '<td>'.$row['nom'].'</td>'.
                    '<td>'.$row['prenom'].'</td>'.
                    '<td>'.$row['date_de_naissance'].'</td>'. 
                    '<td>'.$row['lieu_de_naissance'].'</td>'.
                    '<td >'."<a href=modifier.php?id=$row[id]>Detail</a>".'</td>'.  
                    '</tr>';
            }
        }else {
            echo"rien trouvée";
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
        </tr>
    </table>

    <div class="links">
            
        <a  href=" "><< Renseigner >></a>

    </div>
    
    

</body>
</html>




<!-- fin -->



</body>
</html>