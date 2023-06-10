<?php
$couleur_bulle_classe = "gris";
$page_active = "index";

require_once('./ressources/includes/connexion-bdd.php');

// à adapter
$articleCommand = $clientMySQL->prepare('SELECT * FROM article WHERE id = :id');
$articleCommand->execute([
    'id' => 2,
]);
$article = $articleCommand->fetch();

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
        <main class="conteneur-principal conteneur-1280">
           
<h1 class="title" > Festival MMI: Tente ta chance !</h1>
<br>
<br>
        <p class= "châpo">C’est la fin du semestre montre nous tes réalisations !</p>
<p class=" châpo">Le festival MMI est un événement unique qui permet à tous les étudiants MMI de France, de partager et de confronter leurs meilleures réalisations au sein de 11 catégories et deux prix spéciaux, emblématiques de la formation MMI.
</p> 
<br>

<p class= "auteur line-break espace-dessous">Par Diangou CAMARA le 31 mai 2023</p>
<br>
<img src="ressources/images/festivalMMI" alt="" class="image line break">
<br>
<br>


<section class= "conteneur">
<h2 class= "h2 line-break">Avis à tous les étudiants MMI de France</h2>

<p class= "paragraphe">Viens prouver ton talent au Festival MMI jusqu'au 12 mai 2023 ! Inscris-toi et poste ton meilleur travail afin de remporter cette édition. Cela peut être un travail de cours ou un travail personnel, peu importe, tant que cela rentre dans une des catégories.</p>
<img src="" alt="">

</section>




<section class= "conteneur">
<h2 class= "h2 line-break">Pourquoi y participer ?</h2>

<ul class= "paragraphe liste-axes line-break">
        <li>82,8% des MMI qui ont participé ont trouvé une alternance en moins de 3 mois et 91% ont été admis en master &#128512;</li>
        <li>Cela va te permettre d’accroître ta visibilité, d’augmenter tes contacts et de rajouter une ligne impactante sur ton CV</li>
        <li>Tu gagnes la reconnaissance de tes professeurs</li>
    </ul>
</section>

<section class="conteneur">
<h2 class= "h2 line-break">C’est quoi le Festival MMI ?</h2>

<p class= "paragraphe">Un événement qui permet à tous les étudiants qui participent de se mettre en avant, de partager et de confronter leurs meilleures réalisations au sein des catégories qui seront jugées par un jury composé d’enseignants et de professionnels du métier. (C’est le moment de te faire repérer !!)</p>
</section>

<section class="conteneur">
<h2 class= "h2 line-break">Comment t’inscrire ?</h2>

<p class= "paragraphe">Pour participer, tu n’as qu’une seule chose à faire ! C’est de t’inscrire via ce lien et tu pourras ensuite suivre les instructions demandées jusqu’au jour J du concours ! (Easy peasy lemon squeezy !)
Tu trouveras les détails des instructions dans le règlement
</p>
</section>

<section class= "button">
<a href="https://2023.festivalmmi.fr/inscription.231_duu.html">N’hésite plus et viens tenter ta chance !</p>
</section>


        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>

</html>