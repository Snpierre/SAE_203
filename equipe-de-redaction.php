<?php
$couleur_bulle_classe = "bleu";
$page_active = "redaction";

require_once('./ressources/includes/connexion-bdd.php');
// Vos requêtes SQL

$listeAuteursCommande = $clientMySQL->prepare('SELECT * FROM auteur');
$listeAuteursCommande->execute();
$listeAuteurs = $listeAuteursCommande->fetchAll();


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo getenv('CHEMIN_BASE') ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Équipe de rédaction - SAÉ 203</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">
    <link rel="icon" href="ressources/images/favicon-GEC_400x400px.png" type="image/png">
    
    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/equipe-de-redaction.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Styles Tailwindcss*/
        .liste-videos {
            display: flex;
            flex-direction : row;
            justify-content: center;
            gap: 20px;
            padding: 145px;
            list-style: none;
            flex-wrap: wrap;
            margin: 120px;
        }
        
        .video-conteneur {
            flex: 1 0 200px;
            max-width: 200px;
            text-align: center;
            transition: transform 0.5s ease;
        }
        
        .video-conteneur:hover {
            transform: scale(1.2);
            opacity: 75%;
        }
        
        
        .avatar {
            width: 100%;
            height: auto;
            border-radius: 124px;
        }
        
        .prenom-nom {
            font-family: Arial, sans-serif; 
            font-size: 1.25rem; 
            line-height: 1.5; 
            margin-bottom: 20px; 
            text-align: center; 
            color: rgb(64, 9, 116);;
        }
        </style>

</head>

<body>
    <section>
        <?php require_once('./ressources/includes/header.php');
        require_once('./ressources/includes/bulle.php');?>
        <?php
        ?>

        <main class="conteneur-principal conteneur-1280">
            <!-- Vous allez principalement écrire votre code HTML dans cette balise -->
            <ul class="liste-videos">
                <?php foreach ($listeAuteurs as $auteur) { ?>
                    <a class="video-conteneur" href="https://twitter.com/UniversiteCergy">
                        <img class="avatar" src="<?php echo $auteur["lien_avatar"]?>"url="<?php echo $auteur["lien_twitter"]?>">
                        <h2 class="prenom-nom"><?php echo $auteur["prenom"]?> <?php echo $auteur["nom"]?></h2>
                <?php } ?>
            </ul>
        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>

</html>