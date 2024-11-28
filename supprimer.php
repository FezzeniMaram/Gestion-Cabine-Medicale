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

        $sql = "DELETE FROM patient WHERE cin=:cin";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':cin', $cin);
        $stmt->execute();

        echo "<script>alert('Patient supprime avec succes!');</script>";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}?>

<?php
include('Page_accueil.php'); ?>


