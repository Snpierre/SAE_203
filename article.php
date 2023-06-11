<?php
$couleur_bulle_classe = "gris";
$page_active = "index";

require_once('./ressources/includes/connexion-bdd.php');

// Vérifier si l'ID de l'article est passé en tant que paramètre dans l'URL
if (isset($_GET['id'])) {
    // Récupérer l'ID de l'article depuis l'URL
    $articleID = $_GET['id'];

    // à adapter
    $articleCommand = $clientMySQL->prepare('SELECT article.*, auteur.lien_avatar, auteur.prenom, auteur.nom FROM article
    JOIN auteur ON article.auteur_id = auteur.id
    WHERE article.id = :id');
    $articleCommand->execute([
        'id' => $articleID,
    ]);
    $article = $articleCommand->fetch();
} else {
    // ID de l'article non spécifié, rediriger vers une page d'erreur ou une autre page par défaut
    header("Location: erreur.php");
    exit();
}
// Fermeture de la connexion à la base de données
$clientMySQL = null;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo getenv('CHEMIN_BASE') ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - SAÉ 203</title>
    <link rel="icon" href="ressources/images/favicon-GEC_400x400px.png" type="image/png">

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/article.css">
    <link rel="stylesheet" href="ressources/css/article.css">

    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <section>
        <?php require_once('./ressources/includes/header.php'); ?>
        <?php
        // A supprimer si vous n'en avez pas besoin.
        // Mettre une couleur dédiée pour cette bulle si vous gardez la bulle
        require_once('./ressources/includes/bulle.php');
        ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->

        <style>
         /* Styles Tailwindcss spécifique à la page*/
        .conteneur-principal {
            max-width: 1280px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            margin-bottom: 20px;
            color: #ef509f;
            font-size: 4rem;
            font-weight: bold;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .tout {
            display: flex;
            align-items: flex-start;
            text-decoration: none;
            color: #333;
        }

        .image-article {
            margin-right: 20px;
        }

        .image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .chapo {
            font-weight: bold;
            font-size: 1.5rem;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            color: rgb(64, 9, 116);
            font-family: Arial, sans-serif;
            margin-bottom : 15px;
            margin-top: 15px;
        }

        .textbox {
            color: #bd0862;
            font-size: 1rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .auteur {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .prenom-nom {
            font-size: 14px;
        }
        </style>
        <main class="conteneur-principal conteneur-1280">
        <h1 class="header"><?php echo $article["titre"]; ?></h1>
        <img class="image" src="<?php echo $article["image"]?>">
        <a <?php echo $article["id"]; ?> class='tout'>
            <section>
                <p class='chapo'>
                    <?php echo $article['chapo']; ?>
                </p>
                <p class='textbox'>
                    <?php echo $article["contenu"]; ?>
                </p>
                <div class='auteur'>
                    <img class = "avatar" src='<?php echo $article["lien_avatar"]  ?>' alt='photo-auteur_article'>
                    <p class="prenom-nom"><?php echo $article["prenom"]." ".$article["nom"]; ?></p>
                </div>
            </section>
            </a>
        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>

</html>