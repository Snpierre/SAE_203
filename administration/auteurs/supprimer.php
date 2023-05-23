<?php
require_once '../../ressources/includes/connexion-bdd.php';

if(isset($_POST["id"])){

    $id = $_POST["id"];

    $supprimer= $clientMySQL -> prepare("DELETE FROM auteur WHERE id= ?");
    $supprimer-> execute(array($id));

    header("location:index.php");
}
?>