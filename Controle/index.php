<?php
header('Content-Type: application/json; charset=utf-8');

try {
    $bdd = new PDO('mysql:host=localhost;dbname=meteos', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['erreur' => 'Connexion échouée : ' . $e->getMessage()]);
    exit;
}

$ville = $_GET['ville'] ?? '';

$req = $bdd->prepare('SELECT * FROM meteo WHERE ville = ?');
$req->execute([$ville]);
$donnees = $req->fetch(PDO::FETCH_ASSOC);

if ($donnees) {
    echo json_encode($donnees);
} else {
    echo json_encode(['erreur' => 'Ville non trouvée']);
}
?>
