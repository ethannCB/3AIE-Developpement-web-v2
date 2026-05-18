<?php
header('Content-Type: application/json; charset=utf-8');
echo "test"
$host = 'localhost'; 
$dbname = 'météo';   
$user = 'root';     
$pass = '';  
$bdd = "";
$reponse = $bdd->query('SELECT * FROM meteos');
try
    {
        $bdd =new PDO('mysql:host=localhost;dbname=meteos', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== ICI
    }
    catch (PDOException $e)
    {
        echo 'Echec de la connexion : ' . $e->getMessage();
    exit;
    }
  
    $reponse = $bdd->query('SELECT * FROM jeux_video');
    while ($donnees = $reponses->fetch())
    {
        echo '<p>' . $donnees['nom'] . '</p>';
    } 
?>