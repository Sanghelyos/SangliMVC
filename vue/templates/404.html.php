<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">

    <title>SangliMVC - Page non trouvée</title>
    <meta name="description" content="Mini Framework MVC">
    <meta name="author" content="Johann Pécheux">

    <link href='https://fonts.googleapis.com/css?family=Staatliches' rel='stylesheet'>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/home.css">

</head>

<body>

    <?= $home_date_part ?>

    <div id="home_title" class="text-shadow-white">
        <h1>Oups</h1>
        <h4>On dirait que cette page n'existe pas :/</h4>
        <hr style="width: 70%;">
        <div id="menu_bar" class="text-shadow-white">
            <a href="index.php">Page d'accueil</a>
            <a href="index.php?page=doc">Documentation</a>
            <a href="https://github.com/Sanghelyos/SangliMVC">GitHub</a>
        </div>
    </div>

</body>

</html>