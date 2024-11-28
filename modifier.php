<?php
$serveur = 'localhost';
$serveruser = 'root';
$password = '';
$dbname = 'gestion_cabine';

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$dbname", $serveruser, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cin = $_POST["cin"];
        $nouveau_nom = $_POST["nouveau_nom"];
        $nouveau_prenom = $_POST["nouveau_prenom"];
        $nouvelle_date_nais = $_POST["nouvelle_date_nais"];
        $nouveau_telephone = $_POST["nouveau_telephone"];
        $nouvelle_adresse = $_POST["nouvelle_adresse"];
        $nouvelle_date_rendez = $_POST["nouvelle_date_rendez"];

        $sql = "UPDATE patient 
                SET nom=:nouveau_nom, prenom=:nouveau_prenom, date_nais=:nouvelle_date_nais,
                    telephone=:nouveau_telephone, adresse=:nouvelle_adresse, date_rendez=:nouvelle_date_rendez 
                WHERE cin=:cin";
                
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':cin', $cin);
        $stmt->bindParam(':nouveau_nom', $nouveau_nom);
        $stmt->bindParam(':nouveau_prenom', $nouveau_prenom);
        $stmt->bindParam(':nouvelle_date_nais', $nouvelle_date_nais);
        $stmt->bindParam(':nouveau_telephone', $nouveau_telephone);
        $stmt->bindParam(':nouvelle_adresse', $nouvelle_adresse);
        $stmt->bindParam(':nouvelle_date_rendez', $nouvelle_date_rendez);
        
        $stmt->execute();

        echo "<script>alert('Informations mises a jour avec succes!');</script>";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?><?php
include('Page_accueil.php'); ?>

