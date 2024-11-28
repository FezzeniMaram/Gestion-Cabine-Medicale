<?php
$serveur = 'localhost';
$serveruser = 'root';
$password = '';
$dbname = 'gestion_cabine';

try {
    $bdd = new PDO("mysql:host=$serveur; dbname=$dbname", $serveruser, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cin = $_POST["cin"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $date_nais = $_POST["date_nais"];
        $telephone = $_POST["telephone"];
        $adresse = $_POST["adresse"];
        $date_rendez = $_POST["date_rendez"];

        $sql = "INSERT INTO Patient (cin, nom, prenom, date_nais, telephone, adresse, date_rendez)
        VALUES ('$cin', '$nom', '$prenom', '$date_nais', '$telephone', '$adresse', '$date_rendez')";
        $stmt = $bdd->prepare($sql);
        $bdd->exec($sql);


    echo "<script>alert('Nouvel enregistrement cree avec succes');</script>";

}     
    }

 catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
<?php
include('Page_accueil.php'); ?>
