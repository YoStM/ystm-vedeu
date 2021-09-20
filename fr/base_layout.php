<?php
require_once "./inc/seo_fr.php";
if ($_SERVER['REQUEST_URI'] == "/") {
    $uri = "page_content/accueil_content.php";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Je suis Yohan SAINT-MARTIN, Développeur web fullstack avec, tout de même, une préférence prononcée pour la partie back-end.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach (seoMetaList($seo_context) as $seo_meta_tag) : ?>
        <?= $seo_meta_tag ?>
    <?php endforeach ?>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/custom.css">
    <title>
        <?php echo $title ?>
    </title>
</head>

<body class="bg-light">
    <header class='hero-content'>
        <?php if ($_SERVER['REQUEST_URI'] != "/fr/accueil.php") : ?>
            <?php require_once "inc/basic_hero_banner.php" ?>
        <?php else : ?>
            <?php require_once "inc/hero_banner.php" ?>
        <?php endif ?>
    </header>
    <main>
        <?php require_once "{$uri}" ?>
    </main>
    <?php require_once "inc/footer_fr.php" ?>
    <script></script>
</body>

</html>