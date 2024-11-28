<?php
$serveur = 'localhost';
$serveruser = 'root';
$password = '';
$dbname = 'gestion_cabine';

try {
    $bdd = new PDO("mysql:host=$serveur; dbname=$dbname", $serveruser, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT cin, nom, prenom, date_nais, telephone, adresse, date_rendez FROM patient";
    $resultat = $bdd->query($sql);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion de la base de donnees</title>
    <!-- <link rel="stylesheet" href="Gestion_cabine.css"> -->
    <link rel="icon" type="image/x-icon" href="health-checkup.png">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 2px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #d9d9d9;
        }
        header{
            width:auto ;
            height: 140px;
            background-color: #d9d9d9;
            text-align: center;
        }
        .supprimer{
            
    background-color: #ff0000; 
    color: #fff; 
    border: none; 
    padding: 5px 10px; 
    border-radius: 3px;
    cursor: pointer;
}
.modifier{
    background-color:#007bff; 
    color: #fff;
    border: none;
    padding: 5px 10px; 
    border-radius: 3px; 
    cursor: pointer; 
}
.Ajouter{
    background-color: #28a745; 
    color: #fff; 
    border: none; 
    padding: 5px 10px;
    border-radius: 3px; 
    cursor: pointer; 
}
        

    </style>
</head>
<body>
    <header><br>
    <p><h2>Gestion de la base de donnees</h2></p>
    <br>
    
    <a class="modifier" href="modifier.html">Modifier</a> 
    <a class="Ajouter" href="ajout_patient.html">Ajouter</a>
    <a class="supprimer" href="supprimer.html">Supprimer</a>
    </header>
   <br></br>
    <table>
        <tr>
            <th>CIN</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de naissance</th>
            <th>Telephone</th>
            <th>Adresse</th>
            <th>Date de rendez-vous</th>
        </tr>
        
        <?php
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>".$row['cin']."</td>";
            echo "<td>".$row['nom']."</td>";
            echo "<td>".$row['prenom']."</td>";
            echo "<td>".$row['date_nais']."</td>";
            echo "<td>".$row['telephone']."</td>";
            echo "<td>".$row['adresse']."</td>";
            echo "<td>".$row['date_rendez']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
