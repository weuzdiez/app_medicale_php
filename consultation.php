<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation</title>
    <style>
        .button a{
            color: #020202;
            text-decoration: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
           padding-bottom: 39px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #2CD3E1;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .button {
            text-align: center;
            padding: 16px;
            width: 150px;
            border: none;
            font-size: medium;
            background-color: #2CD3E1;
            color: rgb(0, 0, 0);
            border: none;
            border-radius: none;
            
            
            }

.button:hover {
    background-color:#176dc3;
    color: #020202;

}
    </style>
</head>
<body>

<h2>Informations de Consultation</h2>

<table>
    <tr>
        <th>Informations</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>Date</td>
        <td>2024-03-12</td>
    </tr>
    <tr>
        <td>Heure</td>
        <td>12:43</td>
    </tr>
    <tr>
        <td>Nom du Patient</td>
        <td>Le nom du patient consulté</td>
    </tr>
    <tr>
        <td>Prénom du Patient</td>
        <td>Le prénom du patient consulté</td>
    </tr>
    <tr>
        <td>Tension artérielle</td>
        <td>La tension artérielle du patient</td>
    </tr>
    <tr>
        <td>Fréquence cardiaque</td>
        <td>La fréquence cardiaque du patient</td>
    </tr>
    <tr>
        <td>Taux de glucose</td>
        <td>Le taux de glucose dans le sang du patient</td>
    </tr>
    <tr>
        <td>Température</td>
        <td>37°</td>
    </tr>
    <tr>
        <td>Observations</td>
        <td>Toute observation ou remarque faite lors de la consultation
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut provident <br> sint laudantium consectetur illo officiis ipsum aspernatur similique sed. <br> 
        </td>
    </tr>
</table>

<button class="button" ><a href="traitement.php">Traitement</a></button>

</body>
</html>
